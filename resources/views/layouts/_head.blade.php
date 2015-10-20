<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0" />

  <title>Shoperti - @yield('title', '')</title>
  <meta name="description" content="@yield('description', '')" />
  <meta name="author" content="dinkbit" />
  <meta name="keywords" content="">

  @yield('meta')

  <meta property="og:locale" content="es_LA" />
  <meta property="og:title" content="Shoperti" />
  <meta property="og:description" content="@yield('description', '')" />
  <meta property="og:url" content="{{{ URL::full() }}}" />
  <meta property="og:site_name" content="Shoperti" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="@yield('image', asset('img/logo_share.png'))" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- FAV and TOUCH ICONS -->
  {{-- http://www.favicon-generator.org/ --}}
  <link rel="shortcut icon" href="{{{ asset('img/ico/favicon.ico') }}}" type="image/x-icon" />
  {{-- APPLE ICONS --}}
  <link rel="apple-touch-icon" sizes="57x57" href="{{{ asset('img/ico/apple-icon-57x57.png') }}}" />
  <link rel="apple-touch-icon" sizes="60x60" href="{{{ asset('img/ico/apple-icon-60x60.png') }}}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{{ asset('img/ico/apple-icon-72x72.png') }}}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{{ asset('img/ico/apple-icon-76x76.png') }}}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{{ asset('img/ico/apple-icon-114x114.png') }}}" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{{ asset('img/ico/apple-icon-120x120.png') }}}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{{ asset('img/ico/apple-icon-144x144.png') }}}" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{{ asset('img/ico/apple-icon-152x152.png') }}}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{{ asset('img/ico/apple-icon-180x180.png') }}}" />
  {{-- ANDROID ICONS --}}
  <link rel="icon" type="image/png" sizes="16x16" href="{{{ asset('img/ico/favicon-16x16.png') }}}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{{ asset('img/ico/favicon-32x32.png') }}}" />
  <link rel="icon" type="image/png" sizes="96x96" href="{{{ asset('img/ico/favicon-96x96.png') }}}" />
  <link rel="icon" type="image/png" sizes="192x192" href="{{{ asset('img/ico/android-icon-192x192.png') }}}" />
  <link rel="manifest" href="{{{ asset('img/ico/manifest.json') }}}">
  {{-- MICROSOFT ICONS --}}
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{{ asset('img/ico/ms-icon-144x144.png') }}}">
  <meta name="theme-color" content="#ffffff">

  <link media="all" type="text/css" rel="stylesheet" href="{{ elixir('css/main.css') }}"/>

  @yield('css')

  <script>var base_url = "{{ env('BASE_URL', url('/')) }}";</script>

  <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendor/modernizr.js') }}"></script>

  <script src="{{ elixir('js/base.js') }}"></script>

  @yield('js_head')

  @include('partials._analytics')
  
</head>
