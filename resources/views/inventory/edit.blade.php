@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit 
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('inventory.update', $inven->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="item_id">Item Id:</label>
          <input type="text" class="form-control" name="item_id" value={{ $inven->item_id }} />
        </div>
        <div class="form-group">
          <label for="player_id">Player Id:</label>
          <input type="text" class="form-control" name="player_id" value={{ $inven->player_id }} />
        </div>
        <div class="form-group">
          <label for="amount">Amount:</label>
          <input type="text" class="form-control" name="amount" value={{ $inven->amount }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection