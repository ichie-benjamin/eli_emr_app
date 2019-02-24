
<input value="{{ $hivPatient->id }}" type="hidden" name="hiv_patient_id">

<div class="form-group row">

<div class="col-md-6 row  {{ $errors->has('date_started') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="date_started" class="block">Date Started</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="date_started" type="date" id="date_started" value="{{ old('date_started', optional($artTreatment)->date_started) }}" placeholder="Enter date started here...">
        {!! $errors->first('date_started', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="col-md-6 row  {{ $errors->has('initial_regimen') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="initial_regimen" class="block">Initial Regimen</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="initial_regimen" type="text" id="initial_regimen" value="{{ old('initial_regimen', optional($artTreatment)->initial_regimen) }}" minlength="1" placeholder="Enter initial regimen here...">
            {!! $errors->first('initial_regimen', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

</div>

<div class="col-md-11">
    <h4 class="text-center">FIRST LINE</h4>
    <hr>
</div>


<div class="form-group row">
    <div class="col-md-4 row  {{ $errors->has('first_line_first_substitution') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="first_line_first_substitution" class="block"> First Substitution</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="first_line_first_substitution" type="text" id="first_line_first_substitution" value="{{ old('first_line_first_substitution', optional($artTreatment)->first_line_first_substitution) }}" minlength="1" placeholder="Enter first line first substitution here...">
            {!! $errors->first('first_line_first_substitution', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-4 row  {{ $errors->has('first_line_first_substitute_date') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="first_line_first_substitute_date" class="block"> First Substitute Date</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="first_line_first_substitute_date" type="date" id="first_line_first_substitute_date" value="{{ old('first_line_first_substitute_date', optional($artTreatment)->first_line_first_substitute_date) }}" placeholder="Enter first line first substitute date here...">
            {!! $errors->first('first_line_first_substitute_date', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="col-md-4 row  {{ $errors->has('first_line_first_substitute_reason') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="first_line_first_substitute_reason" class="block"> First Substitute Reason</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="first_line_first_substitute_reason" type="text" id="first_line_first_substitute_reason" minlength="1" placeholder="Enter first line first substitute reason here...">{{ old('first_line_first_substitute_reason', optional($artTreatment)->first_line_first_substitute_reason) }}</textarea>
        {!! $errors->first('first_line_first_substitute_reason', '<p class="help-block">:message</p>') !!}
    </div>
</div>

</div>

<div class="col-md-11">
    <h4 class="text-center">Second LINE</h4>
    <hr>
</div>

<div class="form-group row">
<div class="col-md-4 row  {{ $errors->has('second_line_regimen') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="second_line_regimen" class="block"> Regimen</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="second_line_regimen" type="text" id="second_line_regimen" value="{{ old('second_line_regimen', optional($artTreatment)->second_line_regimen) }}" minlength="1" placeholder="Enter second line regimen here...">
        {!! $errors->first('second_line_regimen', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row  {{ $errors->has('second_line_reason') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="second_line_reason" class="block">Reason</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="second_line_reason" type="text" id="second_line_reason" minlength="1" placeholder="Enter second line reason here...">{{ old('second_line_reason', optional($artTreatment)->second_line_reason) }}</textarea>
        {!! $errors->first('second_line_reason', '<p class="help-block">:message</p>') !!}
    </div>
</div>

    <div class="col-md-4 row  {{ $errors->has('second_line_date') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="second_line_date" class="block">Date</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="second_line_date" type="date" id="second_line_date" value="{{ old('second_line_date', optional($artTreatment)->second_line_date) }}" placeholder="Enter second line date here...">
            {!! $errors->first('second_line_date', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="form-group row">

    <div class="col-md-4 row  {{ $errors->has('second_line_second_substituted') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="second_line_second_substituted" class="block"> Second Substituted</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="second_line_second_substituted" type="text" id="second_line_second_substituted" value="{{ old('second_line_second_substituted', optional($artTreatment)->second_line_second_substituted) }}" minlength="1" placeholder="Enter second line second substituted here...">
            {!! $errors->first('second_line_second_substituted', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

<div class="col-md-4 row  {{ $errors->has('second_line_second_substitude_reason') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="second_line_second_substitude_reason" class="block"> Second Substitude Reason</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="second_line_second_substitude_reason" type="text" id="second_line_second_substitude_reason" minlength="1" placeholder="Enter second line second substitude reason here...">{{ old('second_line_second_substitude_reason', optional($artTreatment)->second_line_second_substitude_reason) }}</textarea>
        {!! $errors->first('second_line_second_substitude_reason', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-4 row  {{ $errors->has('second_line_second_substitute_date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="second_line_second_substitute_date" class="block"> Second Substitute Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="second_line_second_substitute_date" type="date" id="second_line_second_substitute_date" value="{{ old('second_line_second_substitute_date', optional($artTreatment)->second_line_second_substitute_date) }}" placeholder="Enter second line second substitute date here...">
        {!! $errors->first('second_line_second_substitute_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>

