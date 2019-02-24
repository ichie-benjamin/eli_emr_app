
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($slider)->title) }}" minlength="1" maxlength="255" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($slider)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input class="form-control" name="image" type="number" id="image" value="{{ old('image', optional($slider)->image) }}" placeholder="Enter image here...">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
    <label for="is_active" class="col-md-2 control-label">Is Active</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="is_active_1">
            	<input id="is_active_1" class="" name="is_active" type="checkbox" value="1" {{ old('is_active', optional($slider)->is_active) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sub_title') ? 'has-error' : '' }}">
    <label for="sub_title" class="col-md-2 control-label">Sub Title</label>
    <div class="col-md-10">
        <input class="form-control" name="sub_title" type="text" id="sub_title" value="{{ old('sub_title', optional($slider)->sub_title) }}" minlength="1" placeholder="Enter sub title here...">
        {!! $errors->first('sub_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('first_link') ? 'has-error' : '' }}">
    <label for="first_link" class="col-md-2 control-label">First Link</label>
    <div class="col-md-10">
        <input class="form-control" name="first_link" type="text" id="first_link" value="{{ old('first_link', optional($slider)->first_link) }}" minlength="1" placeholder="Enter first link here...">
        {!! $errors->first('first_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('second_link') ? 'has-error' : '' }}">
    <label for="second_link" class="col-md-2 control-label">Second Link</label>
    <div class="col-md-10">
        <input class="form-control" name="second_link" type="text" id="second_link" value="{{ old('second_link', optional($slider)->second_link) }}" minlength="1" placeholder="Enter second link here...">
        {!! $errors->first('second_link', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}">
    <label for="position" class="col-md-2 control-label">Position</label>
    <div class="col-md-10">
        <select class="form-control" id="position" name="position">
        	    <option value="" style="display: none;" {{ old('position', optional($slider)->position ?: '') == '' ? 'selected' : '' }} disabled selected>Select position</option>
        	@foreach (['left' => 'Left',
'center' => 'Center',
'right' => 'Right'] as $key => $text)
			    <option value="{{ $key }}" {{ old('position', optional($slider)->position) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div>
</div>

