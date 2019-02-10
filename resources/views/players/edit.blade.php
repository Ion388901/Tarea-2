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
      <form method="post" action="{{ route('players.update', $player->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" value={{ $player->name }} />
        </div>
        <div class="form-group">
          <label for="level">Level:</label>
          <input type="text" class="form-control" name="level" value={{ $player->level }} />
        </div>
        <div class="form-group">
          <label for="job_id">Job Id:</label>
          <input type="text" class="form-control" name="job_id" value={{ $player->job_id }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection