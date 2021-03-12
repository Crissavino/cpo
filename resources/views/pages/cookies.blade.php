@extends('layouts.master')

@section('title', 'Política De Cookies')
@section('description', 'El Contador de palabras online es una poderosa herramienta la cual te permite contar la cantidad de palabras, caracteres, oraciones y párrafos que se encuentren en tu texto. Solamente debes empezar a escribir en el cuadro de texto y nosotros nos encargaremos del resto.')
@section('canonicalUrl', 'https://www.contadordepalabrasonline.com/cookies')

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
        <a href="{{ route('about') }}" class="about-link animate" style="top: 75% !important;">
            <img class="about" src="{{asset('img/about.png')}}" alt="link hacia la pagina sobre nosotros">
        </a>
    </nav>

    <section id="how-does-it-work" class="mb-5">
        <h1 class="pb-5 titles text-center" style="color: white">Información sobre cookies</h1>
        <div class="container" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <ul class="numbered-list mt-5">
                        <li class="">
                            <div>
                                <h3 class="mb-5" style="color: white;text-align: left">Cómo utiliza contadordepalabrasonline.com las cookies</h3>
                                <p style="color: white; text-align: left">
                                    Una cookie es un pequeño fragmento de texto que los sitios web que visitas envían al navegador y que permite que el sitio web recuerde información sobre tu visita, como tu idioma preferido y otras opciones, lo que puede facilitar tu próxima visita y hacer que el sitio te resulte más útil. Las cookies desempeñan un papel muy importante, ya que sin ellas el uso de la Web sería una experiencia mucho más frustrante. <b>contadordepalabrasonline.com</b> utiliza cookies con diversos fines, aumentar la relevancia de los anuncios que ves, contar el número de visitas que recibimos para acceder a una página.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <h3 class="mb-5" style="color: white;text-align: left">Qué tipo de cookies utiliza contadordepalabrasonline.com?</h3>
                                <p style="color: white; text-align: left">
                                    <b>Cookies de analítica</b>: cada vez que un Usuario visita una Web, una herramienta de un proveedor externo, en este caso, Google Analytics, genera una cookie analítica en el dispositivo del usuario. Esta cookie que sólo se genera en la visita, servirá en próximas visitas para identificar de forma anónima al visitante. Los objetivos principales que se persiguen son:
                                    <br>- Permitir la identificación anónima de los usuarios navegantes a través de la “Cookie” (identifica navegadores y dispositivos, no personas) y por lo tanto la contabilización aproximada del número de visitantes y su tendencia en el tiempo.
                                    <br>- Identificar de forma anónima los contenidos más visitados y por lo tanto más atractivos para los usuarios.
                                    <br>- Saber si el usuario que está accediendo es nuevo o repite visita.

                                    <br><br><b>Cookies de publicidad</b>: este tipo de cookies permiten ampliar la información de los anuncios mostrados a cada usuario anónimo. Entre otros, se almacena la duración o frecuencia de visualización de posiciones publicitarias, la interacción con las mismas, o los patrones de navegación y/o comportamientos del usuario ya que ayudan a conformar un perfil de interés publicitario. De este modo, permiten ofrecer publicidad afín a los intereses del usuario. Para la gestión de la publicidad se utilizan herramientas de servicio de publicidad de terceros. Estos terceros pueden almacenar cookies procedentes de los navegadores de los usuarios, así como acceder a los datos que en ellas se guardan. Las empresas que generan estas Cookies tienen sus propias políticas de privacidad.

                                    <br>En la actualidad, contadordepalabrasonline.com utiliza la plataforma Google AdSense para gestionar estos servicios. Para más información, acuda a https://www.google.es/policies/privacy/.

                                    <br><br><b>Redes sociales</b>: Cada red social utiliza sus propias cookies para que usted pueda pinchar en botones del tipo Me gusta o Compartir.
                                </p>
                            </div>
                        </li>
                        <li class="mt-5">
                            <div>
                                <h3 class="mb-5" style="color: white;text-align: left">Cómo deshabilitar las cookies en el navegador?</h3>
                                <p style="color: white; text-align: left">
                                    La mayoría de navegadores actualmente permiten al usuario configurar si desean aceptar cookies y cuáles de ellas. Estos ajustes normalmente se encuentra en las ‘opciones’ o ‘Preferencias’ del menú de su navegador. Estas son las instrucciones para configurar las cookies en los principales navegadores:
                                    <br><br><b>Chrome</b>: Configuración -> Mostrar opciones avanzadas -> Privacidad -> Configuración de contenido. Para más información, puede consultar el soporte de Google o la Ayuda del navegador.

                                    <br><br><b>Firefox</b>: Herramientas -> Opciones -> Privacidad -> Historial -> Configuración Personalizada. Para más información, puede consultar el soporte de Mozilla o la Ayuda del navegador.

                                    <br><br><b>Internet Explorer</b>: Herramientas -> Opciones de Internet -> Privacidad -> Configuración. Para más información, puede consultar el soporte de Microsoft o la Ayuda del navegador.

                                    <br><br><b>Safari</b>: Preferencias -> Seguridad. Para más información, puede consultar el soporte de Apple o la Ayuda del navegador.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
