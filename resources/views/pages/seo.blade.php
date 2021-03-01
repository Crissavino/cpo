@extends('layouts.master')

@section('title', 'Contador de caracteres SEO - Simulador SERP online')
@section('description', 'El Simulador SERP es una herramienta para que los dueños de sitios web puedan ver como lucirá su sitio en los resultados de búsqueda de Google.')

@section('content')

    <header id="banner" class="d-flex justify-content-center background-x">
        <div class="wrapper">
            <div class="m-5 text-center">
                <h1 class="titles">SIMULADOR SERP ONLINE</h1>
                <p class="mt-5" style="font-size: 24px">Bienvenido al simulador SERP online mas completo, empezamos?</p>
                <a onclick="goToSeo()" id="startButton" class="btn btn-outline-light btn-no-fill btn-rounded mt-5 animate__animated custom-font">Empezar</a>
            </div>
        </div>
    </header>

    <nav>
        <a href="{{ route('home') }}" class="abc-link animate">
            <img class="abc" src="{{asset('img/abc.png')}}" alt="link hacia la pagina para contar palabras, caracteres, párrafos y oricaciones online">
        </a>

        <a href="{{ route('faq') }}" class="faq-link animate" style="top: 45% !important;">
            <img class="faq" src="{{asset('img/faq.png')}}" alt="link hacia la pagina de las preguntas frequentes">
        </a>
    </nav>

    <section id="seoSection">

        <div class="seo-div">
            <div id="seo-input" class="p-5 mb-5">
                <div class="d-flex justify-content-between">
                    <label for="title">Título</label>
                    <span id="titleChars" style="font-weight: 600;color: #54bfdd;">60</span>
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
                    <a onclick="seeInGoogle()" id="seeInGoogleButton" class="btn btn-outline-light animate__animated btn-rounded mt-5 custom-font" style="color: white; background-color: #61c5e0; padding: 14px 40px; !important;">
                        Ver en google
                    </a>
                </div>
            </div>

            <div class="mb-5" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">

                <div class="col-12">
                    <div class="searchResultsItem googleSearcherResult">
                        <li style="list-style-type: none;">
                            <a style="text-decoration: none;" href="" id="seo-title">Título de ejemplo</a>
                        </li>
                        <p class="resultAddr" id="seo-url">www.ejemplo.com</p>
                        <p id="seo-desc">Esta es una descripción de ejemplo de como se vería en Google</p>
                    </div>
                </div>

                <div class="container googleSearcher">
                    <div class="headerSearch">
                        <!--Topleft Logo-->
                        <div class="logo">
                            <a style="cursor: pointer">
                                <img src="{{asset('img/google-brand.png')}}" alt="es el logo de google">
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
                            <li><a style="cursor: pointer">Todos</a></li>
                            <li><a style="cursor: pointer">Videos</a></li>
                            <li><a style="cursor: pointer">Noticias</a></li>
                            <li><a style="cursor: pointer">Shopping</a></li>
                            <li><a style="cursor: pointer">Maps</a></li>
                            <li><a style="cursor: pointer">Más</a></li>
                            <li><a style="cursor: pointer">Herramientas</a></li>
                        </ul>
                    </div>

                    <div class="searchResults">
                        <ul>

                            <div class="searchResultsAdds p-2 mt-3">
                                <div class="searchResultsItem mt-0">
                                    <li>
                                        <a href="http://www.contadordepalabrasonline.com/">Contador de palabras online - Contador de Palabras</a>
                                    </li>
                                    <p class="resultAddr">
                                        https://www.contadordepalabrasonline.com/
                                    </p>
                                    <p>
                                        <span>{{date("M")}} {{date("j")}}, {{date("Y")}} - </span>
                                        El <strong>Contador de palabras online</strong> es una poderosa herramienta la cual te permite contar la cantidad de <strong>palabras</strong>, <strong>caracteres</strong>, <strong>oraciones</strong> y <strong>párrafos</strong> que se encuentren en tu texto. Solamente debes empezar a escribir en el cuadro de texto y nosotros nos encargaremos del resto.
                                    </p>
                                </div>

                                <div class="searchResultsItem mb-0">
                                    <li>
                                        <a href="http://www.contadordepalabrasonline.com/faq">Contador de palabras online - FAQ</a>
                                    </li>
                                    <p class="resultAddr">https://www.contadordepalabrasonline.com/faq</p>
                                    <p>
                                        Aqui encontraras todas las preguntas y respuestas que habitualmente suelen tener nuestros usuarios
                                    </p>
                                </div>
                            </div>

                            <div class="searchResultsItem">
                                <li><a href="http://www.contadordepalabrasonline.com/">Contador de palabras online - Contador de Palabras</a></li>
                                <p class="resultAddr">
                                    https://www.contadordepalabrasonline.com/
                                </p>
                                <p>
                                    El <strong>Contador de palabras online</strong> es una poderosa herramienta la cual te permite contar la cantidad de <strong>palabras</strong>, <strong>caracteres</strong>, <strong>oraciones</strong> y <strong>párrafos</strong> que se encuentren en tu texto. Solamente debes empezar a escribir en el cuadro de texto y nosotros nos encargaremos del resto.
                                </p>
                            </div>

                            <div class="searchResultsItem">
                                <li><a href="" id="seo-title">Título de ejemplo</a></li>
                                <p class="resultAddr" id="seo-url">www.ejemplo.com</p>
                                <p id="seo-desc">Esta es una descripción de ejemplo de como se vería en Google</p>
                            </div>

                            <div class="searchResultsItem">
                                <li><a href="http://www.contadordepalabrasonline.com/serp">Contador de palabras online - Simulador SERP online</a></li>
                                <p class="resultAddr">
                                    https://www.contadordepalabrasonline.com/serp
                                </p>
                                <p>
                                    El <strong>Simulador SERP</strong> es una herramienta para que los dueños de sitios web puedan ver como lucirá su sitio en los resultados de búsqueda de Google.
                                </p>
                            </div>

                        </ul>

                        <div class="relatedSearches">
                            <h4>Búsquedas relacionadas con contador de palabras online</h4>
                            <ul class="relatedSearchesList">
                                <li><a href="">contador de palabras word</a></li>
                                <li><a href="">contador de palabras pdf</a></li>
                                <li><a href="">contar palabras excel</a></li>
                                <li><a href="">contador de palabras repetidas</a></li>
                                <li><a href="">contador de caracteres seo</a></li>
                                <li><a href="">contador de palabras habladas</a></li>
                                <li><a href="">contador de palabras en alemán</a></li>
                                <li><a href="">contar palabras overleaf</a></li>
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

    <section id="how-does-it-work" class="pb-5" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
        <h2 class="text-center titles">Como usar el simulador SERP online?</h2>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="numbered-list mt-5">
                        <li class="">
                            <div>
                                <p style="color: white; text-align: left">
                                    El <strong>Simulador SERP</strong> es una herramienta para que los dueños de sitios web puedan ver como lucirá su sitio en los resultados de búsqueda de Google. Esto te servirá para conocer si debes hacer algún ajuste, si el título se ve bien, si es muy larga la descripción, si la misma es relevante, entre otras tantas cosas.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    Solo toca el botón Empezar, escribe el título de tu web, la descripción de la página y la url del sitio. A su vez podrás usar nuestro contador de caracteres SEO que aparece a arriba a la derecha del titulo y la descripción para saber si lo que estas escribiendo no es demasiado largo para los resultados de las búsquedas de Google
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <p style="color: white; text-align: left">
                                    Cuando termines solo haz click en el botón Ver en google y nosotros nos encargaremos de mostrarte cómo se verá exactamente tu sitio en los resultados de búsqueda de Google cuando las personas te busquen.
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
