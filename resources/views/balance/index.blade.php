@extends('layouts.app', [
    'titlePage' => 'Balance',
    'jumboTitle' => 'Balance de cuentas',
    'jumboBajada' => 'Aca podes ver el detalle de tus ingresos y egresos',
])

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                   @foreach ($balances as $item)
                        <tr>
                            <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))  }}</th>
                            <td>{{ $item->desc }}</td>
                            <td>{{ $item->importe }}</td>
                            <td> saldo </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection