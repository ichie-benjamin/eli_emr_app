<div class="form-group {{ $errors->has('name_of_disease') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="name_of_disease" class="block">Name Of Disease</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="name_of_disease" type="text" id="name_of_disease" value="{{ old('name_of_disease', optional($diseaseReport)->name_of_disease) }}" minlength="1" placeholder="Enter name of disease here...">
        {!! $errors->first('name_of_disease', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date" class="block">Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date" type="date" id="date" value="{{ old('date', optional($diseaseReport)->date) }}" minlength="1" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="country" class="block">Country</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="country" type="text" id="country" value="{{ old('country', optional($diseaseReport)->country) }}" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('patients_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patients_id" class="block">Patients</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="patients_id" name="patients_id">
        	    <option value="" style="display: none;" {{ old('patients_id', optional($diseaseReport)->patients_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patients</option>
        	@foreach ($patients as $key => $patient)
			    <option value="{{ $key }}" {{ old('patients_id', optional($diseaseReport)->patients_id) == $key ? 'selected' : '' }}>
			    	{{ $patient }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('patients_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('patient_first_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_first_name" class="block">Patient First Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_first_name" type="text" id="patient_first_name" value="{{ old('patient_first_name', optional($diseaseReport)->patient_first_name) }}" minlength="1" placeholder="Enter patient first name here...">
        {!! $errors->first('patient_first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('patient_last_name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_last_name" class="block">Patient Last Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="patient_last_name" type="text" id="patient_last_name" value="{{ old('patient_last_name', optional($diseaseReport)->patient_last_name) }}" minlength="1" placeholder="Enter patient last name here...">
        {!! $errors->first('patient_last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_of_birth" class="block">Date Of Birth</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_of_birth" type="date" id="date_of_birth" value="{{ old('date_of_birth', optional($diseaseReport)->date_of_birth) }}" required="true" placeholder="Enter date of birth here...">
        {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="gender" class="block">Gender</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="gender" name="gender">
        	    <option value="" style="display: none;" {{ old('gender', optional($diseaseReport)->gender ?: '') == '' ? 'selected' : '' }} disabled selected>Select gender here...</option>
        	@foreach (['male' => 'Male',
'female' => 'Female'] as $key => $text)
			    <option value="{{ $key }}" {{ old('gender', optional($diseaseReport)->gender) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ethic_origin') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="ethic_origin" class="block">Ethic Origin</label>
</div>
    <div class="col-md-12">
        <div class="radio">
            <label for="ethic_origin_lorma">
            	<input id="ethic_origin_lorma" class="" name="ethic_origin" type="radio" value="Lorma" {{ old('ethic_origin', optional($diseaseReport)->ethic_origin) == 'Lorma' ? 'checked' : '' }}>
                Lorma
            </label>
        </div>
        <div class="radio">
            <label for="ethic_origin_kissy">
            	<input id="ethic_origin_kissy" class="" name="ethic_origin" type="radio" value="Kissy" {{ old('ethic_origin', optional($diseaseReport)->ethic_origin) == 'Kissy' ? 'checked' : '' }}>
                Kissy
            </label>
        </div>
        <div class="radio">
            <label for="ethic_origin_mende">
            	<input id="ethic_origin_mende" class="" name="ethic_origin" type="radio" value="Mende" {{ old('ethic_origin', optional($diseaseReport)->ethic_origin) == 'Mende' ? 'checked' : '' }}>
                Mende
            </label>
        </div>
        <div class="radio">
            <label for="ethic_origin_gbandi">
            	<input id="ethic_origin_gbandi" class="" name="ethic_origin" type="radio" value="Gbandi" {{ old('ethic_origin', optional($diseaseReport)->ethic_origin) == 'Gbandi' ? 'checked' : '' }}>
                Gbandi
            </label>
        </div>
        <div class="radio">
            <label for="ethic_origin_other">
            	<input id="ethic_origin_other" class="" name="ethic_origin" type="radio" value="Other" {{ old('ethic_origin', optional($diseaseReport)->ethic_origin) == 'Other' ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('ethic_origin', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('area_code') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="area_code" class="block">Area Code</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="area_code" type="text" id="area_code" value="{{ old('area_code', optional($diseaseReport)->area_code) }}" minlength="1" placeholder="Enter area code here...">
        {!! $errors->first('area_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="phone" class="block">Phone</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($diseaseReport)->phone) }}" minlength="1" placeholder="Enter phone here...">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="time" class="block">Time</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="time" type="text" id="time" value="{{ old('time', optional($diseaseReport)->time) }}" minlength="1" placeholder="Enter time here...">
        {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="address" class="block">Address</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="address" type="text" id="address" value="{{ old('address', optional($diseaseReport)->address) }}" minlength="1" placeholder="Enter address here...">
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="city" class="block">City</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="city" type="text" id="city" value="{{ old('city', optional($diseaseReport)->city) }}" minlength="1" placeholder="Enter city here...">
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="state" class="block">State/Province</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="state" type="text" id="state" value="{{ old('state', optional($diseaseReport)->state) }}" minlength="1" placeholder="Enter state here...">
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('zip_code') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="zip_code" class="block">Zip Code</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="zip_code" type="text" id="zip_code" value="{{ old('zip_code', optional($diseaseReport)->zip_code) }}" minlength="1" placeholder="Enter zip code here...">
        {!! $errors->first('zip_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('was_hospitalized') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="was_hospitalized" class="block">Was patient hospitalized for this disease?</label>
</div>
    <div class="col-md-12">
        <div class="radio">
            <label for="was_hospitalized_yes">
            	<input id="was_hospitalized_yes" class="" name="was_hospitalized" type="radio" value="Yes" {{ old('was_hospitalized', optional($diseaseReport)->was_hospitalized) == 'Yes' ? 'checked' : '' }}>
                Yes
            </label>
        </div>
        <div class="radio">
            <label for="was_hospitalized_no">
            	<input id="was_hospitalized_no" class="" name="was_hospitalized" type="radio" value="No" {{ old('was_hospitalized', optional($diseaseReport)->was_hospitalized) == 'No' ? 'checked' : '' }}>
                No
            </label>
        </div>
        <div class="radio">
            <label for="was_hospitalized__24hours">
            	<input id="was_hospitalized__24hours" class="" name="was_hospitalized" type="radio" value="< 24hours" {{ old('was_hospitalized', optional($diseaseReport)->was_hospitalized) == '< 24hours' ? 'checked' : '' }}>
                < 24hours
            </label>
        </div>
        <div class="radio">
            <label for="was_hospitalized__24hours">
            	<input id="was_hospitalized__24hours" class="" name="was_hospitalized" type="radio" value="> 24hours" {{ old('was_hospitalized', optional($diseaseReport)->was_hospitalized) == '> 24hours' ? 'checked' : '' }}>
                > 24hours
            </label>
        </div>

        {!! $errors->first('was_hospitalized', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('did_patients_die') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="did_patients_die" class="block">Did patient die from this disease?</label>
</div>
    <div class="col-md-12">
        <div class="radio">
            <label for="did_patients_die_yes">
            	<input id="did_patients_die_yes" class="" name="did_patients_die" type="radio" value="Yes" {{ old('did_patients_die', optional($diseaseReport)->did_patients_die) == 'Yes' ? 'checked' : '' }}>
                Yes
            </label>
        </div>
        <div class="radio">
            <label for="did_patients_die_no">
            	<input id="did_patients_die_no" class="" name="did_patients_die" type="radio" value="No" {{ old('did_patients_die', optional($diseaseReport)->did_patients_die) == 'No' ? 'checked' : '' }}>
                No
            </label>
        </div>

        {!! $errors->first('did_patients_die', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('is_patient_pregnant') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="is_patient_pregnant" class="block">Is Patient Pregnant</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="is_patient_pregnant_1">
            	<input id="is_patient_pregnant_1" class="" name="is_patient_pregnant" type="checkbox" value="1" {{ old('is_patient_pregnant', optional($diseaseReport)->is_patient_pregnant) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('is_patient_pregnant', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('patient_associated_with') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="patient_associated_with" class="block">Patient Associated With</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="patient_associated_with_child_care_household_contact_of_any_kind">
            	<input id="patient_associated_with_child_care_household_contact_of_any_kind" class="required" name="patient_associated_with[]" type="checkbox" value="Child Care (household contact of any kind)" {{ in_array('Child Care (household contact of any kind)', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Child Care (household contact of any kind)
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_school_studentworker">
            	<input id="patient_associated_with_school_studentworker" class="required" name="patient_associated_with[]" type="checkbox" value="School (student/worker)" {{ in_array('School (student/worker)', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                School (student/worker)
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_working_with_food">
            	<input id="patient_associated_with_working_with_food" class="required" name="patient_associated_with[]" type="checkbox" value="Working with food" {{ in_array('Working with food', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Working with food
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_health_setting_clinichospitals">
            	<input id="patient_associated_with_health_setting_clinichospitals" class="required" name="patient_associated_with[]" type="checkbox" value="Health setting (clinic/hospitals)" {{ in_array('Health setting (clinic/hospitals)', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Health setting (clinic/hospitals)
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_travels_within_or_out_of_the_country_last_30_days">
            	<input id="patient_associated_with_travels_within_or_out_of_the_country_last_30_days" class="required" name="patient_associated_with[]" type="checkbox" value="Travels within or out of the country (last 30 days)" {{ in_array('Travels within or out of the country (last 30 days)', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Travels within or out of the country (last 30 days)
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_animal_contact">
            	<input id="patient_associated_with_animal_contact" class="required" name="patient_associated_with[]" type="checkbox" value="Animal contact" {{ in_array('Animal contact', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Animal contact
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_person_to_person_contact">
            	<input id="patient_associated_with_person_to_person_contact" class="required" name="patient_associated_with[]" type="checkbox" value="Person to person contact" {{ in_array('Person to person contact', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Person to person contact
            </label>
        </div>
        <div class="checkbox">
            <label for="patient_associated_with_farmwork">
            	<input id="patient_associated_with_farmwork" class="required" name="patient_associated_with[]" type="checkbox" value="Farmwork" {{ in_array('Farmwork', old('patient_associated_with', optional($diseaseReport)->patient_associated_with) ?: []) ? 'checked' : '' }}>
                Farmwork
            </label>
        </div>

        {!! $errors->first('patient_associated_with', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('exposure_occurance_district') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="exposure_occurance_district" class="block">Under which district did the exposure occur?</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="exposure_occurance_district_voinjama_district">
            	<input id="exposure_occurance_district_voinjama_district" class="required" name="exposure_occurance_district[]" type="checkbox" value="Voinjama District" {{ in_array('Voinjama District', old('exposure_occurance_district', optional($diseaseReport)->exposure_occurance_district) ?: []) ? 'checked' : '' }}>
                Voinjama District
            </label>
        </div>
        <div class="checkbox">
            <label for="exposure_occurance_district_zorzor_district">
            	<input id="exposure_occurance_district_zorzor_district" class="required" name="exposure_occurance_district[]" type="checkbox" value="Zorzor District" {{ in_array('Zorzor District', old('exposure_occurance_district', optional($diseaseReport)->exposure_occurance_district) ?: []) ? 'checked' : '' }}>
                Zorzor District
            </label>
        </div>
        <div class="checkbox">
            <label for="exposure_occurance_district_foya_district">
            	<input id="exposure_occurance_district_foya_district" class="required" name="exposure_occurance_district[]" type="checkbox" value="Foya District" {{ in_array('Foya District', old('exposure_occurance_district', optional($diseaseReport)->exposure_occurance_district) ?: []) ? 'checked' : '' }}>
                Foya District
            </label>
        </div>
        <div class="checkbox">
            <label for="exposure_occurance_district_vahun_district">
            	<input id="exposure_occurance_district_vahun_district" class="required" name="exposure_occurance_district[]" type="checkbox" value="Vahun District" {{ in_array('Vahun District', old('exposure_occurance_district', optional($diseaseReport)->exposure_occurance_district) ?: []) ? 'checked' : '' }}>
                Vahun District
            </label>
        </div>
        <div class="checkbox">
            <label for="exposure_occurance_district_kolahun_district">
            	<input id="exposure_occurance_district_kolahun_district" class="required" name="exposure_occurance_district[]" type="checkbox" value="Kolahun District" {{ in_array('Kolahun District', old('exposure_occurance_district', optional($diseaseReport)->exposure_occurance_district) ?: []) ? 'checked' : '' }}>
                Kolahun District
            </label>
        </div>
        <div class="checkbox">
            <label for="exposure_occurance_district_salayea_district">
            	<input id="exposure_occurance_district_salayea_district" class="required" name="exposure_occurance_district[]" type="checkbox" value="Salayea District" {{ in_array('Salayea District', old('exposure_occurance_district', optional($diseaseReport)->exposure_occurance_district) ?: []) ? 'checked' : '' }}>
                Salayea District
            </label>
        </div>

        {!! $errors->first('exposure_occurance_district', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('country_of_exposure') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="country_of_exposure" class="block">Country Of Exposure</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="country_of_exposure_liberia">
            	<input id="country_of_exposure_liberia" class="required" name="country_of_exposure[]" type="checkbox" value="Liberia" {{ in_array('Liberia', old('country_of_exposure', optional($diseaseReport)->country_of_exposure) ?: []) ? 'checked' : '' }}>
                Liberia
            </label>
        </div>
        <div class="checkbox">
            <label for="country_of_exposure_sierra">
            	<input id="country_of_exposure_sierra" class="required" name="country_of_exposure[]" type="checkbox" value="Sierra" {{ in_array('Sierra', old('country_of_exposure', optional($diseaseReport)->country_of_exposure) ?: []) ? 'checked' : '' }}>
                Sierra
            </label>
        </div>
        <div class="checkbox">
            <label for="country_of_exposure_leone">
            	<input id="country_of_exposure_leone" class="required" name="country_of_exposure[]" type="checkbox" value="Leone" {{ in_array('Leone', old('country_of_exposure', optional($diseaseReport)->country_of_exposure) ?: []) ? 'checked' : '' }}>
                Leone
            </label>
        </div>
        <div class="checkbox">
            <label for="country_of_exposure_guinea">
            	<input id="country_of_exposure_guinea" class="required" name="country_of_exposure[]" type="checkbox" value="Guinea" {{ in_array('Guinea', old('country_of_exposure', optional($diseaseReport)->country_of_exposure) ?: []) ? 'checked' : '' }}>
                Guinea
            </label>
        </div>

        {!! $errors->first('country_of_exposure', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('show_symbol') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="show_symbol" class="block">Show Symbol</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="show_symbol" name="show_symbol">
        	    <option value="" style="display: none;" {{ old('show_symbol', optional($diseaseReport)->show_symbol ?: '') == '' ? 'selected' : '' }} disabled selected>Select show symbol</option>
        	@foreach ([] as $key => $text)
			    <option value="{{ $key }}" {{ old('show_symbol', optional($diseaseReport)->show_symbol) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('show_symbol', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sympton_date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="sympton_date" class="block">Sympton Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="sympton_date" type="text" id="sympton_date" value="{{ old('sympton_date', optional($diseaseReport)->sympton_date) }}" placeholder="Enter sympton date here...">
        {!! $errors->first('sympton_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('is_sexually_transmitted') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="is_sexually_transmitted" class="block">Is Sexually Transmitted</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="is_sexually_transmitted_1">
            	<input id="is_sexually_transmitted_1" class="" name="is_sexually_transmitted" type="checkbox" value="1" {{ old('is_sexually_transmitted', optional($diseaseReport)->is_sexually_transmitted) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('is_sexually_transmitted', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name_of_facility') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="name_of_facility" class="block">Name Of Facility</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="name_of_facility" type="text" id="name_of_facility" value="{{ old('name_of_facility', optional($diseaseReport)->name_of_facility) }}" minlength="1" placeholder="Enter name of facility here...">
        {!! $errors->first('name_of_facility', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('findings_summary') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="findings_summary" class="block">Findings Summary</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="findings_summary" cols="50" rows="10" id="findings_summary" minlength="1" placeholder="Enter findings summary here...">{{ old('findings_summary', optional($diseaseReport)->findings_summary) }}</textarea>
        {!! $errors->first('findings_summary', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
<div class="col-md-6  {{ $errors->has('first_name_of_principal_investigator') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="first_name_of_principal_investigator" class="block">First Name Of Principal Investigator</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="first_name_of_principal_investigator" type="text" id="first_name_of_principal_investigator" value="{{ old('first_name_of_principal_investigator', optional($diseaseReport)->first_name_of_principal_investigator) }}" minlength="1" placeholder="Enter first name of principal invistigator here...">
        {!! $errors->first('first_name_of_principal_investigator', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('last_name_of_principal_investigator') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="last_name_of_principal_investigator" class="block">Last Name Of Principal Investigator</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="last_name_of_principal_investigator" type="text" id="last_name_of_principal_investigator" value="{{ old('last_name_of_principal_investigator', optional($diseaseReport)->last_name_of_principal_investigator) }}" minlength="1" placeholder="Enter last name of principal invistigator here...">
        {!! $errors->first('last_name_of_principal_investigator', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

<div class="form-group row">
<div class="col-md-6 {{ $errors->has('area_code_of_investigator') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="area_code_of_investigator" class="block">Area Code Of Investigator</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="area_code_of_investigator" type="text" id="area_code_of_investigator" value="{{ old('area_code_of_investigator', optional($diseaseReport)->area_code_of_investigator) }}" minlength="1" placeholder="Enter area code of investigator here...">
        {!! $errors->first('area_code_of_investigator', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6 row {{ $errors->has('phone_of_investigator') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="phone_of_investigator" class="block">Phone Of Investigator</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="phone_of_investigator" type="text" id="phone_of_investigator" value="{{ old('phone_of_investigator', optional($diseaseReport)->phone_of_investigator) }}" minlength="1" placeholder="Enter phone of investigator here...">
        {!! $errors->first('phone_of_investigator', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
