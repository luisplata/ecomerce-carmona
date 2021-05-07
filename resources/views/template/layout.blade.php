<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="es"/>
    <meta name="language" content="español">
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="carmonagallery.com">
    <meta property="og:title" content="Carmona"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="{{url('/')}}"/>
    <meta property="og:image" content="{{asset('img/seo.jpg')}}"/>
    <meta property="og:description" content=""/>
    <link rel="shortcut icon" type="image/png" href="{{ asset("img/favicon-32x32.png") }}" sizes="32x32" />
    <link rel="shortcut icon" type="image/png" href="{{ asset("img/favicon-16x16.png") }}" sizes="16x16" />
    <link rel="stylesheet" href="{{  url(mix("css/app.css")) }}">
    @yield('style')
</head>
<body>
<script>
    var imageURL = '{{url('img/logo_big.svg')}}';
    var https = "{{url('/')}}/";
</script>
<section id="loading">
    <div><img class="pulse animated infinite" src="{{asset('img/logo_big.svg')}}" alt=""> </div>
</section>
<section id="content">
    @include('components.header')
    @yield('content')
    @include('components.footer')
</section>
<div class="phone-float">
    <a href="tel:+57{{$info->call}}" target="_blank">
        <img src="{{asset('img/phone.png')}}" alt="">
    </a>
</div>
<div class="wp-float-desktop">
    <a href="https://wa.me/57{{$info->whatsapp}}" target="_blank">
        <img src="{{asset('img/whatsapp-logo.png')}}" alt="">
    </a>
</div>
<script src="{{ url(mix("js/app.js")) }}" async></script>
@yield('script')
</body>
</html>
