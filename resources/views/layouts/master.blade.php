<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title') | Contador de Palabras Online</title>
    <meta name="description" content="@yield('description')">
    <meta property="og:description" content="@yield('description')">
    @include('partials.head')

</head>
<body>
<div>
    @include('partials.navbar')

    <div class="content">
        @yield('content')
    </div>

    @if(isset($acceptCookie) && !$acceptCookie)
        <div id="messageCookie" class="">
            <div class="bg-cookie">
                <div class="container">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-9 col-sm-11">
                            <p class="mb-0">
                                Las cookies de esta web se usan para personalizar los anuncios, funciones de redes sociales y
                                analizar el tráfico. Compartimos información sobre el uso que haga de la web con nuestros partners
                                de redes sociales, publicidad y análisis web.
                                <a href="{{route('cookies')}}" target="_blank"> Más información</a></p>
                        </div>
                        <div class="col col-sm-1">
                            <button type="button" onclick="acceptCookies()" class="btn btn-sm p-1" style="color: white;" name="button">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('partials.footer')
    @include('partials.scripts')
    <script>
        function acceptCookies() {
            const url = `{{ route('acceptCookies') }}`;
            let data = {accept: true};

            fetch(url, {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers:{
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                .then((response) => {
                    if (response['success']) {
                        document.getElementById('messageCookie').classList.add('d-none')
                    }
                } );

        }
    </script>
    @yield('javascript')
</div>
</body>
</html>
