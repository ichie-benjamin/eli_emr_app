<div class="form-group {{ $errors->has('m_r_n') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="m_r_n" class="block">M R N</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="m_r_n" type="text" id="m_r_n" value="{{ old('m_r_n', optional($dailySchedule)->m_r_n) }}" minlength="1" placeholder="Enter m r n here...">
        {!! $errors->first('m_r_n', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('patient_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_name" class="block">Patient Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_name" type="text" id="patient_name" value="{{ old('patient_name', optional($dailySchedule)->patient_name) }}" minlength="1" placeholder="Enter patient name here...">
        {!! $errors->first('patient_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('patient_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_id" class="block">Patient</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="patient_id" name="patient_id">
        	    <option value="" style="display: none;" {{ old('patient_id', optional($dailySchedule)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>
        	@foreach ($patients as $key => $patient)
			    <option value="{{ $key }}" {{ old('patient_id', optional($dailySchedule)->patient_id) == $key ? 'selected' : '' }}>
			    	{{ $patient }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('patient_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('chief_complient') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="chief_complient" class="block">Chief Complient</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="chief_complient" type="text" id="chief_complient" value="{{ old('chief_complient', optional($dailySchedule)->chief_complient) }}" minlength="1" placeholder="Enter chief complient here...">
        {!! $errors->first('chief_complient', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('appointment_time') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="appointment_time" class="block">Appointment Time</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="appointment_time" type="text" id="appointment_time" value="{{ old('appointment_time', optional($dailySchedule)->appointment_time) }}" minlength="1" placeholder="Enter appointment time here...">
        {!! $errors->first('appointment_time', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('time_check_in') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="time_check_in" class="block">Time Check In</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="time_check_in" type="text" id="time_check_in" value="{{ old('time_check_in', optional($dailySchedule)->time_check_in) }}" minlength="1" placeholder="Enter time check in here...">
        {!! $errors->first('time_check_in', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('time_check_out') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="time_check_out" class="block">Time Check Out</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="time_check_out" type="text" id="time_check_out" value="{{ old('time_check_out', optional($dailySchedule)->time_check_out) }}" minlength="1" placeholder="Enter time check out here...">
        {!! $errors->first('time_check_out', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_show') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="no_show" class="block">No Show</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="no_show" type="text" id="no_show" value="{{ old('no_show', optional($dailySchedule)->no_show) }}" minlength="1" placeholder="Enter no show here...">
        {!! $errors->first('no_show', '<p class="help-block">:message</p>') !!}
    </div>
</div>

