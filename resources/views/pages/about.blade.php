@extends('layouts.master')

@section('title', 'Acerca De Nosotros')
@section('description', 'En esta sección te contamos como nació Contador de palabras online y el Simulador SERP online')
@section('canonicalUrl', 'https://www.contadordepalabrasonline.com/about')

@section('content')

    <nav>
        <a href="{{ route('serp') }}" class="seo-link animate seo-image"></a>
        <a href="{{ route('home') }}" class="abc-link animate abc-image" style="top: 45% !important;"></a>
        <a href="{{ route('contact') }}" class="contact-link animate contact-image" style="top: 55% !important;"></a>
        <a href="{{ route('faq') }}" class="faq-link animate faq-image" style="top: 65% !important;"></a>
    </nav>

    <section id="how-does-it-work" class="mb-5" style="min-height: 100vh">
        <h1 class="pb-5 titles text-center" style="color: white">Acerca de nosotros</h1>
        <div class="container" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="col-8">
                    <p class="customP" style="color: white !important;">
                        En <strong>Contador de palabras online</strong> decidimos lanzar esta herramienta para contar
                        palabras, contar caracteres, parrafos y oraciones despues de encontrarnos con problemas
                        regulares que otras herramientas similares existentes presentan.
                        <br>
                        Y entonces, manos a la obra, nos pusimos el objetivo de crear una web que no solo sea un
                        contador de palabras online o un contador de caracteres online sino que tambien como usuario te
                        brinde una linda experienca y sea agradable a la vista.
                        <br>
                        Además podrás medir el tiempo de lectura que lleva tu artículo con el cronómetro que se
                        encuentra en el home, ver la densidad de palabras y las palabras mas usadas que posee tu texto y
                        así decidir si cambiarlas por un sinónimo a continuar de esta manera, algo que creemos muy
                        valioso.
                        <br>
                        Tambien vimos la necesidad de realizar un <strong>Simulador SERP online</strong> donde te sirva
                        como un contador de caracteres SEO para el titulo y la descripcion y a su vez puedas visualizar,
                        en un ejemplo, como se veria tu pagina en los resultados de busqueda de GOOGLE
                    </p>
                    <br>

                </div>
            </div>
        </div>
    </section>

@endsection
