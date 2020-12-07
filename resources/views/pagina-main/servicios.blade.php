@extends('layouts.welcome')

@section('content')
<section id="services" class="service-item">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Nuestros Servicios</h2>
            <p class="lead">Algunos de nuestros servicios estan supeditados a previa cita </p>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ asset('web/images/services/ux.svg') }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Asesoria Juridica</h3>
                        <p>Este es un servicio gratiuto para migrantes y retornados colombianos</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ asset('web/images/services/web.svg') }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Asistencia Alimentaria</h3>
                        <p>Este es un servicio gratiuto para migrantes y retornados colombianos</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ asset('web/images/services/motion.svg') }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Orientacion para la supervivencia</h3>
                        <p>Este es un servicio gratiuto para migrantes y retornados colombianos</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ asset('web/images/services/mobile-ui.svg') }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Programa de proteccion a la infancia</h3>
                        <p>Este es un servicio gratiuto para migrantes y retornados colombianos</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ asset('web/images/services/web-app.svg') }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Transporte Humanitario</h3>
                        <p>Este es un servicio gratiuto para migrantes y retornados colombianos</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ asset('web/images/services/mobile-ui.svg') }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Alojamiento Temporal</h3>
                        <p>Este es un servicio gratiuto para migrantes y retornados colombianos</p>
                    </div>
                </div>
            </div>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
@endsection