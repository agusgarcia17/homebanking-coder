@extends('layouts.app', [
    'titlePage' => 'Balance',
    'jumboTitle' => 'Balance de cuentas',
    'jumboBajada' => 'Aca podes ver el detalle de tus ingresos y egresos',
])

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $entradas =[];

                    class Entrada{
                        public $monto;
                        public $descripcion;
                        public $fecha;
                        
                        public function __construct($monto, $descripcion, $fecha){
                            $this->monto = $monto;
                            $this->descripcion = $descripcion;
                            $this->fecha = $fecha;
                        }   
                    }

                    array_push($entradas, new Entrada(200, 'gasto', '22-04'));
                    
                    foreach ($entradas as $entrada) {
                        echo   
                        '<tr>
                        <th scope="row">'. $entrada->fecha .'</th>
                        <td>' . $entrada->descripcion. '</td>
                        <td>' . $entrada->monto . '</td>
                        <td>' . 'saldo'  . '</td>
                        </tr> ';
                    }
                    ?>
            </tbody>
        </table>
    </div>
@endsection