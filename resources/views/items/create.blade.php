@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo item</h1>
    </div>
</div>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="item[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Type</label>
                <input type="enum" class="form-control" name="item[type]">
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