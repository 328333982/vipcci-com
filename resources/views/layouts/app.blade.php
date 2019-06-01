<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" itemprop="description" content="@yield('description', 'MAC应用分享，每天分享大量mac软件，为您提供优质的mac软件,免费软件下载服务')"/>
    <meta name="keywords" itemprop="keywords" content="@yield('keywords', 'mac,osx,app,mac软件,苹果软件下载,mac软件下载,mac免费软件下载,精品mac应用,vipcci')"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/2.png') }}">
    <title>@yield('title', 'Vipcci') - 苹果软件仓库</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
<div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

        @yield('content')

    </div>

    @include('layouts._footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>