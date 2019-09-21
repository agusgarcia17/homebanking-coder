@extends('layouts.app', [
    'titlePage' => 'Home',
    'jumboTitle' => 'Bienvenido a homeBanking',
    'jumboBajada' => 'En nuestra pagina vas a poder hacer todas tus operaciones online',
])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 my-3">
                <div class="card d-flex justify-content-center text-center">
                    <img src="{{ asset('images/scale.png')}}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Balance</h4>
                        <p class="card-text">Aca podes ver los balances de tus cuentas, los ingresos y egresos</p>
                        <a href="{{ url('balance')}}" class="btn btn-primary">Ver balances</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card d-flex justify-content-center text-center">
                    <img src="{{ asset('images/cash.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Pago de servicios</h4>
                        <p class="card-text">Mediante nuestra plataforma podras realizar el pago de todos tus servicios
                        </p>
                        <a href="{{ url('pago-servicios')}}" class="btn btn-primary">Realizar pagos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card d-flex justify-content-center text-center">
                    <img src="{{ asset('images/investment.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Inversiones</h4>
                        <p class="card-text">Si sos mas atrevido, podes animarte a invertir tu dinero</p>
                        <a href="{{ url('inversiones')}}" class="btn btn-primary">Ver inversiones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection