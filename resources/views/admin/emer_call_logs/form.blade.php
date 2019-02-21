
<div class="row">
<div class="col-md-8">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('caller_name') ? 'has-error' : '' }}">
                <label for="caller_name" class="col-md-12 control-label">Caller Name</label>
                <div class="col-md-12">
                    <input class="form-control" name="caller_name" type="text" id="caller_name" value="{{ old('caller_name', optional($emerCallLog)->caller_name) }}" minlength="1" placeholder="Enter caller name here...">
                    {!! $errors->first('caller_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('caller_phone') ? 'has-error' : '' }}">
                <label for="caller_phone" class="col-md-12 control-label">Caller Phone</label>
                <div class="col-md-12">
                    <input class="form-control" name="caller_phone" type="text" id="caller_phone" value="{{ old('caller_phone', optional($emerCallLog)->caller_phone) }}" minlength="1" placeholder="Enter caller phone here...">
                    {!! $errors->first('caller_phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
    </div>



    <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
        <label for="time" class="col-md-12 control-label">Time</label>
        <div class="col-md-12">
            <input class="form-control" name="time" type="text" id="time" value="{{ old('time', optional($emerCallLog)->time) }}" minlength="1" placeholder="Enter time here...">
            {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
        <label for="description" class="col-md-12 control-label">Description</label>
        <div class="col-md-12">
            <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($emerCallLog)->description) }}</textarea>
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


</div>
</div>

<input type="hidden" name="user_id" value="{{ Auth::id() }}">


