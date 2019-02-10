@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de inventario</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('inventory.create') }}" role="button">Agregar un inventario</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Item id</th>
                <th>Player id</th>
                <th>Amount</th>
            </theader>
            <tbody>
                @foreach($inventory as $inven)
                    <tr>
                        <td>
                            {{ $inven->item_id }}
                        </td>
                        <td>
                            {{ $inven->player_id }}
                        </td>
                        <td>
                            {{ $inven->amount }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection