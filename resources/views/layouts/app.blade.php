<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      
    <link rel="shortcut icon" href="{{asset('images/'.widget(13)->extra_image_1)}}">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! seo (collect(request()->segments())->last()) !!}
	<link rel="stylesheet" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
	<!-- Rev Slider css -->
	<link rel="stylesheet" href="{{asset('js/revolution-slider/css/settings.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    @stack('css')

    <script type="text/javascript">
      var base_url = "{!!url('/')!!}"
    </script>
   </head>
   <body>
   	@include('includes.topbar')
   	@yield('content')
   	@include('includes.footer')
   	<!-- jQuery Lib -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>

	<!-- Slicknav JS -->
	<script src="{{asset('js/vendor/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('js/vendor/smooth-scroll.min.js')}}"></script>
	<script src="{{asset('js/vendor/venobox.min.js')}}"></script>
	<script src="{{asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
	<!-- Revolution Slider --> 
	<script type="text/javascript" src="{{asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script> 
	<script type="text/javascript" src="{{asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script> 
	   
	<!-- Ajaxchimp JS -->
	<script src="{{asset('js/vendor/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/counter.js')}}"></script>
	<script src="{{asset('js/owl.carousel.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script> 
	<!-- Jquery Fancybox --> 
	<script src="{{asset('js/jquery.fancybox.min.js')}}"></script> 
	<!-- Animate js --> 
	<script src="{{asset('js/animate.js')}}"></script> 
	
	<!-- WOW file --> 
	<script src="{{asset('js/wow.js')}}"></script> 
	<!-- general script file --> 
	<script src="{{asset('js/owl.carousel.js')}}"></script> 
	<script src="{{asset('admin/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/bootstrap-growl.min.js')}}"></script>
	@stack('js')
   </body>
</html>