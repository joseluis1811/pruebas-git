@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nuestros Productos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="row">
                    @foreach ($productos as $item)
                        <div class="col-6">
                            {{-- <img src="{{$item->id}}" alt="imagen" width="300px" height="300px"> --}}
                            <img src="{{asset('web/images/coming.jpg')}}" alt="imagen" width="300px" height="300px">
                           
                            <h4 class="mt-2">{{$item->nombre}}</h4>
                            <p>{{$item->descripcionCorta}}</p>
                            <h4>${{$item->precioActual}}</h4>
                            
                        <a href="{{route('cart', $item->id)}}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Agregar al carrito</a>
                            <a href="{{route('detalle', $item->id)}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Ver detalles</a>
                            <hr>
                        </div>
                    @endforeach


                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
