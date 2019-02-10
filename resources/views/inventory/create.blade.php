@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo inventario</h1>
    </div>
</div>
<form action="{{ route('inventory.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Itemd Id</label>
                <input type="number" class="form-control" name="inven[item_id]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Player Id</label>
                <input type="number" class="form-control" name="inven[player_id]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" name="inven[amount]">
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