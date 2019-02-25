<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="name" class="block">Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($drug)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="quantity" class="block">Quantity</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="quantity" type="number" id="quantity" value="{{ old('quantity', optional($drug)->quantity) }}" minlength="1" placeholder="Enter quantity here...">
        {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('manufactured_date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="manufactured_date" class="block">Manufactured Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="manufactured_date" type="date" id="manufactured_date" value="{{ old('manufactured_date', optional($drug)->manufactured_date) }}" placeholder="Enter manufactured date here...">
        {!! $errors->first('manufactured_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('expiry_date') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="expiry_date" class="block">Expiry Date</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="expiry_date" type="date" id="expiry_date" value="{{ old('expiry_date', optional($drug)->expiry_date) }}" placeholder="Enter expiry date here...">
        {!! $errors->first('expiry_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

