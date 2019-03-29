<div class="form-group row">

<div class="col-md-6 ro {{ $errors->has('patient_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_id" class="block">Patient</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="patient_id" name="patient_id">
        	    <option value="" style="display: none;" {{ old('patient_id', optional($patientHistory)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>
        	@foreach ($patients as $key => $patient)
			    <option value="{{ $key }}" {{ old('patient_id', optional($patientHistory)->patient_id) == $key ? 'selected' : '' }}>
			    	{{ $patient }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('patient_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="col-md-6 {{ $errors->has('patient_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_name" class="block">Patient Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_name" type="text" id="patient_name" value="{{ old('patient_name', optional($patientHistory)->patient_name) }}" minlength="1" placeholder="Enter patient name here...">
        {!! $errors->first('patient_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

</div>
<div class="form-group {{ $errors->has('medical_case') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="medical_case" class="block">Patient Medical Case</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="medical_case" cols="50" rows="10" id="medical_case" minlength="1" placeholder="Enter medical case here...">{{ old('medical_case', optional($patientHistory)->medical_case) }}</textarea>
        {!! $errors->first('medical_case', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6 {{ $errors->has('previous_case') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="previous_case" class="block">Previous Case</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="previous_case" cols="50" rows="10" id="previous_case" minlength="1" placeholder="Enter previous case here...">{{ old('previous_case', optional($patientHistory)->previous_case) }}</textarea>
        {!! $errors->first('previous_case', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="col-md-6 {{ $errors->has('current_case') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="current_case" class="block">Current Case</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="current_case" cols="50" rows="10" id="current_case" minlength="1" placeholder="Enter current case here...">{{ old('current_case', optional($patientHistory)->current_case) }}</textarea>
        {!! $errors->first('current_case', '<p class="help-block">:message</p>') !!}
    </div>
</div>

</div>



<div class="form-group {{ $errors->has('patient_address') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_address" class="block">Patient Address</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_address" type="text" id="patient_address" value="{{ old('patient_address', optional($patientHistory)->patient_address) }}" minlength="1" placeholder="Enter patient address here...">
        {!! $errors->first('patient_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('assigned_doctor') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="assigned_doctor" class="block">Assigned Doctor</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="assigned_doctor" type="text" id="assigned_doctor" value="{{ old('assigned_doctor', optional($patientHistory)->assigned_doctor) }}" minlength="1" placeholder="Enter assigned doctor here...">
        {!! $errors->first('assigned_doctor', '<p class="help-block">:message</p>') !!}
    </div>
</div>

