@extends('layouts.master')

@section('title', 'Contador de palabras online')
@section('description', 'El Contador de palabras online es una poderosa herramienta la cual te permite contar la cantidad de palabras, caracteres, oraciones y párrafos que se encuentren en tu texto. Solamente debes empezar a escribir en el cuadro de texto y nosotros nos encargaremos del resto.')

@section('content')

    <div class="text-center mb-5" style="height: 150px; background-color: red">
        PUBLICIDAD
    </div>

    <section id="banner" class="d-flex justify-content-center">
        <div class="wrapper">
            <div class="m-5 text-center">
                <h1>Contador de palabras online</h1>
                <p class="mt-5">Bienvenido al mejor contador de palabras online, empezamos?</p>
                <a onclick="goToCountWords()" class="btn btn-outline-light btn-no-fill btn-rounded mt-5 animate">Empezar</a>
            </div>
        </div>
    </section>

    <a href="{{ route('serp') }}" class="seo-link animate">
        <img class="seo" src="{{asset('img/seo.png')}}" alt="seo google">
    </a>

    <section id="timer-section">
        <div class="animate timer" onclick="clickTimer()">
            <img class="clock-timer" src="{{asset('img/clock.png')}}" alt="cronometro">
        </div>
        <div class="animate timer-count text-center d-flex flex-column align-items-center">
            <span class="p-3" id="chronotime">0:00:00:00</span>
            <form name="chronoForm">
                <button type="button" name="startstop" class="btn btn-primary mb-2" onClick="chronoStart()">Iniciar</button>
                <button type="button" name="reset" class="btn btn-danger" onClick="chronoReset()">Reiniciar</button>
            </form>
        </div>
    </section>

    <section id="wordsCountSection">

        <div class="count-div">
            <textarea name="" id="" cols="30" rows="12" class="form-control count-textarea mb-5"></textarea>

            <div class="text-center mb-5" style="height: 150px; background-color: red">
                PUBLICIDAD
            </div>

            <div class="stats pb-5" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
                <div class="d-flex align-items-center">
                    <div>
                        <span class="num" id="numWords">0</span>
                        <span class="label" style="width: 80px">Palabras</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <span class="num" id="numCharsWithSpaces">0</span>
                        <span class="label" style="width: 140px">Caracteres (con espacios)</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <span class="num" id="numCharsWithoutSpaces">0</span>
                        <span class="label" style="width: 130px">Caracteres (sin espacios)</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <span class="num" id="numParagraph">0</span>
                        <span class="label" style="width: 80px">Párrafos</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <span class="num" id="numSentences">0</span>
                        <span class="label" style="width: 80px">Oraciones</span>
                    </div>
                </div>
            </div>

            <div class="text-center mb-5" style="height: 150px; background-color: red">
                PUBLICIDAD
            </div>


            <div class="d-none" id="wordsDensity">
                <div class="stats mb-0 d-none" id="wordsDensity1">
                    <div class="stat-block d-none" id="word-block-1">
                        <span class="num">64</span>
                        <span class="label">Sed euismod</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-2">
                        <span class="num">256</span>
                        <span class="label">Gravida lorem</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-3">
                        <span class="num">1,024</span>
                        <span class="label">Blandit nulla</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-4">
                        <span class="num">512</span>
                        <span class="label">Sapien ultrices</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-5">
                        <span class="num">128</span>
                        <span class="label">Amet commodo</span>
                    </div>
                </div>
                <div class="stats d-none" id="wordsDensity2">
                    <div class="stat-block d-none" id="word-block-6">
                        <span class="num">64</span>
                        <span class="label">Sed euismod</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-7">
                        <span class="num">256</span>
                        <span class="label">Gravida lorem</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-8">
                        <span class="num">1,024</span>
                        <span class="label">Blandit nulla</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-9">
                        <span class="num">512</span>
                        <span class="label">Sapien ultrices</span>
                    </div>
                    <div class="stat-block d-none" id="word-block-10">
                        <span class="num">128</span>
                        <span class="label">Amet commodo</span>
                    </div>
                </div>

                <div class="text-center mt-5" style="height: 150px; background-color: red">
                    PUBLICIDAD
                </div>

            </div>

        </div>

    </section>

    <section id="how-does-it-work" class="mb-0">
        <div class="container" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <span class="text-primary pb-5" style="color: white">Como funciona</span>
                    <h3 class="mb-5" style="color: white">Como usar el contador de palabras online?</h3>
                    <ul class="numbered-list mt-5">
                        <li class="">
                            <div>
                                <p style="color: white; text-align: left">
                                    El <b>Contador de palabras online</b> es una poderosa herramienta la cual te permite contar la cantidad de palabras, caracteres, oraciones y párrafos que se encuentren en tu texto. Solamente debes empezar a escribir en el cuadro de texto y nosotros nos encargaremos del resto. Es posible copiar y pegar el texto y el sistema automáticamente mostrará el recuento de palabras y caracteres como si hubieras escrito caracter por caracter.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    Saber cuantas palabras o caracteres posee tu documento puede ser de mucha utilidad. Suele suceder que a un autor se le pida un mínimo o un máximo de palabras para escribir un blog, una nota o artículo, y con el contador de palabras sabrás rápidamente si cumples con los requisitos.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    En el <b>Contador de palabras online</b> contamos con un cronómetro a la derecha de la pantalla el cual te podría servir para saber tu velocidad de lectura y escritura, con esta herramienta fácilmente podrás determinar ambas. Solo basta con iniciar el cronómetro y comenzar a escribir. Una vez que termines podrás detener el cronómetro y ver el resultado.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    Además, te mostramos inmediatamente las diez palabras más utilizadas y la cantidad de veces que las repites en el artículo que estás escribiendo. Esto te da la opción de saber qué palabras utilizas con más frecuencia dentro del artículo y así podrás evitar utilizar en exceso ciertas palabras y te permitirá asegurarte que la distribución de las palabras claves coincide con lo que estás necesitando.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="offset-lg-2 col-lg-4 offset-md-0 col-md-5 offset-sm-2 col-sm-8 col-8 offset-2">

                </div>
            </div>
        </div>
    </section>

@endsection
@section('javascript')

    <script src="{{asset('js/stopwatch.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection
