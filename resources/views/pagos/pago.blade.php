@extends('layouts.app', [
    'titlePage' => 'Pago de servicios',
    'jumboTitle' => 'Pago de servicios',
    'jumboBajada' => 'Asegurate de tener un control sobre los vencimientos y pagos de tus servicios',])

@section('content')
        @isset($error) 
            <div class="alert alert-danger pt-3 pb-3 text-center"  role="alert">
                <h4> {{$error}} </h4>
            </div>
        @endisset

        @if(@isset($servicio) && @isset($referencia) && @isset($importe))
        <div class="alert alert-success text-center" role="alert">
                <h3 class="alert-heading">Pago realizado</h3>
                <h4> Servicio pagado:  {{ $servicio }} <br> 
                            Numero de referencia:  {{$referencia}} <br> 
                            Importe: {{$importe}} <br>
                </h4>
        </div>
        @endif
        <div class="container">
            <div class="col text-center " >
                <a href="{{ url('pago-servicios')}}" class="btn btn-primary mt-3">Volver a pagos</a>
            </div>
        </div>
@endsection


