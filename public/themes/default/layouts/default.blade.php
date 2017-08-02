<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <head>
        <title>{!! Theme::get('title') !!}JOMEL</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/stylesheet.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/portfolio.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css) }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body>
            {!! Theme::content() !!}
            <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
            <script src="{{ asset('js/wow.js') }}"></script>
            <script src="{{ asset('js/wow.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
           <script type="text/javascript" src="{{ asset('js/home.js') }}"></script
    </body>
</html>
