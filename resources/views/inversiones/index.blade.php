@extends('layouts.app', [
    'titlePage' => 'Inversiones',
    'jumboTitle' => 'Inversiones',
    'jumboBajada' => 'Move tu dinero con la compra y venta de acciones',
])

@section('content')
    <div class="container">
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
                <tr>
                    <th scope="row">Microsoft</th>
                    <td>300</td>
                    <td>5000</td>
                    <td>
                        <button type="button" class="btn btn-primary mx-2">Comprar</button>
                        <button type="button" class="btn btn-success mx-2">Vender</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection