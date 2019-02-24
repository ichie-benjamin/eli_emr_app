
<input type="hidden" value="{{ $hivPatients->id }}" name="hiv_patient_id">
<div class="form-group {{ $errors->has('height') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="height" class="block">Height</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="height" type="number" id="height" value="{{ old('height', optional($clinicianAssessment)->height) }}" minlength="1" placeholder="Enter height here...">
        {!! $errors->first('height', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="weight" class="block">Weight</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="weight" type="number" id="weight" value="{{ old('weight', optional($clinicianAssessment)->weight) }}" minlength="1" placeholder="Enter weight here...">
        {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('body_mass_index') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="body_mass_index" class="block">Body Mass Index</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="body_mass_index" type="number" id="body_mass_index" value="{{ old('body_mass_index', optional($clinicianAssessment)->body_mass_index) }}" minlength="1" placeholder="Enter body mass index here...">
        {!! $errors->first('body_mass_index', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date" class="block">Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date" type="date" id="date" value="{{ old('date', optional($clinicianAssessment)->date) }}" minlength="1" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

