<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>TSM - Web Developer</title>
    <link rel="icon" href="{{asset('img/logo_circle_bgwhite.png')}}" type="image/png">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
{{--    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/4d3192896f.js" crossorigin="anonymous"></script>
    @yield('style')
</head>
<body>

@yield('content')

<!--[if lt IE 9]>
<script src="{{asset('js/respond-1.1.0.min.js')}}"></script>
<script src="{{asset('js/html5shiv.js')}}"></script>
<script src="{{asset('js/html5element.js')}}"></script>
<![endif]-->
<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.nav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script>
<script src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('contact/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('contact/contact_me.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>
