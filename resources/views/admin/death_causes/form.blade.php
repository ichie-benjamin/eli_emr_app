<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="name" class="block">Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($deathCause)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

