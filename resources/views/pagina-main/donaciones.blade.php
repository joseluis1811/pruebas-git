@extends('layouts.welcome')

@section('content')

<div class="container margen">

    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="{{ route('donacion.guardar') }}" class="form-horizontal" method="post">
                    @csrf
                    <fieldset>
                        <legend class="text-center header text-primary">Donaciones</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            
                            <div class="col-md-8">
                                <input id="fname" required name="nombres" type="text" placeholder="Nombre"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" required name="apellidos" type="text" placeholder="Apellidos"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="cc" required name="cc" type="number" placeholder="DNI" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" required name="email" type="email" placeholder="Correo Electronico"
                                    class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" required name="telefono" type="number" placeholder="Telefono"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                                <i class="fa fa-money"></i></span>
                            <div class="col-md-8">
                                <input id="valor" required name="valor" type="number"
                                    placeholder="Valor estimado de donacion" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" required id="message" name="mensaje"
                                    placeholder="Escribe tu mensaje para nosotros aqui" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                             <button type="submit" class="btn btn-primary btn-lg">Donar</button> 
                                {{-- <a class="btn btn-primary btn-lg" target="_blank" href="https://www.nequi.com.co/">Donar
                                    con nequi</a>
                                <a class="btn btn-primary btn-lg" target="_blank"
                                    href="https://www.paypal.com/co/home">Donar con paypal</a> --}}
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection