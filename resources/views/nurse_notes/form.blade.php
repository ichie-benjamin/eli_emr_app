{{--<div class="form-group {{ $errors->has('patient_id') ? 'has-error' : '' }}">--}}
{{--<div class="col-md-12">--}}
    {{--<label for="patient_id" class="block">Patient</label>--}}
{{--</div>--}}
    {{--<div class="col-md-12">--}}
        {{--<select class="form-control" id="patient_id" name="patient_id">--}}
        	    {{--<option value="" style="display: none;" {{ old('patient_id', optional($nurseNote)->patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select patient</option>--}}
        	{{--@foreach ($patients as $key => $patient)--}}
			    {{--<option value="{{ $key }}" {{ old('patient_id', optional($nurseNote)->patient_id) == $key ? 'selected' : '' }}>--}}
			    	{{--{{ $patient }}--}}
			    {{--</option>--}}
			{{--@endforeach--}}
        {{--</select>--}}
        {{----}}
        {{--{!! $errors->first('patient_id', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}
<div class="form-group {{ $errors->has('surname') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="surname" class="block">Surname</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="surname" type="text" id="surname" value="{{ old('surname', optional($nurseNote)->surname) }}" minlength="1" placeholder="Enter surname here...">
        {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="firstname" class="block">Firstname</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="firstname" type="text" id="firstname" value="{{ old('firstname', optional($nurseNote)->firstname) }}" minlength="1" placeholder="Enter firstname here...">
        {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('parent_lives') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="parent_lives" class="block">Parent Lives</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="parent_lives" name="parent_lives">
        	    <option value="" style="display: none;" {{ old('parent_lives', optional($nurseNote)->parent_lives ?: '') == '' ? 'selected' : '' }} disabled selected>Select parent lives</option>
        	@foreach (['alone' => 'Alone',
'with family' => 'With Family',
'none relative' => 'Non Relative'] as $key => $text)
			    <option value="{{ $key }}" {{ old('parent_lives', optional($nurseNote)->parent_lives) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('parent_lives', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('change_in_medication') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="change_in_medication" class="block">Change In Medication</label>
</div>
    <div class="col-md-12">
        <div class="radio">
            <label for="change_in_medication_yes">
            	<input id="change_in_medication_yes" class="" name="change_in_medication" type="radio" value="yes" {{ old('change_in_medication', optional($nurseNote)->change_in_medication) == 'yes' ? 'checked' : '' }}>
                Yes
            </label>
        </div>
        <div class="radio">
            <label for="change_in_medication_no">
            	<input id="change_in_medication_no" class="" name="change_in_medication" type="radio" value="no" {{ old('change_in_medication', optional($nurseNote)->change_in_medication) == 'no' ? 'checked' : '' }}>
                No
            </label>
        </div>
        <div class="radio">
            <label for="change_in_medication_other">
            	<input id="change_in_medication_other" class="" name="change_in_medication" type="radio" value="other" {{ old('change_in_medication', optional($nurseNote)->change_in_medication) == 'other' ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('change_in_medication', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('allergies') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="allergies" class="block">Allergies</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="allergies" type="text" id="allergies" value="{{ old('allergies', optional($nurseNote)->allergies) }}" minlength="1" placeholder="Enter allergies here...">
        {!! $errors->first('allergies', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('vital_signs') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="vital_signs" class="block">Vital Signs</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="vital_signs_temp">
            	<input id="vital_signs_temp" class="required" name="vital_signs[]" type="checkbox" value="temp" {{ in_array('temp', old('vital_signs', optional($nurseNote)->vital_signs) ?: []) ? 'checked' : '' }}>
                Temp
            </label>
        </div>
        <div class="checkbox">
            <label for="vital_signs_pulse">
            	<input id="vital_signs_pulse" class="required" name="vital_signs[]" type="checkbox" value="pulse" {{ in_array('pulse', old('vital_signs', optional($nurseNote)->vital_signs) ?: []) ? 'checked' : '' }}>
                Pulse
            </label>
        </div>
        <div class="checkbox">
            <label for="vital_signs_resp">
            	<input id="vital_signs_resp" class="required" name="vital_signs[]" type="checkbox" value="resp" {{ in_array('resp', old('vital_signs', optional($nurseNote)->vital_signs) ?: []) ? 'checked' : '' }}>
                Resp
            </label>
        </div>
        <div class="checkbox">
            <label for="vital_signs_wt">
            	<input id="vital_signs_wt" class="required" name="vital_signs[]" type="checkbox" value="wt" {{ in_array('wt', old('vital_signs', optional($nurseNote)->vital_signs) ?: []) ? 'checked' : '' }}>
                Wt
            </label>
        </div>
        <div class="checkbox">
            <label for="vital_signs_bp">
            	<input id="vital_signs_bp" class="required" name="vital_signs[]" type="checkbox" value="bp" {{ in_array('bp', old('vital_signs', optional($nurseNote)->vital_signs) ?: []) ? 'checked' : '' }}>
                BP
            </label>
        </div>
        <div class="checkbox">
            <label for="vital_signs_other">
            	<input id="vital_signs_other" class="required" name="vital_signs[]" type="checkbox" value="other" {{ in_array('other', old('vital_signs', optional($nurseNote)->vital_signs) ?: []) ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('vital_signs', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('respiratory') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="respiratory" class="block">Respiratory</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="respiratory_cough">
            	<input id="respiratory_cough" class="required" name="respiratory[]" type="checkbox" value="Cough" {{ in_array('Cough', old('respiratory', optional($nurseNote)->respiratory) ?: []) ? 'checked' : '' }}>
                Cough
            </label>
        </div>
        <div class="checkbox">
            <label for="respiratory_sputum">
            	<input id="respiratory_sputum" class="required" name="respiratory[]" type="checkbox" value="Sputum" {{ in_array('Sputum', old('respiratory', optional($nurseNote)->respiratory) ?: []) ? 'checked' : '' }}>
                Sputum
            </label>
        </div>
        <div class="checkbox">
            <label for="respiratory_other">
            	<input id="respiratory_other" class="required" name="respiratory[]" type="checkbox" value="Other" {{ in_array('Other', old('respiratory', optional($nurseNote)->respiratory) ?: []) ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('respiratory', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('skin_assessment') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="skin_assessment" class="block">Skin Assessment</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="skin_assessment" cols="50" rows="10" id="skin_assessment" minlength="1">{{ old('skin_assessment', optional($nurseNote)->skin_assessment) }}</textarea>
        {!! $errors->first('skin_assessment', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('cardiovascular_car_assessment') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="cardiovascular_car_assessment" class="block">Cardiovascular Car Assessment</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="cardiovascular_car_assessment" cols="50" rows="10" id="cardiovascular_car_assessment" minlength="1" placeholder="Enter cardiovascular car assessment here...">{{ old('cardiovascular_car_assessment', optional($nurseNote)->cardiovascular_car_assessment) }}</textarea>
        {!! $errors->first('cardiovascular_car_assessment', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('musculoskeletal_assessment') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="musculoskeletal_assessment" class="block">Musculoskeletal Assessment</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="musculoskeletal_assessment" cols="50" rows="10" id="musculoskeletal_assessment" minlength="1" placeholder="Enter musculoskeletal assessment here...">{{ old('musculoskeletal_assessment', optional($nurseNote)->musculoskeletal_assessment) }}</textarea>
        {!! $errors->first('musculoskeletal_assessment', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('digestive_assessment') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="digestive_assessment" class="block">Digestive/Nutrition Assessment</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="digestive_assessment" cols="50" rows="10" id="digestive_assessment" minlength="1" placeholder="Enter digestive assessment here...">{{ old('digestive_assessment', optional($nurseNote)->digestive_assessment) }}</textarea>
        {!! $errors->first('digestive_assessment', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pain_assessment') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="pain_assessment" class="block">Pain Assessment</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="pain_assessment" cols="50" rows="10" id="pain_assessment" minlength="1" placeholder="Enter pain assessment here...">{{ old('pain_assessment', optional($nurseNote)->pain_assessment) }}</textarea>
        {!! $errors->first('pain_assessment', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pain_assessment_scale') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="pain_assessment_scale" class="block">Pain Assessment scale/1-5 less pain. 6 and above more pain</label>
</div>
    <div class="col-md-12">
        <div class="checkbox">
            <label for="pain_assessment_scale_1">
            	<input id="pain_assessment_scale_1" class="required" name="pain_assessment_scale[]" type="checkbox" value="1" {{ in_array('1', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                1
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_2">
            	<input id="pain_assessment_scale_2" class="required" name="pain_assessment_scale[]" type="checkbox" value="2" {{ in_array('2', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                2
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_3">
            	<input id="pain_assessment_scale_3" class="required" name="pain_assessment_scale[]" type="checkbox" value="3" {{ in_array('3', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                3
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_4">
            	<input id="pain_assessment_scale_4" class="required" name="pain_assessment_scale[]" type="checkbox" value="4" {{ in_array('4', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                4
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_5">
            	<input id="pain_assessment_scale_5" class="required" name="pain_assessment_scale[]" type="checkbox" value="5" {{ in_array('5', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                5
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_6">
            	<input id="pain_assessment_scale_6" class="required" name="pain_assessment_scale[]" type="checkbox" value="6" {{ in_array('6', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                6
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_7">
            	<input id="pain_assessment_scale_7" class="required" name="pain_assessment_scale[]" type="checkbox" value="7" {{ in_array('7', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                7
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_8">
            	<input id="pain_assessment_scale_8" class="required" name="pain_assessment_scale[]" type="checkbox" value="8" {{ in_array('8', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                8
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_9">
            	<input id="pain_assessment_scale_9" class="required" name="pain_assessment_scale[]" type="checkbox" value="9" {{ in_array('9', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                9
            </label>
        </div>
        <div class="checkbox">
            <label for="pain_assessment_scale_10">
            	<input id="pain_assessment_scale_10" class="required" name="pain_assessment_scale[]" type="checkbox" value="10" {{ in_array('10', old('pain_assessment_scale', optional($nurseNote)->pain_assessment_scale) ?: []) ? 'checked' : '' }}>
                10
            </label>
        </div>

        {!! $errors->first('pain_assessment_scale', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('intervention') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="intervention" class="block">Intervention: reason for visit</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="intervention" cols="50" rows="10" id="intervention" minlength="1" placeholder="Enter intervention here...">{{ old('intervention', optional($nurseNote)->intervention) }}</textarea>
        {!! $errors->first('intervention', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('goal') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="goal" class="block">Goal/plan</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="goal" cols="50" rows="10" id="goal" minlength="1" placeholder="Enter goal here...">{{ old('goal', optional($nurseNote)->goal) }}</textarea>
        {!! $errors->first('goal', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('supervisor_assessment') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="supervisor_assessment" class="block">Supervisor Assessment</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="supervisor_assessment" cols="50" rows="10" id="supervisor_assessment" minlength="1" placeholder="Enter supervisor assessment here...">{{ old('supervisor_assessment', optional($nurseNote)->supervisor_assessment) }}</textarea>
        {!! $errors->first('supervisor_assessment', '<p class="help-block">:message</p>') !!}
    </div>
</div>

