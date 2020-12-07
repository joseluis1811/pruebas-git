@extends('layouts.welcome')

@section('content')

<section id="recent-works">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Trabajos Recientes</h2>
            <p class="lead">La Red Humanitaria es una asociación de organizaciones de la sociedad civil dedicada a la
                respuesta de emergencia dentro del proceso migratorio</p>
        </div>
    </div>
    <div class="container">
        <!-- Grid row -->

        <div class="gallery" id="gallery">

            <!-- Grid column -->
            <div class="mb-3 pics animation all 2">
                <img class="img-fluid" src="{{asset('web/images/red1.JPEG')}}" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="{{asset('web/images/red2.JPEG')}}" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="{{asset('web/images/red3.JPEG')}}" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 2">
                <img class="img-fluid" src="{{asset('web/images/red4.JPEG')}}" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 2">
                <img class="img-fluid" src="{{asset('web/images/red5.JPEG')}}" alt="Card image cap">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="mb-3 pics animation all 1">
                <img class="img-fluid" src="{{asset('web/images/red6.JPEG')}}" alt="Card image cap">
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->
    </div>

</section>
<!--/#trabajos recientes-->
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
<!--/#services-->
<section id="testimonial">
    <div class="container">
        <div class="center fadeInDown">
            <h2>Testimonios</h2>
            <p class="lead"> Algunos testimonios de las personas a las cuales se les habrindado ayuda </p>
        </div>
        <div class="testimonial-slider owl-carousel">
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{ asset('web/images/testimonial1.JPEG') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{ asset('web/images/review.png') }}" alt="">
                    <p>Estoy muy agradecido por la ayuda brindada</p>
                    <h4>- Manuel Quijano</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{ asset('web/images/testimonial5.JPEG') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{ asset('web/images/review.png') }}" alt="">
                    <p>Mi familia y yo tuvimos que salir para buscar un futuro mejor. Gracias</p>
                    <h4>- Maria Isabel</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{ asset('web/images/testimonial6.JPEG') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{ asset('web/images/review.png') }}" alt="">
                    <p>Somos estudiantes pero no pudimos seguir asi que salimos a trabajar.</p>
                    <h4>- Carlos, Luis, jorge, andres</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{ asset('web/images/testimonial2.JPEG') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{ asset('web/images/review.png') }}" alt="">
                    <p>Mi familia ya esta en Peru asi que decidi emigrar .</p>
                    <h4>- Manuel Paez</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{ asset('web/images/testimonial7.JPEG') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{ asset('web/images/review.png') }}" alt="">
                    <p>Somos deportistas y decidimos caminar pero ha sido muy duro</p>
                    <h4>- Maria, Manuel, Martha, Juan</h4>
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-img">
                    <img src="{{ asset('web/images/testimonial.JPEG') }}" alt="">
                </div>
                <div class="content">
                    <img src="{{ asset('web/images/review.png') }}" alt="">
                    <p>Soy retornada colombiana y hace 17 años llegue a Venezuela hoy de nuevo estoy de regreso en el
                        pais por la crisis</p>
                    <h4>- Valentina Jauregui</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#Testimonios-->
@endsection