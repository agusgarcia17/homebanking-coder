@extends('layouts.app', [
    'titlePage' => 'Pago de servicios',
    'jumboTitle' => 'Pago de servicios',
    'jumboBajada' => 'Asegurate de tener un control sobre los vencimientos y pagos de tus servicios',])

@section('content')
    <div class="row">
        <div class="col d-flex justify-content-center">
            <form action="{{ url('pago-servicios/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nameService">Nombre del Servicio</label>
                    <input type="text" class="form-control" name="nameService" id="nameService">
                </div>
                <div class="form-group">
                    <label for="numbRef">Numero de Referencia</label>
                    <input type="text" class="form-control" name="numbRef" id="numbRef">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-primary" value="Crear Servicio">
                </div>
            </form>
        </div>
    </div>

@endsection

