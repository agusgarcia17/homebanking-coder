@extends('layouts.app', [
    'titlePage' => 'Inversiones',
    'jumboTitle' => 'Inversiones',
    'jumboBajada' => 'Move tu dinero con la compra y venta de acciones',
])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="alert alert-primary" role="alert">
                    <strong>Saldo ${{ $salary }}</strong>
                </div>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Valor de accion</th>
                    <th scope="col">Compraventa de accion </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($investments as $inv)
                <tr>
                    <th scope="row">{{$inv->empresa}}</th>
                    <td>{{$inv->acciones}}</td>
                    <td>{{$inv->valor}}</td>
                    <td>
                        <a href="{{route('investment.buy', ['id' => $inv->id])}} " type="button" class="btn btn-primary mx-2">Comprar</a>
                        <a href="{{route('investment.sell', ['id' => $inv->id])}}  " type="button" class="btn btn-success mx-2">Vender</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection