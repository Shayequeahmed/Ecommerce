<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('fronts/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fronts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('fronts/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('fronts/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('fronts/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('fronts/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('fronts/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('fronts/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('fronts/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('fronts/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('fronts/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	
	@include('layouts.fronts.header')
	
	@yield('content')
	
	@include('layouts.fronts.footer')
	

  
    <script src="{{asset('fronts/js/jquery.js')}}"></script>
	<script src="{{asset('fronts/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('fronts/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('fronts/js/price-range.js')}}"></script>
    <script src="{{asset('fronts/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('fronts/js/main.js')}}"></script>
</body>
</html>