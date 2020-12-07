@extends('layouts.app')

@section('content')
   
  

        <div class="row justify-content-center">
            <div class="col-8">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <form method="POST" action="{{ route('usuarios.guardar') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('DNI') }}</label>

                        <div class="col-md-5">
                            <input required id="dni" type="text" class="form-control" name="dni" autofocus>

                        </div>
                    <div><a href="/"><i class="fa fa-search"></i></a></div>
                   

                    </div>

                    <div class="form-group row">
                        <label for="nombres" class="col-md-4 col-form-label text-md-right" value="Nombres">
                        {{ __('Nombres') }}</label>

                        <div class="col-md-6">
                            <input required id="nombres" type="text" class="form-control" name="nombres" autofocus>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                        <div class="col-md-6">
                            <select required name="sexo" id="sexo" class="form-control">
                                <option value="masculino">Masculino</option>
                                <option value="femenina">Femenina</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                        <div class="col-md-6">
                            <input required id="telefono" type="number" class="form-control" name="telefono" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                        <div class="col-md-6">
                            <input required id="edad" type="number" class="form-control" name="edad" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input required id="email" type="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                            <a href="{{ route('usuarios.registrados') }}" class="btn btn-secondary">Ver Registrados</a>
                        </div>
                        
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
