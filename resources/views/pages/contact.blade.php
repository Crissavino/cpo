@extends('layouts.master')

@section('title', 'Contacta Con Nuestro Equipo')
@section('description', 'Contacta con nuestro equipo por cualquier duda o inquietud que tengas, en Contador de palabras online estamos para ayudarte.')
@section('canonicalUrl', 'https://www.contadordepalabrasonline.com/contact')

@section('content')

    @if($errors->any())
        <div class="container mt-3 alert alert-danger">
            <ul style="list-style: none !important;">
                <li>{{$errors}}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('success'))
        <div class="container mt-3 alert alert-success">
            <ul style="list-style: none !important;">
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <nav>
        <a href="{{ route('serp') }}" class="seo-link animate">
            <img class="seo" src="{{asset('img/seo.png')}}" alt="link hacia la pagina del simulador serp online">
        </a>
        <a href="{{ route('home') }}" class="abc-link animate" style="top: 45% !important;">
            <img class="abc" src="{{asset('img/abc.png')}}" alt="link hacia la pagina para contar palabras, caracteres, párrafos y oricaciones online">
        </a>
        <a href="{{ route('faq') }}" class="faq-link animate" style="top: 55% !important;">
            <img class="faq" src="{{asset('img/faq.png')}}" alt="link hacia la pagina de las preguntas frequentes">
        </a>
        <a href="{{ route('about') }}" class="about-link animate" style="top: 65% !important;">
            <img class="about" src="{{asset('img/about.png')}}" alt="link hacia la pagina sobre nosotros">
        </a>
    </nav>

    <section id="how-does-it-work" class="mb-5" style="min-height: 100vh">
        <h1 class="pb-5 titles text-center" style="color: white">Contacto</h1>
        <div class="container-fluid" data-aos="zoom-out" data-aos-delay="150" data-aos-once="true">
            <div class="row">
                <div class="ps-5 col-lg-5">
                    <p class="customP" style="color: white !important;">
                        ¡El personal de <strong>Contador de palabras online</strong> está a su disposición para ayudarlo con cualquier problema que encuentre al usar esta herramienta!
                        En <strong>Contador de palabras online</strong> estamos disponibles para brindarle todas las respuestas que necesite de lunes a sábado, de 8AM A 8PM.
                        <br>
                        Por correo electrónico a <a href="mailto:contadordepalabrasonline@gmail.com" style="color: #a52f2f !important;">contadordepalabrasonline@gmail.com</a>.
                        ¡También puedes utilizar el formulario que se encuentra en esta página para contactarnos!
                    </p>
                    <br>

                </div>
                <div class="mt-4 mt-lg-0 col-lg-6">
                    <div class="bg-modal">
                        <div class="modal__header text-center">
                            <h3 class="py-4">Contacto</h3>
                        </div>
                        <div class="bg">
                            <p class="px-lg-5 mb-4 customP">En el equipo de <strong>Contador de palabras online</strong> estamos disponibles para responder a tus preguntas lo mas rápido posible</p>
                            <form action="{{route('sendContactEmails')}}" class="px-lg-5" style="font-size: 20px !important;" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="name">Nombre completo *</label>
                                    <input type="text" placeholder="Nombre" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-4">
                                    <label for="email">Dirección de email *</label>
                                    <input type="email" placeholder="correo@email.com" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-4">
                                    <label for="subject">Asunto *</label>
                                    <input type="text" placeholder="Asunto" class="form-control" id="subject" name="subject" required>
                                </div>

                                <div class="mb-4">
                                    <label for="message">Tu mensaje *</label>
                                    <textarea name="message" id="message" cols="30" rows="10" required class="form-control"></textarea>
                                </div>

                                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                <div class="text-center mt-5">
                                    <button class="btn btn-primary col-8" style="background-color: #a52f2f !important; border-color: #a52f2f !important" type="submit" id="submitBtn">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')

@endsection
