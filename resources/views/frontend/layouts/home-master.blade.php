<!DOCTYPE html>
<html>
<head>
	
<title>@yield('title')</title>
	<!-- meta tags -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
   	
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- favicon icons-->
    <!--<link rel="icon" type="image/ico" href="{{url('images/icon.ico')}}">-->
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/ico">
    
	<!-- styles -->
	<link rel=stylesheet href="{{url('css/bootstrap.min.css')}}">
	<link rel=stylesheet href="{{url('css/bootstrap-theme.min.css')}}">
	<link rel=stylesheet href="{{url('css/style.css')}}">
	<link rel=stylesheet href="{{url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css')}}">

	<!-- fa icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">


	<!-- Jquery -->
	<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>

</head>

<body>

<div class="header">
	@include('frontend.header.header')
</div>

<div>
	@yield('content')
</div>

<div class="newsletter">
	@include('frontend.home.newsletter')
</div>

@include('frontend.footer.top')
<div class="footer">
	@include('frontend.footer.footer')
</div>

</body>

<!-- Fliplight Box -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="{{url('js/fliplightbox.min.js')}}"></script>


<script type="text/javascript">$('body').flipLightBox()</script>


<!-- bootstrap bootstrap min -->
<script src="{{url('js/bootstrap.min.js')}}"></script>

</html>