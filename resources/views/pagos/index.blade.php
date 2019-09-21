<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inversiones | homeBanking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script></head>
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
        <h1 class="display-4">Pago de servicios</h1>
        <p class="lead">Asegurate de tener un control sobre los vencimientos y pagos de tus servicios</p>
    </div>

    <div class="container">
        <div class="col d-flex justify-content-center pb-3">
            <form action="{{url('pago-servicios/pago')}}" method="POST">
                <div class="form-group">
                    <label for="servicio">Nombre del servicio</label>
                    <input  type="text" class="form-control" id="servicio" name="servicio" placeholder="Por ej. Metrogas">
                </div>
                <div class="form-group">
                    <label for="referencia">Numero de referencia</label>
                    <input   type="number" class="form-control" id="referencia" name="referencia" placeholder="Numero de referencia">
                </div>
                <div class="form-group">
                    <label for="importe">Importe</label>
                    <input   type="number" class="form-control" id="importe" name="importe" placeholder="Monto a pagar ">
                </div>
                <button type="submit" class="btn btn-primary float-right">Pagar servicio</button>
            </form>
            <div> 
            
            </div>

        </div>
    </div>

</body>

</html>