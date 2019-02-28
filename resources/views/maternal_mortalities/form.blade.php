<div class="form-group {{ $errors->has('date_time') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_time" class="block">Date Time</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_time" type="datetime-local" id="date_time" value="{{ old('date_time', optional($maternalMortality)->date_time) }}" minlength="1" placeholder="Enter first Date & Time of Death here...">
        {!! $errors->first('date_time', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="first_name" class="block">First Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="first_name" type="text" id="first_name" value="{{ old('first_name', optional($maternalMortality)->first_name) }}" minlength="1" placeholder="Enter first name here...">
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="last_name" class="block">Last Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="last_name" type="text" id="last_name" value="{{ old('last_name', optional($maternalMortality)->last_name) }}" minlength="1" placeholder="Enter last name here...">
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="sex" class="block">Sex</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="sex" name="sex">
        	    <option value="" style="display: none;" {{ old('sex', optional($maternalMortality)->sex ?: '') == '' ? 'selected' : '' }} disabled selected>Select sex</option>
        	@foreach (['Male' => 'Male',
'Female' => 'Female'] as $key => $text)
			    <option value="{{ $key }}" {{ old('sex', optional($maternalMortality)->sex) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_of_birth" class="block">Date of Birth</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_of_birth" type="date" id="date_of_birth" value="{{ old('date_of_birth', optional($maternalMortality)->date_of_birth) }}" minlength="1" placeholder="Enter first Date of Birth here...">
        {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('facility_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="facility_id" class="block">Facility</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="facility_id" name="facility_id">
        	    <option value="" style="display: none;" {{ old('facility_id', optional($maternalMortality)->facility_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select facility</option>
        	@foreach ($facilities as $key => $facility)
			    <option value="{{ $key }}" {{ old('facility_id', optional($maternalMortality)->facility_id) == $key ? 'selected' : '' }}>
			    	{{ $facility }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('facility_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ethnicity_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="ethnicity_id" class="block">Ethnicity</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="ethnicity_id" name="ethnicity_id">
        	    <option value="" style="display: none;" {{ old('ethnicity_id', optional($maternalMortality)->ethnicity_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select ethnicity</option>
        	@foreach ($ethnicities as $key => $ethnicity)
			    <option value="{{ $key }}" {{ old('ethnicity_id', optional($maternalMortality)->ethnicity_id) == $key ? 'selected' : '' }}>
			    	{{ $ethnicity }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('ethnicity_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('causes_of_death') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="causes_of_death" class="block">Causes Of Death</label>
</div>
    <div class="col-md-12">
        @foreach ($deathCauses as $key => $text)
            <label class="form-check-label">
                <input type="checkbox" name="causes_of_death[]" class="form-check-inpu" value="{{ $text }}" {{ in_array($text, old('causes_of_death', optional($maternalMortality)->causes_of_death) ?: []) ? 'checked' : '' }}> {{ $text }}
            </label><br>
        @endforeach
        {{--</select>--}}


        {!! $errors->first('causes_of_death', '<p class="help-block">:message</p>') !!}
    </div>
</div>

