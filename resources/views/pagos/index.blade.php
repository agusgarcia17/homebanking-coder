@extends('layouts.app', [
    'titlePage' => 'Pago de servicios',
    'jumboTitle' => 'Pago de servicios',
    'jumboBajada' => 'Asegurate de tener un control sobre los vencimientos y pagos de tus servicios',
])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 text-right mb-3 " >
                <a href="{{ url('pago-servicios/create')}}" class="btn btn-info mt-3">Agregar servicio</a>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center pb-3 mt-3">
                <form action="{{url('pago-servicios/pago')}}" method="POST">
                    <div class="form-group">
                        <label for="desc">Descripcion de pago</label>
                        <select class="form-control" id="desc" name="desc">
                            @foreach($servicios as $item)
                                <option>{{$item->nameService}}</option>
                            @endforeach
                        </select>
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
@endsection