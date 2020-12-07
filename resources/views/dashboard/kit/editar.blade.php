@extends('layouts.app')

@section('content')
    <div class="container">
    {{-- @include('alerta') --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
              <form action="{{ route('kit.actualizar', $kit->id ) }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nombre_kit">Nombre kit</label>
                  <input type="text" name="nombre_kit" class="form-control" id="nombre_kit" value="{{$kit->nombre_kit}}">
                </div>
                <div class="form-group">
                  <label for="elementos_kit">Elementos del kit</label>
                  <textarea name="elementos_kit" class="form-control" id="elementos_kit" cols="30" rows="3">{{$kit->elementos_kit}}
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="cantidad">Cantidad</label>
                  <input type="number" name="cantidad" class="form-control" id="cantidad" value="{{$kit->cantidad}}">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion"  id="descripcion" placeholder="Descripcion del kit" cols="30" rows="5">{{$kit->descripcion}}
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="descripcion">Inventario</label>
                  <select class="form-control" name="inventario_id" id="descripcion">
                    @foreach ($inventario as $inv)
                  <option value="{{$inv->id}}">kit niños</option>    
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                  <a href=" {{ route('kit.registrados' ) }} " class="btn btn-secondary">Ver Registrados</a>
                </div>
              </form>
              
            </div>
        </div>
    </div>
@endsection