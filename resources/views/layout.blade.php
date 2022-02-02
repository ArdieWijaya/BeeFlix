<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>@yield('judul')</title>
</head>
<body>
<h1 class="text-info marginleftright"><a href="/">BeeFlix</a></h1>
    <div>
        <a onclick="kembali()" class="btn btn-light btn-outline-info marginleftright">KEMBALI</a>
        <a href="{{ url('/') }}" class="btn btn-info marginleftright">LIHAT SEMUA FILM</a>
    </div>
    @yield('body')
</body>
</html>
<script>
    function kembali() {
        window.history.back();
    }
</script>
