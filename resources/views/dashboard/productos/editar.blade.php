@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <form action="{{ route('producto.actualizar', $producto->id ) }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nombre_producto">Nombre producto</label>
                <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" value="{{ $producto->nombre}}">
                </div>
                <div class="form-group">
                  <label for="stock"> Stock </label>
                  <input type="number" name="stock" class="form-control" id="stock" value="{{ $producto->stock}}">
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="number" name="precio" class="form-control" id="precio" value="{{ $producto->precioActual}}">
                </div>
                <div class="form-group">
                  <label for="descripcion_corta">Descripcion corta</label>
                  <textarea class="form-control" name="descripcion_corta"  id="descripcion_corta" cols="30" rows="5">{{ $producto->descripcionCorta}}</textarea>
                </div>
                <div class="form-group">
                    <label for="descripcion_larga">Descripcion larga</label>
                    <textarea class="form-control" name="descripcion_larga"  id="descripcion_larga" cols="30" rows="5">{{ $producto->descripcionLarga}}</textarea>
                  </div>
                {{-- <div class="form-group">
                  <label for="descripcion">Inventario</label>
                  <select class="form-control" name="inventario_id" id="descripcion">
                    @foreach ($inventario as $inv)
                  <option value="{{$inv->id}}">{{$inv->nombre}}</option>    
                    @endforeach
                  </select>
                </div> --}}
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                  <a href=" {{ route('producto.registrados' ) }} " class="btn btn-secondary">Volver</a>
                </div>
              </form>
              
            </div>
        </div>
    </div>
@endsection