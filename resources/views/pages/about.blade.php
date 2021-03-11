@extends('layouts.master')

@section('title', 'Acerca De Nosotros')
@section('description', 'En esta sección te contamos como nació Contador de palabras online y el Simulador SERP online')
@section('canonicalUrl', 'https://contadordepalabrasonline.com/about')

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
        <a href="{{ route('faq') }}" class="faq-link animate" style="top: 65% !important;">
            <img class="faq" src="{{asset('img/faq.png')}}" alt="link hacia la pagina de las preguntas frequentes">
        </a>
    </nav>

    <section id="how-does-it-work" class="mb-5" style="min-height: 100vh">
        <h1 class="pb-5 titles text-center" style="color: white">Acerca de nosotros</h1>
        <div class="container" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="col-8">
                    <p class="customP" style="color: white !important;">
                        En <strong>Contador de palabras online</strong> decidimos lanzar esta herramienta para contar palabras, contar caracteres, parrafos y oraciones despues de encontrarnos con problemas regulares que otras herramientas similares existentes presentan.
                        <br>
                        Y entonces, manos a la obra, nos pusimos el objetivo de crear una web que no solo sea un contador de palabras online o un contador de caracteres online sino que tambien como usuario te brinde una linda experienca y sea agradable a la vista.
                        <br>
                        Tambien vimos la necesidad de realizar un <strong>Simulador SERP online</strong> donde te sirva como un contador de caracteres SEO para el titulo y la descripcion y a su vez puedas visualizar, en un ejemplo, como se veria tu pagina en los resultados de busqueda de GOOGLE
                    </p>
                    <br>

                </div>
            </div>
        </div>
    </section>

@endsection
