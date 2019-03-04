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
        <div class="col-md-12">
            <input class="form-control" name="unit" type="number" id="unit" value="{{ old('unit', optional($drugReference)->unit) }}" minlength="1" placeholder="Enter unit here...">
            {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6 row {{ $errors->has('quantity') ? 'has-error' : '' }}">
        <div class="col-md-12">
            <label for="quantity" class="block">Quantity</label>
        </div>
        <div class="col-md-12">
            <input class="form-control" name="quantity" type="number" id="quantity" value="{{ old('quantity', optional($drugReference)->quantity) }}" minlength="1" placeholder="Enter quantity here...">
            {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="form-group {{ $errors->has('wholesale_price') ? 'has-error' : '' }}">
<div class="col-md-12">
    <label for="wholesale_price" class="block">Wholesale Price</label>
</div>
    <div class="col-md-12">
        <input class="form-control" name="wholesale_price" type="text" id="wholesale_price" value="{{ old('wholesale_price', optional($drugReference)->wholesale_price) }}" minlength="1" placeholder="Enter wholesale price here...">
        {!! $errors->first('wholesale_price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

