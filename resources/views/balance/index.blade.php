@extends('layouts.app', [
    'titlePage' => 'Balance',
    'jumboTitle' => 'Balance de cuentas',
    'jumboBajada' => 'Aca podes ver el detalle de tus ingresos y egresos',
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
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            <tbody>
                   @foreach ($balances as $item)
                        <tr>
                            <th scope="row">{{ date('d-m-Y', strtotime($item->fecha))  }}</th>
                            <td>{{ $item->desc }}</td>
                            <td>{{ $item->importe }}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection