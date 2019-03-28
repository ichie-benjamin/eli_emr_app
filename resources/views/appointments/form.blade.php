<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('patient_id') ? 'has-error' : '' }}">
    <div class="col-md-12">
        <label for="patient_id" class="block">Select Patient</label>
    </div>
    <div class="col-md-12">
        <select class="form-control" id="patient_id" name="patient_id">
            <option value="" style="display: none;" {{ old('patient_id', optional($appointments)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>
            @foreach ($patients as $key => $patient)
                <option value="{{ $key }}" {{ old('patient_id', optional($appointments)->patient_id) == $key ? 'selected' : '' }}>
                    {{ $patient }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('patient_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-6 row {{ $errors->has('appointment_time') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="appointment_time" class="block">Appointment Time</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="appointment_time" type="text" id="appointment_time" value="{{ old('appointment_time', optional($appointments)->appointment_time) }}" minlength="1" placeholder="Enter appointment time here...">
            {!! $errors->first('appointment_time', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('patient_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_name" class="block">Patient Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_name" type="text" id="patient_name" value="{{ old('patient_name', optional($appointments)->patient_name) }}" minlength="1" placeholder="Enter patient name here...">
        {!! $errors->first('patient_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('appointment_date') ? 'has-error' : '' }}">
    <div class="col-md-12">
        <label for="appointment_date" class="block">Appointment Date</label>
    </div>
    <div class="col-md-12">
        <input class="form-control" name="appointment_date" type="date" id="appointment_date" value="{{ old('appointment_date', optional($appointments)->appointment_date) }}" placeholder="Enter appointment date here...">
        {!! $errors->first('appointment_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
<div class="form-group row">
    <div class="col-md-6 row {{ $errors->has('m_r_n') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="m_r_n" class="block">MRN</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="m_r_n" type="text" id="m_r_n" value="{{ old('m_r_n', optional($appointments)->m_r_n) }}" minlength="1" placeholder="Enter m r n here...">
            {!! $errors->first('m_r_n', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="col-md-6 row {{ $errors->has('time_check_in') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="time_check_in" class="block">Time Check In</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="time_check_in" type="text" id="time_check_in" value="{{ old('time_check_in', optional($appointments)->time_check_in) }}" minlength="1" placeholder="Enter time check in here...">
        {!! $errors->first('time_check_in', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
<div class="form-group row">

    <div class="col-md-6 row {{ $errors->has('contact_number') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="contact_number" class="block">Contact Number</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="contact_number" type="text" id="contact_number" value="{{ old('contact_number', optional($appointments)->contact_number) }}" placeholder="Enter contact number here...">
            {!! $errors->first('contact_number', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="col-md-6 row {{ $errors->has('no_show') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="no_show" class="block">No Show</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="no_show" type="text" id="no_show" value="{{ old('no_show', optional($appointments)->no_show) }}" minlength="1" placeholder="Enter no show here...">
        {!! $errors->first('no_show', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('patient_address') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_address" class="block">Patient Address</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_address" type="text" id="patient_address" value="{{ old('patient_address', optional($appointments)->patient_address) }}" minlength="1" placeholder="Enter patient address here...">
        {!! $errors->first('patient_address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-6 row {{ $errors->has('time_check_out') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="time_check_out" class="block">Time Check Out</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="time_check_out" type="text" id="time_check_out" value="{{ old('time_check_out', optional($appointments)->time_check_out) }}" minlength="1" placeholder="Enter time check out here...">
            {!! $errors->first('time_check_out', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
