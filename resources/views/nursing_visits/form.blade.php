
<div class="form-group row">
    <div class="col-md-6 {{ $errors->has('patient_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_id" class="block">Patient</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="patient_id" name="patient_id">
        	    <option value="" style="display: none;" {{ old('patient_id', optional($nursingVisit)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>
        	@foreach ($patients as $key => $patient)
			    <option value="{{ $key }}" {{ old('patient_id', optional($nursingVisit)->patient_id) == $key ? 'selected' : '' }}>
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
        <input class="form-control" name="patient_name" type="text" id="patient_name" value="{{ old('patient_name', optional($nursingVisit)->patient_name) }}" minlength="1" placeholder="Enter patient name here...">
        {!! $errors->first('patient_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>


<div class="form-group row">
<div class="col-md-6 {{ $errors->has('patient_case') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_case" class="block">Patient Case</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="patient_case" cols="50" rows="10" id="patient_case" minlength="1" placeholder="Enter patient case here...">{{ old('patient_case', optional($nursingVisit)->patient_case) }}</textarea>
        {!! $errors->first('patient_case', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 {{ $errors->has('nurse_report') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="nurse_report" class="block">Nurse Report</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control textarea" name="nurse_report" cols="50" rows="10" id="nurse_report" minlength="1" placeholder="Enter nurse report here...">{{ old('nurse_report', optional($nursingVisit)->nurse_report) }}</textarea>
        {!! $errors->first('nurse_report', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>


<div class="form-group row">
<div class="col-md-6 {{ $errors->has('time_in') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="time_in" class="block">Time In</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="time_in" type="text" id="time_in" value="{{ old('time_in', optional($nursingVisit)->time_in) }}" minlength="1" placeholder="Enter time in here...">
        {!! $errors->first('time_in', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 {{ $errors->has('time_out') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="time_out" class="block">Time Out</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="time_out" type="text" id="time_out" value="{{ old('time_out', optional($nursingVisit)->time_out) }}" minlength="1" placeholder="Enter time out here...">
        {!! $errors->first('time_out', '<p class="help-block">:message</p>') !!}
    </div>
</div>

</div>


<div class="form-group {{ $errors->has('patient_status') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_status" class="block">Patient Status</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="patient_status" name="patient_status">
        	    <option value="" style="display: none;" {{ old('patient_status', optional($nursingVisit)->patient_status ?: '') == '' ? 'selected' : '' }} disabled selected>Enter patient status here...</option>
        	@foreach (['discharged' => 'Discharged',
'waiting' => 'Waiting'] as $key => $text)
			    <option value="{{ $key }}" {{ old('patient_status', optional($nursingVisit)->patient_status) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('patient_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

