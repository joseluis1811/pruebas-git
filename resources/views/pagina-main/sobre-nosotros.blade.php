@extends('layouts.welcome')

@section('content')

<div class="container">
    <h1 class=" text-center">Conózcanos</h1>
    <h1 class=" text-center">Mision</h1>
    <div class="row">
        <div class="col-12 col-md-4 ">
            <img src="{{asset('web/images/mision.jpg')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-12 col-md-7 ">
            <p>La Red Humanitaria es una asociación sin ánimo de lucro que trabaja para dignificar la vida de las personas migrantes y refugiadas, venezolanas y retornadas, bajo el principio de humanidad y el reconocimiento de un enfoque diferencial. Sin negar en modo alguno el beneficio y nuestro trabajo hacia residentes en condición de vulnerabilidad. Busca articular puntos de apoyo que proporcionan servicios, albergue, alimentación, comunicación o información a la población que transita caminando y está comprometida con la población que tiene vocación de permanencia, para garantizar el acceso al ejercicio de sus derechos a nivel individual, comunitario y político. Gestionando proyectos que permitan un trabajo coordinado y pertinente.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <h1 class=" text-center">Vision</h1>
        <div class="col-12 col-md-7 ">
            <p>Ser una Red de ayuda humanitaria consolidada en el tiempo de alcance trasnacional, que reúne a los actores locales y organizaciones que dan atención directa a migrantes y retornados, desarrollando acciones conjuntas y pertinentes a las necesidades de la población que está en condición de alta vulnerabilidad en distintos territorios y condiciones; para garantizar el restablecimiento de sus derechos. Logrando articular nuestras acciones con el gobierno y las organizaciones internacionales. Pretende reunir a las organizaciones de la sociedad civil en primer lugar pero tener ramas hacia la academia, comunidades organizadas, organizaciones sin ánimo de lucro, en síntesis pretendemos tejer Redes de solidaridad.</p>
        </div>
        <div class="col-12 col-md-4 ">
            <img src="{{asset('web/images/vision.png')}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <img src="{{asset('web/images/objetivos.jpg')}}" class="img-fluid" alt="Responsive image Objetivos">
        </div>
        <div class="col-12 col-md-7">
            <h1 class=" text-center">Objetivos</h1>
            <p>Entregar una respuesta humanitaria eficaz y eficiente a migrantes y retornados, para restituir los derechos vulnerados en este proceso. (alimentación, hospedaje, orientación, comunicación, detección de: VBG, menores no acompañados, casos de salud de interés público, entre otros)
                Reconocer otros actores locales, que en sus territorios brindan respuesta a migrantes y retornados en condición de alta vulnerabilidad y vincularlos como miembros de la red humanitaria.
                Tener un rol de incidencia y participación en la problemática de migratoria que enfrenta el país.</p>
        </div>
    </div>
    <hr>
    {{-- comentarios --}}
    <div class="row text-center">
        <div class="col-12 col-md-12 justify-conten-center">
            <h1 class=" text-center">Objetivos específicos</h1>
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-secondary">Poder garantizar a los puntos de apoyo que brindan atención a migrantes y retornados, las condiciones para el mantenimiento de los servicios que prestan y el sostenimiento de su personal.</li>
                <li class="list-group-item">Trabajar sobre la base de los principios humanitarios y el reconocimiento de un enfoque diferencial.</li>
                <li class="list-group-item list-group-item-secondary">Brindar formación continua al personal y los miembros vinculados a la red humanitaria.</li>
                <li class="list-group-item">Encontrar respuesta de civiles, comunidades u organizaciones que brinden respuesta en sus territorios a migrantes y retornados, que compartan los principios humanitarios y tengan interés en consolidar un alcance de la red humanitaria a nivel nacional y transnacional.</li>
                <li class="list-group-item list-group-item-secondary">Recibir, analizar y sistematizar la información de los puntos de apoyo, para que aporten a la comprensión del contexto y las necesidades de cada territorio.</li>
                <li class="list-group-item">Tener una participación activa en las mesas y encuentros relacionados con la crisis migratoria, en búsqueda de aportar soluciones y realizar la gestión y desarrollo de proyectos.</li>
                <li class="list-group-item list-group-item-secondary"> Colaborar con el gobierno y las organizaciones internacionales en la comprensión del contexto y realidad de las personas migrantes y retornadas, para el desarrollo de acciones acordes a las necesidades de cada territorio y evitando la duplicidad de acciones.</li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row mb-5">
        <div class="col-12 col-md-4 ">
            <img src="{{asset('web/images/filosofia.jpg')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-12 col-md-7 ">
            <h2>Nuestra Filosofia</h2>
            <p>Nos concebimos como constructores activos de nuestra propia realidad y experiencias, alejándonos conscientemente de lo que nos haga simples receptores pasivos de experiencias y aprendizajes.
                Creadores de un modelo escalable de acciones de protección a la vida enmarcado en los derechos fundamentales universales.</p>
        </div>
    </div>
    <hr>
</div>
    
@endsection