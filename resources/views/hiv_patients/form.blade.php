<div class="form-group row">
    <div class="col-md-6 row {{ $errors->has('patient_name') ? 'has-error' : '' }}">
    <div class="col-md-12">
    <label for="patient_name" class="block">Patient Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_name" type="text" id="patient_name" value="{{ old('patient_name', optional($hivPatient)->patient_name) }}" minlength="1" placeholder="Enter patient name here...">
        {!! $errors->first('patient_name', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
    <div class="col-md-6 row {{ $errors->has('facility_client_name') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="facility_client_name" class="block">Facility Client Name</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="facility_client_name" type="text" id="facility_client_name" value="{{ old('facility_client_name', optional($hivPatient)->facility_client_name) }}" minlength="1" placeholder="Enter facility client name here...">
            {!! $errors->first('facility_client_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('unique_code') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="unique_code" class="block">Unique Code</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="unique_code" type="text" id="unique_code" value="{{ old('unique_code', optional($hivPatient)->unique_code) }}" minlength="1" placeholder="Enter unique code here...">
        {!! $errors->first('unique_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_of_birth" class="block">Date Of Birth</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_of_birth" type="text" id="date_of_birth" value="{{ old('date_of_birth', optional($hivPatient)->date_of_birth) }}" placeholder="Enter date of birth here...">
        {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('sex') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="sex" class="block">Sex</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="sex" name="sex">
        	    <option value="" style="display: none;" {{ old('sex', optional($hivPatient)->sex ?: '') == '' ? 'selected' : '' }} disabled selected>Select sex</option>
        	@foreach (['male' => 'Male',
'female' => 'Female'] as $key => $text)
			    <option value="{{ $key }}" {{ old('sex', optional($hivPatient)->sex) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('address') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="address" class="block">Address</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="address" type="text" id="address" value="{{ old('address', optional($hivPatient)->address) }}" minlength="1" placeholder="Enter address here...">
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row  {{ $errors->has('family_members') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="family_members" class="block">Family Members</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="family_members" type="text" id="family_members" value="{{ old('family_members', optional($hivPatient)->family_members) }}" minlength="1" placeholder="Enter family members here...">
        {!! $errors->first('family_members', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row  {{ $errors->has('contact') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="contact" class="block">Contact</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="contact" type="text" id="contact" value="{{ old('contact', optional($hivPatient)->contact) }}" minlength="1" placeholder="Enter contact here...">
        {!! $errors->first('contact', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 row {{ $errors->has('date_confirmed_hiv') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_confirmed_hiv" class="block">Date Confirmed Hiv</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_confirmed_hiv" type="date" id="date_confirmed_hiv" value="{{ old('date_confirmed_hiv', optional($hivPatient)->date_confirmed_hiv) }}" placeholder="Enter date confirmed hiv here...">
        {!! $errors->first('date_confirmed_hiv', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('hiv_type') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="hiv_type" class="block">Hiv Type</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="hiv_type" name="hiv_type">
        	    <option value="" style="display: none;" {{ old('hiv_type', optional($hivPatient)->hiv_type ?: '') == '' ? 'selected' : '' }} disabled selected>Select hiv type</option>
        	@foreach (['HIV 1' => 'HIV 1',
'HIV 2' => 'HIV 2',
'HIV 1&2' => 'HIV 1&2'] as $key => $text)
			    <option value="{{ $key }}" {{ old('hiv_type', optional($hivPatient)->hiv_type) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('hiv_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
