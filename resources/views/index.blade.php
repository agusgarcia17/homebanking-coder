<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>homeBanking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}" type="text/css" />
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index"><img src="{{asset('images/bank.png')}}" style="height: 40px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('balance')}}">Balance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pago-servicios')}}">Pago de servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('inversiones')}}">Inversiones</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenido a homeBanking</h1>
        <p class="lead">En nuestra pagina vas a poder hacer todas tus operaciones online</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 my-3">
                <div class="card d-flex justify-content-center text-center">
                    <img src="{{ asset('images/scale.png')}}" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Balance</h4>
                        <p class="card-text">Aca podes ver los balances de tus cuentas, los ingresos y egresos</p>
                        <a href="balance" class="btn btn-primary">Ver balances</a>
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
                        <a href="pago-servicios" class="btn btn-primary">Realizar pagos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 my-3">
                <div class="card d-flex justify-content-center text-center">
                    <img src="{{ asset('images/investment.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Inversiones</h4>
                        <p class="card-text">Si sos mas atrevido, podes animarte a invertir tu dinero</p>
                        <a href="inversiones" class="btn btn-primary">Ver inversiones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>