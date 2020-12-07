@extends('layouts.app')

@section('content')

<div class="container">
{{-- @include('alerta') --}}
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header text-center">Actualizar</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('actualizar', $usuario->id ) }}">
                      @csrf
                      <div class="form-group row">
                        <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('Dni') }}</label>

                        <div class="col-md-6">
                            <input id="dni" type="text" class="form-control" name="dni" value="{{ $usuario->dni}}" required>
                        </div>
                    </div>
                      <div class="form-group row">
                          <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                          <div class="col-md-6">
                              <input id="nombres" type="text" class="form-control" name="nombres" value="{{ $usuario->nombres}}" required>
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                          <div class="col-md-6">
                              <select name="sexo" id="sexo" class="form-control">
                                  {{-- <option value="{{$usuario->sexo}}">{{$usuario->sexo}}</option> --}}
                                  <option value="masculino">Masculino</option>
                                  <option value="femenina">Femenina</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                          <div class="col-md-6">
                              <input id="telefono" type="number" class="form-control" name="telefono" value="{{$usuario->telefono}}" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                          <div class="col-md-6">
                              <input id="edad" type="number" class="form-control" name="edad" value="{{$usuario->edad}}" required >
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Agregue Kit') }}</label>
                        <div class="col-md-6 mb-3">
                            <select class="form-control tipo_kit" name="tipo_kit[]" multiple style="width: 100%">
                                <option value="{{$usuario->tipo_kit}}" selected>{{$usuario->tipo_kit}}</option>
                                
                                @foreach ($tipo_kit as $kit)
                                  <option value="{{$kit->nombre_kit}}">{{$kit->nombre_kit}}</option>
                                @endforeach
                                
                              </select>
                          </div>
                      </div>
                     
                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{$usuario->email}}" required>
                          </div>
                         
                          <div class="col-md-6 text-center">
                            @if ($usuario->admin == 1)
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="admin" value="1" id="admin" checked>
                                <label class="form-check-label" for="admin">Administrador</label>
                              </div>
                            @else
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="admin" value="0" id="admin">
                                <label class="form-check-label" for="admin">Administrador</label>
                              </div>
                            @endif
                            
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-12 offset-md-4">
                              <button type="submit" class="btn btn-primary">Actualizar</button>
                              <a href="{{ route('usuarios.registrados') }}" class="btn btn-secondary">Ver Registrados</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
