@extends('layouts.master')

@section('title', 'Contador De Palabras | Contador De Caracteres')
@section('description', 'En el Contador de palabras online podras contar la cantidad de palabras, la cantidad de caracteres, oraciones y parrafos de tu texto.')
@section('canonicalUrl', 'https://www.contadordepalabrasonline.com/')

@section('content')

    <header id="banner" class="d-flex justify-content-center background-x">
        <div class="wrapper">
            <div class="m-5 text-center">
                <h1 class="titles mb-5">CONTADOR DE PALABRAS ONLINE</h1>
                <a onclick="goToCountWords()" id="startButton"
                   class="btn btn-outline-light btn-no-fill btn-rounded mt-5 animate__animated custom-font">Empezar</a>
            </div>
        </div>
    </header>

    <nav>
        <a href="{{ route('serp') }}" class="seo-link animate">
            <img class="seo" src="{{asset('img/seo.png')}}" alt="link hacia la pagina del simulador serp online">
        </a>

        <a href="{{ route('contact') }}" class="contact-link animate" style="top: 45% !important;">
            <img class="contact" src="{{asset('img/contact.png')}}" alt="link hacia la pagina de contacto">
        </a>

        <a href="{{ route('faq') }}" class="faq-link animate" style="top: 55% !important;">
            <img class="faq" src="{{asset('img/faq.png')}}" alt="link hacia la pagina de las preguntas frequentes">
        </a>

        <a href="{{ route('about') }}" class="about-link animate" style="top: 65% !important;">
            <img class="about" src="{{asset('img/about.png')}}" alt="link hacia la pagina sobre nosotros">
        </a>
    </nav>

    <section id="timer-section">
        <div class="animate timer" onclick="clickTimer()">
            <img class="clock-timer" src="{{asset('img/clock.png')}}" alt="al hacer click abre el cronómetro">
        </div>
        <div class="animate timer-count text-center d-flex flex-column align-items-center">
            <span class="p-3" id="chronotime">0:00:00:00</span>
            <form name="chronoForm">
                <button type="button" name="startstop" class="btn btn-primary mb-2" onClick="chronoStart()">Iniciar
                </button>
                <button type="button" name="reset" class="btn btn-danger" onClick="chronoReset()">Reiniciar</button>
            </form>
        </div>
    </section>

    <section id="wordsCountSection">

        <div class="count-div">
            <textarea name="" id="" cols="30" rows="12" class="form-control count-textarea mb-5"></textarea>

            <div class="text-center mt-5 mb-5">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- home-ads-1 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5043015646750420"
                     data-ad-slot="6679506496"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
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

            <div class="text-center mt-5 mb-5">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- home-ads-2 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-5043015646750420"
                     data-ad-slot="2426875644"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
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

            </div>

        </div>

    </section>

    @include('partials.blog')

@endsection
@section('javascript')
    <script>
        const fromSearchers = {!! json_encode($fromSearchers) !!};
    </script>
    <script src="{{asset('js/home.js')}}"></script>
@endsection
