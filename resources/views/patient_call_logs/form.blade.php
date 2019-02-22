<input name="staff_id" value="{{ Auth::id() }}" type="hidden">

<div class="form-group {{ $errors->has('patient_id') ? 'has-error' : '' }}">
    <label for="patient_id" class="col-md-2 control-label">Patient</label>
    <div class="col-md-10">
        <select class="form-control" id="patient_id" name="patient_id">
        	    <option value="" style="display: none;" {{ old('patient_id', optional($patientCallLog)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>
        	@foreach ($patients as $patient)
			    <option value="{{ $patient->id }}" {{ old('patient_id', optional($patientCallLog)->patient_id) == $patient->id ? 'selected' : '' }}>
			    	{{ $patient->name }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('patient_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
    <label for="time" class="col-md-2 control-label">Time</label>
    <div class="col-md-10">
        <input class="form-control" name="time" type="text" id="time" value="{{ old('time', optional($patientCallLog)->time) }}" minlength="1" placeholder="Enter time here...">
        {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($patientCallLog)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

