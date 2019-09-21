<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titlePage }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}" type="text/css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('index')}}"><img src="{{asset('images/bank.png')}}" style="height: 40px" alt=""></a>
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
        <h1 class="display-4">{{$jumboTitle}}</h1>
        <p class="lead">{{$jumboBajada}}</p>
    </div>
    @yield('content')
</body>
</html>