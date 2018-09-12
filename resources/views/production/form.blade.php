<div class="form-group {{ $errors->has('animal_id') ? 'has-error' : ''}}">
    <label for="animal_id" class="col-md-4 control-label">{{ 'Animal Name' }}</label>
    <div class="col-md-6">
        <select class="form-control" required name="animal_id">
        <option selected disabled>-- Select Cow Name -- </option>
            @foreach($animals as $animal)
        <option value="{{$animal->id}}">{{$animal->name}}</option>
                @endforeach
        </select>
        {{--<input class="form-control" name="animal_id" type="number" id="animal_id" value="{{ $production->animal_id or ''}}" >--}}
        {!! $errors->first('animal_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="col-md-4 control-label">{{ 'Amount' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="amount" type="text" id="amount" value="{{ $production->amount or ''}}" required>
        {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="form-group {{ $errors->has('MilkingSession') ? 'has-error' : ''}}">
    <label for="MilkingSession" class="col-md-4 control-label">{{ 'Milking Session' }}</label>
    <div class="col-md-6">
       <select name="MilkingSession" required class="form-control">
           <option selected disabled>-- Select Milking Session -- </option>
           <option>Morning</option>
           <option>Afternoon</option>
       </select>
        {!! $errors->first('MilkingSession', '<p class="help-block">:message</p>') !!}
    </div>
</div>
  <div class="form-group">
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="hidden" id="user_id" value="{{ Auth::user()->id}}" >
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

