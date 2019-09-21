@extends('layouts.app', [
    'titlePage' => 'Pago de servicios',
    'jumboTitle' => 'Pago de servicios',
    'jumboBajada' => 'Asegurate de tener un control sobre los vencimientos y pagos de tus servicios',
])

@section('content')
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
@endsection