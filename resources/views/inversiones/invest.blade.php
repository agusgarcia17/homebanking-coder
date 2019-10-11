@extends('layouts.app', [
    'titlePage' => 'Inversiones',
    'jumboTitle' => 'Inversiones',
    'jumboBajada' => 'Move tu dinero con la compra y venta de acciones',
])

@section('content')
        @isset($error) 
            <div class="alert alert-danger pt-3 pb-3 text-center"  role="alert">
                <h4> {{$error}} </h4>
            </div>
        @endisset

        @if(@isset($balance->fecha) && @isset($balance->desc) && @isset($balance->importe))
        <div class="alert alert-success text-center" role="alert">
                <h3 class="alert-heading">Transaccion realizada</h3>
                <h4> Fecha:  {{ $balance->fecha }} <br> 
                              {{$balance->desc}} <br> 
                            Importe: {{$balance->importe}} <br>
                </h4>
        </div>
        @endif
        <div class="container">
            <div class="col text-center " >
                <a href="{{ url('inversiones')}}" class="btn btn-primary mt-3">Volver a inversiones</a>
            </div>
        </div>
@endsection


