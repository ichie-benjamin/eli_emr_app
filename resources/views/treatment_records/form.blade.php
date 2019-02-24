<input value="" name="hiv_patient_id">
<div class="form-group row">
{{--<div class="col-md-3 row {{ $errors->has('hiv_patient_id') ? 'has-error' : '' }}">--}}
    {{----}}
{{--<div class="col-md-12">--}}
    {{--<label for="hiv_patient_id" class="block">Hiv Patient</label>--}}
{{--</div>--}}
    {{--<div class="col-md-12">--}}
        {{--<select class="form-control" id="hiv_patient_id" name="hiv_patient_id">--}}
        	    {{--<option value="" style="display: none;" {{ old('hiv_patient_id', optional($treatmentRecord)->hiv_patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select hiv patient</option>--}}
        	{{--@foreach ($hivPatients as $key => $hivPatient)--}}
			    {{--<option value="{{ $key }}" {{ old('hiv_patient_id', optional($treatmentRecord)->hiv_patient_id) == $key ? 'selected' : '' }}>--}}
			    	{{--{{ $hivPatient }}--}}
			    {{--</option>--}}
			{{--@endforeach--}}
        {{--</select>--}}
        {{----}}
        {{--{!! $errors->first('hiv_patient_id', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}
<div class="col-md-4 row {{ $errors->has('date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date" class="block">Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date" type="date" id="date" value="{{ old('date', optional($treatmentRecord)->date) }}" minlength="1" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-4 row {{ $errors->has('scheduled') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="scheduled" class="block">Scheduled</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="scheduled" type="text" id="scheduled" value="{{ old('scheduled', optional($treatmentRecord)->scheduled) }}" minlength="1" placeholder="Enter scheduled here...">
            {!! $errors->first('scheduled', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-4 row {{ $errors->has('clinician') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="clinician" class="block">Clinician</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="clinician" type="text" id="clinician" value="{{ old('clinician', optional($treatmentRecord)->clinician) }}" minlength="1" placeholder="Enter clinician here...">
            {!! $errors->first('clinician', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group row">
<div class="col-md-4 row {{ $errors->has('reason_for_visit') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="reason_for_visit" class="block">Reason For Visit</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="reason_for_visit" type="text" id="reason_for_visit" value="{{ old('reason_for_visit', optional($treatmentRecord)->reason_for_visit) }}" minlength="1" placeholder="Enter reason for visit here...">
        {!! $errors->first('reason_for_visit', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('observed_symptoms') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="observed_symptoms" class="block">Observed Symptoms</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="observed_symptoms" type="text" id="observed_symptoms" value="{{ old('observed_symptoms', optional($treatmentRecord)->observed_symptoms) }}" minlength="1" placeholder="Enter observed symptoms here...">
        {!! $errors->first('observed_symptoms', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-4 row {{ $errors->has('adherence') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="adherence" class="block">Adherence</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="adherence" type="text" id="adherence" value="{{ old('adherence', optional($treatmentRecord)->adherence) }}" minlength="1" placeholder="Enter adherence here...">
            {!! $errors->first('adherence', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4 row {{ $errors->has('height') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="height" class="block">Height</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="height" type="text" id="height" value="{{ old('height', optional($treatmentRecord)->height) }}" minlength="1" placeholder="Enter height here...">
            {!! $errors->first('height', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="col-md-4 row {{ $errors->has('weight') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="weight" class="block">Weight</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="weight" type="text" id="weight" value="{{ old('weight', optional($treatmentRecord)->weight) }}" minlength="1" placeholder="Enter weight here...">
        {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('LMB') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="LMB" class="block">L M B</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="LMB" type="text" id="LMB" value="{{ old('LMB', optional($treatmentRecord)->LMB) }}" minlength="1" placeholder="Enter l m b here...">
        {!! $errors->first('LMB', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
<div class="form-group row">
    <div class="col-md-4 row {{ $errors->has('functional_status') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="functional_status" class="block">Functional Status</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="functional_status" type="text" id="functional_status" value="{{ old('functional_status', optional($treatmentRecord)->functional_status) }}" minlength="1" placeholder="Enter functional status here...">
            {!! $errors->first('functional_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="col-md-4 row {{ $errors->has('TB_status') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="TB_status" class="block">T B Status</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="TB_status" type="text" id="TB_status" value="{{ old('TB_status', optional($treatmentRecord)->TB_status) }}" minlength="1" placeholder="Enter t b status here...">
        {!! $errors->first('TB_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('aids_associated_conditions') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="aids_associated_conditions" class="block">Aids Associated Conditions</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="aids_associated_conditions" type="text" id="aids_associated_conditions" value="{{ old('aids_associated_conditions', optional($treatmentRecord)->aids_associated_conditions) }}" minlength="1" placeholder="Enter aids associated conditions here...">
        {!! $errors->first('aids_associated_conditions', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-4 row {{ $errors->has('CD_count') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="CD_count" class="block">C D Count</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="CD_count" type="number" id="CD_count" value="{{ old('CD_count', optional($treatmentRecord)->CD_count) }}" placeholder="Enter c d count here...">
        {!! $errors->first('CD_count', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('ALT') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="ALT" class="block">A L T</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="ALT" type="text" id="ALT" value="{{ old('ALT', optional($treatmentRecord)->ALT) }}" minlength="1" placeholder="Enter a l t here...">
        {!! $errors->first('ALT', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-4 row {{ $errors->has('WHO_stage') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="WHO_stage" class="block">W H O Stage</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="WHO_stage" type="number" id="WHO_stage" value="{{ old('WHO_stage', optional($treatmentRecord)->WHO_stage) }}" placeholder="Enter w h o stage here...">
            {!! $errors->first('WHO_stage', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

</div>

<div class="form-group row">
<div class="col-md-4 row {{ $errors->has('HB') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="HB" class="block">H B</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="HB" type="text" id="HB" value="{{ old('HB', optional($treatmentRecord)->HB) }}" minlength="1" placeholder="Enter h b here...">
        {!! $errors->first('HB', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('creatinine') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="creatinine" class="block">Creatinine</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="creatinine" type="text" id="creatinine" value="{{ old('creatinine', optional($treatmentRecord)->creatinine) }}" minlength="1" placeholder="Enter creatinine here...">
        {!! $errors->first('creatinine', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-4 row {{ $errors->has('CTX_dose') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="CTX_dose" class="block">C T X Dose</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="CTX_dose" type="text" id="CTX_dose" value="{{ old('CTX_dose', optional($treatmentRecord)->CTX_dose) }}" minlength="1" placeholder="Enter c t x dose here...">
            {!! $errors->first('CTX_dose', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

</div>

<div class="form-group row">
    <div class="col-md-4 row {{ $errors->has('ART_Regimen') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="ART_Regimen" class="block">A R T  Regimen</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="ART_Regimen" type="text" id="ART_Regimen" value="{{ old('ART_Regimen', optional($treatmentRecord)->ART_Regimen) }}" minlength="1" placeholder="Enter a r t  regimen here...">
            {!! $errors->first('ART_Regimen', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="col-md-4 row {{ $errors->has('date_of_next_visit') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_of_next_visit" class="block">Date Of Next Visit</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_of_next_visit" type="text" id="date_of_next_visit" value="{{ old('date_of_next_visit', optional($treatmentRecord)->date_of_next_visit) }}" placeholder="Enter date of next visit here...">
        {!! $errors->first('date_of_next_visit', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row {{ $errors->has('comments') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="comments" class="block">Comments</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="comments" type="text" id="comments" value="{{ old('comments', optional($treatmentRecord)->comments) }}" minlength="1" placeholder="Enter comments here...">
        {!! $errors->first('comments', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

