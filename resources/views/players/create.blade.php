@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo jugador</h1>
    </div>
</div>
<form action="{{ route('players.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="player[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Level</label>
                <input type="number" class="form-control" name="player[level]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Job ID</label>
                <input type="number" class="form-control" name="player[job_id]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection