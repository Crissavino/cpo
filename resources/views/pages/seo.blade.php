@extends('layouts.master')

@section('title', 'Simulador SERP online')
@section('description', 'El Simulador SERP es una herramienta para que los dueños de sitios web puedan ver como lucirá su sitio en los resultados de búsqueda de Google.')

@section('content')

    <section id="banner" class="d-flex justify-content-center background-x">
        <div class="wrapper">
            <div class="m-5 text-center">
                <h1>SIMULADOR SERP ONLINE</h1>
                <p class="mt-5">Bienvenido al simulador SERP online mas completo, empezamos?</p>
                <a onclick="goToSeo()" class="btn btn-outline-light btn-no-fill btn-rounded mt-5 animate custom-font">Empezar</a>
            </div>
        </div>
    </section>

    <a href="{{ route('home') }}" class="abc-link animate">
        <img class="abc" src="{{asset('img/abc.png')}}" alt="contar palabras abc">
    </a>

    <section id="seoSection">

        <div class="seo-div">
            <div id="seo-input" class="p-5 mb-5">
                <div class="d-flex justify-content-between">
                    <label for="title">Título</label>
                    <span id="titleChars" style="font-weight: 600;color: #54bfdd;">70</span>
                </div>
                <input type="text" id="title" onkeyup="titleChanged()" onblur="returnTitleCharsValue()" class="form-control mb-4">
                <div class="d-flex justify-content-between">
                    <label for="description">Descripción</label>
                    <span id="descriptionChars" style="font-weight: 600;color: #54bfdd;">156</span>
                </div>
                <textarea name="description" onkeyup="descChanged()" onblur="returnDescCharsValue()" id="description" cols="30" class="form-control mb-4" rows="2"></textarea>
                <label for="url">Url</label>
                <input type="text" id="url" onkeyup="urlChanged()" class="form-control mb-4">

                <div class="text-center">
                    <a onclick="seeInGoogle()" class="btn btn-outline-light animate btn-rounded mt-5 custom-font" style="color: white; background-color: #61c5e0; padding: 14px 40px; !important;">
                        Ver en google
                    </a>
                </div>
            </div>

            <div class="mb-5" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
                <div class="container">
                    <div class="headerSearch">
                        <!--Topleft Logo-->
                        <div class="logo">
                            <a href="../HomePage/index.html">
                                <img src="http://img.deusm.com/informationweek/2015/09/1322015/logo_420_color_2x.png">
                            </a>
                        </div>
                        <!--Searchbar-->
                        <div class="searchForm">
                            <input class="searchBar" type="text" value="contador de palabras online"></datalist>
                        </div>
                    </div>
                    <!--Navigation tabs-->
                    <div class="headerNav">
                        <ul>
                            <li><a href="#">Todos</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Noticias</a></li>
                            <li><a href="#">Shopping</a></li>
                            <li><a href="#">Maps</a></li>
                            <li><a href="#">Más</a></li>
                            <li><a href="#">Herramientas</a></li>
                        </ul>
                    </div>

                    <div class="searchResults">
                        <ul>

                            <div class="searchResultsAdds p-2 mt-3">
                                <div class="searchResultsItem mt-0">
                                    <li><a href="#">With zero coding experience, artist building 180 webpages in 180
                                            days</a></li>
                                    <p class="resultAddr">
                                        arstechnica.com/.../with-zero-coding-experience-artist-building-180-web...</p>
                                    <p>
                                        One of Jennifer Dewalt's creations, this webpage lets visitors create paintings in
                                    </p>
                                </div>

                                <div class="searchResultsItem mb-0">
                                    <li>
                                        <a href="#">
                                            I'm learning to code by building 180 websites in 180 ... - Jennifer Dewalt
                                        </a>
                                    </li>
                                    <p class="resultAddr">
                                        blog.jenniferdewalt.com/post/.../im-learning-to-code-by-building-180-websites-in
                                    </p>
                                    <p>
                                        <span>Jul 24, 2013 - </span>
                                        Build a different website every day for 180 consecutive
                                        days. Every website must be accompanied by a blog post. Any code I write must be ...
                                    </p>
                                </div>
                            </div>

                            <div class="searchResultsItem">
                                <li><a href="http://www.contadordepalabrasonline.com/">Contador de palabras online - Contador de Palabras</a></li>
                                <p class="resultAddr">
                                    https://www.contadordepalabrasonline.com/
                                </p>
                                <p>
                                    With zero coding experience, artist building 180 webpages . ... days ago, having
                                    never done any programming in her life, Jennifer Dewalt built her first webpage.
                                </p>
                            </div>

                            <div class="searchResultsItem">
                                <li><a href="" id="seo-title">Título de ejemplo</a></li>
                                <p class="resultAddr" id="seo-url">www.ejemplo.com</p>
                                <p id="seo-desc">Esta es una descripción de ejemplo de como se vería en Google</p>
                            </div>

                            <div class="searchResultsItem">
                                <li><a href="http://www.contadordepalabrasonline.com/seo">Contador de palabras online - Visualizador SEO</a></li>
                                <p class="resultAddr">
                                    https://www.contadordepalabrasonline.com/seo
                                </p>
                                <p>
                                    Now, easier than ever! Build your own highly profitable website with the help of Site
                                    Build It.
                                </p>
                            </div>

                        </ul>

                        <div class="relatedSearches">
                            <h4>Búsquedas relacionadas con contador de palabras online</h4>
                            <ul class="relatedSearchesList">
                                <li><a href="#">contador de palabras</a></li>
                                <li><a href="#">contador de palabas online gratis</a></li>
                                <li><a href="#">contador de caracteres</a></li>
                                <li><a href="#">contador de caracteres gratis</a></li>
                                <li><a href="#">contador de caracteres online</a></li>
                                <li><a href="#">contador de oraciones</a></li>
                                <li><a href="#">visualizador seo</a></li>
                                <li><a href="#">visualizador serp</a></li>
                                <li><a href="#">visualizador google</a></li>
                            </ul>
                            <hr>
                        </div>
                    </div>

                    <div class="pageNumbers">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                        </ul>
                    </div>

                    <div class="footer">
                        <div class="location">
                            <ul>
                                <li>YourCity, YourState - From your Internet address -</li>
                                <li><a href="#">Use precise location</a> -</li>
                                <li><a href="#">Learn more</a></li>
                            </ul>
                        </div>
                        <div class="footerNav">
                            <ul>
                                <li><a href="#">Ayuda</a></li>
                                <li><a href="#">Privacidad</a></li>
                                <li><a href="#">Condiciones</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="how-does-it-work" class="pb-5 background-y" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
        <div class="container" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h3 class="mb-5" style="color: white">Como usar el simulador SERP online?</h3>
                    <ul class="numbered-list mt-5">
                        <li class="">
                            <div>
                                <p style="color: white; text-align: left">
                                    El <b>Simulador SERP</b> es una herramienta para que los dueños de sitios web puedan ver como lucirá su sitio en los resultados de búsqueda de Google. Esto te servirá para conocer si debes hacer algún ajuste, si el título se ve bien, si es muy larga la descripción, si la misma es relevante, entre otras tantas cosas.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    Solo toca el botón Empezar, escribe el título de tu web, la descripción de la página, generalmente es el contenido de la etiqueta Meta Description si es relevante y la url del sitio.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    Nosotros nos encargamos de mostrarte cómo se verá exactamente tu sitio en los resultados de búsqueda de Google cuando las personas lo busquen.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('javascript')
    <script>
        const fromSearchers = {!! json_encode($fromSearchers) !!};
    </script>
    <script src="{{asset('js/seo.js')}}"></script>
@endsection
