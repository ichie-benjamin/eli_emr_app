{{--<div class="form-group {{ $errors->has('patient_id') ? 'has-error' : '' }}">--}}
{{--<div class="col-md-12">--}}
    {{--<label for="patient_id" class="block">Patient</label>--}}
{{--</div>--}}
    {{--<div class="col-md-12">--}}
        {{--<select class="form-control" id="patient_id" name="patient_id">--}}
        	    {{--<option value="" style="display: none;" {{ old('patient_id', optional($dischargeSummary)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>--}}
        	{{--@foreach ($patients as $key => $patient)--}}
			    {{--<option value="{{ $key }}" {{ old('patient_id', optional($dischargeSummary)->patient_id) == $key ? 'selected' : '' }}>--}}
			    	{{--{{ $patient }}--}}
			    {{--</option>--}}
			{{--@endforeach--}}
        {{--</select>--}}
        {{----}}
        {{--{!! $errors->first('patient_id', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group row">
    <div class="col-md-6 row {{ $errors->has('surname') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="surname" class="block">Surname</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="surname" type="text" id="surname" value="{{ old('surname', optional($dischargeSummary)->surname) }}" minlength="1" placeholder="Enter surname here...">
            {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6 row {{ $errors->has('forname') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="forname" class="block">Forname</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="forname" type="text" id="forname" value="{{ old('forname', optional($dischargeSummary)->forname) }}" minlength="1" placeholder="Enter forname here...">
            {!! $errors->first('forname', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_of_birth" class="block">Date Of Birth</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_of_birth" type="date" id="date_of_birth" value="{{ old('date_of_birth', optional($dischargeSummary)->date_of_birth) }}" placeholder="Enter date of birth here...">
        {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('NHS') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="NHS" class="block">N H S</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="NHS" type="text" id="NHS" value="{{ old('NHS', optional($dischargeSummary)->NHS) }}" minlength="1" placeholder="Enter n h s here...">
        {!! $errors->first('NHS', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('address') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="address" class="block">Address</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="address" type="text" id="address" value="{{ old('address', optional($dischargeSummary)->address) }}" minlength="1" placeholder="Enter address here...">
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('phone') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="phone" class="block">Phone</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($dischargeSummary)->phone) }}" minlength="1" placeholder="Enter phone here...">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row  {{ $errors->has('discharging_consultant') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="discharging_consultant" class="block">Discharging Consultant</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="discharging_consultant" type="text" id="discharging_consultant" value="{{ old('discharging_consultant', optional($dischargeSummary)->discharging_consultant) }}" minlength="1" placeholder="Enter discharging consultant here...">
        {!! $errors->first('discharging_consultant', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row  {{ $errors->has('discharging_specialty') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="discharging_specialty" class="block">Discharging Specialty</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="discharging_specialty" type="text" id="discharging_specialty" value="{{ old('discharging_specialty', optional($dischargeSummary)->discharging_specialty) }}" minlength="1" placeholder="Enter discharging specialty here...">
        {!! $errors->first('discharging_specialty', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
    <div class="col-md-4 row {{ $errors->has('medication_stopped') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="medication_stopped" class="block">Medication Stopped / Changed</label>
        </div>
        <div class="col-md-12">
            <select class="form-control" id="medication_stopped" name="medication_stopped">
                <option value="" style="display: none;" {{ old('medication_stopped', optional($dischargeSummary)->medication_stopped ?: '') == '' ? 'selected' : '' }} disabled selected>Select medication stopped</option>
                @foreach (['Stopped' => 'Stopped',
    'Changed' => 'Changed'] as $key => $text)
                    <option value="{{ $key }}" {{ old('medication_stopped', optional($dischargeSummary)->medication_stopped) == $key ? 'selected' : '' }}>
                        {{ $text }}
                    </option>
                @endforeach
            </select>

            {!! $errors->first('medication_stopped', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="col-md-4 row  {{ $errors->has('method_of_admission') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="method_of_admission" class="block">Method Of Admission</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="method_of_admission" type="text" id="method_of_admission" value="{{ old('method_of_admission', optional($dischargeSummary)->method_of_admission) }}" minlength="1" placeholder="Enter method of admission here...">
        {!! $errors->first('method_of_admission', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row  {{ $errors->has('date_of_discharge') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_of_discharge" class="block">Date Of Discharge</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_of_discharge" type="date" id="date_of_discharge" value="{{ old('date_of_discharge', optional($dischargeSummary)->date_of_discharge) }}" placeholder="Enter date of discharge here...">
        {!! $errors->first('date_of_discharge', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row  {{ $errors->has('GP_details') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="GP_details" class="block">G P Details</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="GP_details" cols="50" rows="10" id="GP_details" minlength="1" placeholder="Enter g p details here...">{{ old('GP_details', optional($dischargeSummary)->GP_details) }}</textarea>
        {!! $errors->first('GP_details', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row  {{ $errors->has('diagnosis_at_discharge') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="diagnosis_at_discharge" class="block">Diagnosis At Discharge</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="diagnosis_at_discharge" cols="50" rows="10" id="diagnosis_at_discharge" minlength="1" placeholder="Enter diagnosis at discharge here...">{{ old('diagnosis_at_discharge', optional($dischargeSummary)->diagnosis_at_discharge) }}</textarea>
        {!! $errors->first('diagnosis_at_discharge', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row  {{ $errors->has('operation_and_procedures') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="operation_and_procedures" class="block">Operation And Procedures</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="operation_and_procedures" cols="50" rows="10" id="operation_and_procedures" minlength="1" placeholder="Enter operation and procedures here...">{{ old('operation_and_procedures', optional($dischargeSummary)->operation_and_procedures) }}</textarea>
        {!! $errors->first('operation_and_procedures', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row  {{ $errors->has('reasons_for_admission_and_presenting_complaint') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="reasons_for_admission_and_presenting_complaint" class="block">Reasons For Admission And Presenting Complaint</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="reasons_for_admission_and_presenting_complaint" cols="50" rows="10" id="reasons_for_admission_and_presenting_complaint" minlength="1" placeholder="Enter reasons for admission and presenting complaint here...">{{ old('reasons_for_admission_and_presenting_complaint', optional($dischargeSummary)->reasons_for_admission_and_presenting_complaint) }}</textarea>
        {!! $errors->first('reasons_for_admission_and_presenting_complaint', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('clinical_narrative') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="clinical_narrative" class="block">Clinical Narrative</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="clinical_narrative" cols="50" rows="10" id="clinical_narrative" minlength="1" placeholder="Enter clinical narrative here...">{{ old('clinical_narrative', optional($dischargeSummary)->clinical_narrative) }}</textarea>
        {!! $errors->first('clinical_narrative', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row  {{ $errors->has('relevant_investigation_and_result') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="relevant_investigation_and_result" class="block">Relevant Investigation And Result</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="relevant_investigation_and_result" cols="50" rows="10" id="relevant_investigation_and_result" minlength="1" placeholder="Enter relevant investigation and result here...">{{ old('relevant_investigation_and_result', optional($dischargeSummary)->relevant_investigation_and_result) }}</textarea>
        {!! $errors->first('relevant_investigation_and_result', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('relevant_legal_information') ? 'has-error' : '' }}">
    <div class="col-md-12">
        <label for="relevant_legal_information" class="block">Relevant Legal Information</label>
    </div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="relevant_legal_information" cols="50" rows="10" id="relevant_legal_information" minlength="1" placeholder="Enter relevant legal information here...">{{ old('relevant_legal_information', optional($dischargeSummary)->relevant_legal_information) }}</textarea>
        {!! $errors->first('relevant_legal_information', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-6 row {{ $errors->has('strategies_for_potential_problems') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="strategies_for_potential_problems" class="block">Strategies For Potential Problems</label>
        </div>
        <div class="col-md-12">
            <textarea class="form-control textarea" name="strategies_for_potential_problems" cols="50" rows="10" id="strategies_for_potential_problems" minlength="1" placeholder="Enter strategies for potential problems here...">{{ old('strategies_for_potential_problems', optional($dischargeSummary)->strategies_for_potential_problems) }}</textarea>
            {!! $errors->first('strategies_for_potential_problems', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

</div>
<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('information_given_to_patient') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="information_given_to_patient" class="block">Information Given To Patient</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="information_given_to_patient" cols="50" rows="10" id="information_given_to_patient" minlength="1" placeholder="Enter information given to patient here...">{{ old('information_given_to_patient', optional($dischargeSummary)->information_given_to_patient) }}</textarea>
        {!! $errors->first('information_given_to_patient', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('GP_actions') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="GP_actions" class="block">G P Actions (Pls Specify Date)</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="GP_actions" cols="50" rows="10" id="GP_actions" minlength="1" placeholder="Enter g p actions here...">{{ old('GP_actions', optional($dischargeSummary)->GP_actions) }}</textarea>
        {!! $errors->first('GP_actions', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
    <div class="col-md-4 row {{ $errors->has('discharge_destination') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="discharge_destination" class="block">Discharge Destination</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="discharge_destination" type="text" id="discharge_destination" value="{{ old('discharge_destination', optional($dischargeSummary)->discharge_destination) }}" minlength="1" placeholder="Enter discharge destination here...">
            {!! $errors->first('discharge_destination', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-4 row {{ $errors->has('discharging_doctor_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="discharging_doctor_name" class="block">Discharging Doctor Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="discharging_doctor_name" type="text" id="discharging_doctor_name" value="{{ old('discharging_doctor_name', optional($dischargeSummary)->discharging_doctor_name) }}" minlength="1" placeholder="Enter discharging doctor name here...">
        {!! $errors->first('discharging_doctor_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('bleep_no') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="bleep_no" class="block">Bleep No</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="bleep_no" type="text" id="bleep_no" value="{{ old('bleep_no', optional($dischargeSummary)->bleep_no) }}" minlength="1" placeholder="Enter bleep no here...">
        {!! $errors->first('bleep_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

