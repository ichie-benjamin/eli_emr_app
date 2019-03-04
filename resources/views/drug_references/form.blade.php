<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="name" class="block">Name</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($drugReference)->name) }}" minlength="1" maxlength="255" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-6 {{ $errors->has('unit') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="unit" class="block">Unit</label>
        </div>
        <div class="col-md-12 ">
            <input class="form-control" name="unit" type="text" id="unit" value="{{ old('unit', optional($drugReference)->unit) }}" minlength="1" placeholder="Enter unit here...">
            {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6 {{ $errors->has('quantity') ? 'has-error' : '' }}">
        <div class="col-md-12 row">
            <label for="quantity" class="block">Quantity</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="quantity" type="text" id="quantity" value="{{ old('quantity', optional($drugReference)->quantity) }}" minlength="1" placeholder="Enter quantity here...">
            {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="description" class="block">Description</label>
</div>
    <div class="col-md-12">
        <textarea class="form-control" name="description" id="description" minlength="1" placeholder="Enter description price here...">{{ old('description', optional($drugReference)->description) }}</textarea>
    </div>
</div>

