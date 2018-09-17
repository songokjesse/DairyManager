<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $animal->name or ''}}" required>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Breed') ? 'has-error' : ''}}">
    <label for="Breed" class="col-md-4 control-label">{{ 'Breed' }}</label>
    <div class="col-md-6">
        <select name="breed" class="form-control" id="Breed" >
    @foreach (json_decode('{"friesian":"Friesian","ayrshire":"Ayrshire","guernsey":"Guernsey","jersey":"Jersey"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($animal->breed) && $animal->breed == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('Breed', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('calves') ? 'has-error' : ''}}">
    <label for="calves" class="col-md-4 control-label">{{ 'Calves' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="calves" type="number" id="calves" value="{{ $animal->calves or ''}}" required>
        {!! $errors->first('calves', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lastCalvingDate') ? 'has-error' : ''}}">
    <label for="calves" class="col-md-4 control-label">{{ 'Last Calving Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" id="datepicker" name="lastCalvingDate" value="{{ $animal->lastCalvingDate or ''}}" required>
        {!! $errors->first('lastCalvingDate', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
