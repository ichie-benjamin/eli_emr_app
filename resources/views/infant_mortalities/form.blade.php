<div class="form-group {{ $errors->has('year_of_death') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="year_of_death" class="block">Year of Death</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="year_of_death" type="date" id="year_of_death" value="{{ old('year_of_death', optional($infantMortality)->year_of_death) }}" minlength="1" placeholder="Enter first Date of Death here...">
        {!! $errors->first('year_of_death', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="first_name" class="block">First Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="first_name" type="text" id="first_name" value="{{ old('first_name', optional($infantMortality)->first_name) }}" minlength="1" placeholder="Enter first name here...">
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="last_name" class="block">Last Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="last_name" type="text" id="last_name" value="{{ old('last_name', optional($infantMortality)->last_name) }}" minlength="1" placeholder="Enter last name here...">
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="sex" class="block">Sex</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="sex" name="sex">
        	    <option value="" style="display: none;" {{ old('sex', optional($infantMortality)->sex ?: '') == '' ? 'selected' : '' }} disabled selected>Select sex</option>
        	@foreach (['Male' => 'Male',
'Female' => 'Female'] as $key => $text)
			    <option value="{{ $key }}" {{ old('sex', optional($infantMortality)->sex) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="age" class="block">Age</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="age" name="age">
        	    <option value="" style="display: none;" {{ old('age', optional($infantMortality)->age ?: '') == '' ? 'selected' : '' }} disabled selected>Select age</option>
        	@foreach (['< 1 month' => '< 1 month',
'1 - 3 month' => '1 - 3 month',
'4 - 6 month' => '4 - 6 month',
'7 - 9 month' => '7 - 9 month',
'10 - 11 month' => '10 - 11 month',
'12 month' => '12 month',
'< 5 years' => '< 5 years'] as $key => $text)
			    <option value="{{ $key }}" {{ old('age', optional($infantMortality)->age) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('facility_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="facility_id" class="block">Facility</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="facility_id" name="facility_id">
        	    <option value="" style="display: none;" {{ old('facility_id', optional($infantMortality)->facility_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select facility</option>
        	@foreach ($facilities as $key => $facility)
			    <option value="{{ $key }}" {{ old('facility_id', optional($infantMortality)->facility_id) == $key ? 'selected' : '' }}>
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
        	    <option value="" style="display: none;" {{ old('ethnicity_id', optional($infantMortality)->ethnicity_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select ethnicity</option>
        	@foreach ($ethnicities as $key => $ethnicity)
			    <option value="{{ $key }}" {{ old('ethnicity_id', optional($infantMortality)->ethnicity_id) == $key ? 'selected' : '' }}>
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
        <select class="form-control" id="causes_of_death[]" name="causes_of_death[]" multiple="multiple">
        	    <option value="" style="display: none;" {{ old('causes_of_death', optional($infantMortality)->causes_of_death ?: '') == '' ? 'selected' : '' }} disabled selected>Select causes of death</option>
        	@foreach (['Malaria' => 'Malaria',
'Typhoid' => 'Thyphoid',
'Measles' => 'Measles'] as $key => $text)
			    <option value="{{ $key }}" {{ in_array($key, old('causes_of_death', optional($infantMortality)->causes_of_death) ?: []) ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('causes_of_death', '<p class="help-block">:message</p>') !!}
    </div>
</div>

