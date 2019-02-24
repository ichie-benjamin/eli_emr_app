<div class="form-group {{ $errors->has('hiv_patient_id') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="hiv_patient_id" class="block">Hiv Patient</label>
</div>
    <div class="col-md-12">
        <select class="form-control" id="hiv_patient_id" name="hiv_patient_id">
        	    <option value="" style="display: none;" {{ old('hiv_patient_id', optional($treatmentInterruption)->hiv_patient_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select hiv patient</option>
        	@foreach ($hivPatients as $key => $hivPatient)
			    <option value="{{ $key }}" {{ old('hiv_patient_id', optional($treatmentInterruption)->hiv_patient_id) == $key ? 'selected' : '' }}>
			    	{{ $hivPatient }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('hiv_patient_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('first_interruption_reasonfirst_interruption_data') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="first_interruption_reasonfirst_interruption_data" class="block">First Interruption Reasonfirst Interruption Data</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="first_interruption_reasonfirst_interruption_data" type="text" id="first_interruption_reasonfirst_interruption_data" value="{{ old('first_interruption_reasonfirst_interruption_data', optional($treatmentInterruption)->first_interruption_reasonfirst_interruption_data) }}" minlength="1" placeholder="Enter first interruption reasonfirst interruption data here...">
        {!! $errors->first('first_interruption_reasonfirst_interruption_data', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('second_interruption_reason') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="second_interruption_reason" class="block">Second Interruption Reason</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="second_interruption_reason" type="text" id="second_interruption_reason" value="{{ old('second_interruption_reason', optional($treatmentInterruption)->second_interruption_reason) }}" minlength="1" placeholder="Enter second interruption reason here...">
        {!! $errors->first('second_interruption_reason', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('second_interruption_data') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="second_interruption_data" class="block">Second Interruption Data</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="second_interruption_data" type="text" id="second_interruption_data" value="{{ old('second_interruption_data', optional($treatmentInterruption)->second_interruption_data) }}" minlength="1" placeholder="Enter second interruption data here...">
        {!! $errors->first('second_interruption_data', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('departure_from_treatment_reason') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="departure_from_treatment_reason" class="block">Departure From Treatment Reason</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="departure_from_treatment_reason" type="text" id="departure_from_treatment_reason" value="{{ old('departure_from_treatment_reason', optional($treatmentInterruption)->departure_from_treatment_reason) }}" minlength="1" placeholder="Enter departure from treatment reason here...">
        {!! $errors->first('departure_from_treatment_reason', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('departure_from_treatment_data') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="departure_from_treatment_data" class="block">Departure From Treatment Data</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="departure_from_treatment_data" type="text" id="departure_from_treatment_data" value="{{ old('departure_from_treatment_data', optional($treatmentInterruption)->departure_from_treatment_data) }}" minlength="1" placeholder="Enter departure from treatment data here...">
        {!! $errors->first('departure_from_treatment_data', '<p class="help-block">:message</p>') !!}
    </div>
</div>

