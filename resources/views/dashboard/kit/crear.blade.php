@extends('layouts.app')

@section('content')
    <div class="container">
    {{-- @include('alerta') --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
              <form action="{{ route('kit.guardar' ) }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nombre_kit">Nombre kit</label>
                  <input type="text" name="nombre_kit" class="form-control" id="nombre_kit" placeholder="Nombre kit">
                </div>
                <div class="form-group">
                  <label for="elementos_kit">Elementos del kit</label>
                  <textarea name="elementos_kit" class="form-control" id="elementos_kit" cols="30" rows="3" placeholder="Elementos del kit"></textarea>
                </div>
                <div class="form-group">
                  <label for="cantidad">Cantidad</label>
                  <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="Cantidad">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion"  id="descripcion" placeholder="Descripcion del kit" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label for="descripcion">Inventario</label>
                  <select class="form-control" name="inventario_id" id="descripcion">
                    @foreach ($inventario as $inv)
                  <option value="{{$inv->id}}">{{$inv->nombre}}</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href=" {{ route('kit.registrados' ) }} " class="btn btn-secondary">Ver Registrados</a>
                </div>
              </form>
              
            </div>
        </div>
    </div>
@endsection
