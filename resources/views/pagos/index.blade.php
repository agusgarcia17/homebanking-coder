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
                    <label for="desc">Descripcion de pago</label>
                    <select class="form-control" id="desc" name="desc">
                        @foreach($servicios as $item)
                            <option>{{$item->servicio}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="desc">Descripcion de pago</label>
                    <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripcion de pago">
                </div> -->
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input  type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese fecha de pago">
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