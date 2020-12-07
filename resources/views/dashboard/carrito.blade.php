@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Carrito de compras') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php $valor = 0 ?>
                     @if (session('cart'))

                        <table class="table">

                            <thead class="thead-dark">
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio Unitario</th>
                                    <th>Cantidad</th>
                                    <th>Precio Total</th>
                                </tr>
                            </thead>




                         @foreach (session('cart') as $id => $details)

                              <?php $valor += $details['Precio'] * $details['Cantidad'] ?>
                              <tr>

                                <th>{{  $details['Nombre']  }}</th>
                                <th>$./{{  $details['Precio']  }}</th>
                                <th>{{  $details['Cantidad']  }}</th>
                                <th>$./{{ $details['Precio'] * $details['Cantidad'] }}</th>
                            </tr>
                         @endforeach
                        </table>
                     @endif

                        <table style="align: rigth">
                            <th>
                                <div class="bagde badge-primary text-wrap" style="width: 10rem">
                                    <p></p>
                                <p>Valor $./ {{$valor}}</p>
                                <p>IGV $./ {{$valor * 0.19}}</p>
                                <p>Total $./ {{$valor+$valor*0.19}}</p>
                                
                                </div>
                            </th>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
