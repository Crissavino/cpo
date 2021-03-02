@extends('layouts.master')

@section('title', 'Preguntas frecuentes')
@section('description', 'Aqui encontraras todas las preguntas y respuestas que habitualmente suelen tener nuestros usuarios')

@section('content')

    <nav>
        <a href="{{ route('serp') }}" class="seo-link animate">
            <img class="seo" src="{{asset('img/seo.png')}}" alt="link hacia la pagina del simulador serp online">
        </a>
        <a href="{{ route('home') }}" class="abc-link animate" style="top: 45% !important;">
            <img class="abc" src="{{asset('img/abc.png')}}" alt="link hacia la pagina para contar palabras, caracteres, párrafos y oricaciones online">
        </a>
        <a href="{{ route('contact') }}" class="contact-link animate" style="top: 55% !important;">
            <img class="contact" src="{{asset('img/contact.png')}}" alt="link hacia la pagina de contacto">
        </a>
        <a href="{{ route('about') }}" class="about-link animate" style="top: 65% !important;">
            <img class="about" src="{{asset('img/about.png')}}" alt="link hacia la pagina sobre nosotros">
        </a>
    </nav>

    <section id="how-does-it-work" class="mb-5" style="min-height: 100vh">
        <h1 class="pb-5 titles text-center" style="color: white">FAQ</h1>
        <div class="container-fluid" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="accordion numbered-list mt-5" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Como puedo saber cuantas palabras tiene mi ensayo?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Utilizando el contador online de palabras fácilmente podrás saber la cantidad de palabras que tiene tu ensayo, articulo o texto. Simplemente tienes que ir la pagina de inicio y hacer click sobre el botón Empezar, te llevará al cuadro de texto donde si comienzas a escribir comenzaremos a contar tus palabras. Si no, una vez en la pagina de inicio te puedes desplazar hacia el cuadro de texto y comenzar a escribir.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Cuantas palabras hay en esta frase?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Te has preguntado mil veces esta pregunta? Fácil, solo tienes que ir a la página de inicio, ir al cuadro de texto y empezar a escribir, veras la cantidad de palabras, caracteres, párrafos y oraciones debajo del mismo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Como contar las palabras de un texto?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Eso déjalo en nuestras manos. Tú solo ve a la página de inicio y comienza a escribir en el cuadro de texto. De nada…
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Como se cuentan las palabras?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En el <strong>Contador de palabras online</strong> usamos un poderoso algoritmo el cual nos permite saber en tiempo real la cantidad de palabras, cantidad de oraciones, numero de parrafos, densidad de palabras y palabras mas repetidas que posee tu texto
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Puedo medir mi tiempo de alguna manera?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En el <strong>Contador de palabras online</strong> poseemos con un cronómetro a la derecha de la pantalla el cual te podrá servir para saber tu velocidad de lectura y escritura, con esta herramienta fácilmente determinaras ambas. Solo basta con iniciar el cronómetro y comenzar a escribir. Una vez que termines podrás detener el tiempo del cronómetro y ver el resultado.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
