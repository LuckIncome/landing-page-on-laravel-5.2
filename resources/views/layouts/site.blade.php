<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Unique</title>
<link rel="icon" href="{{asset('assets/favicon.png')}}" type="image/png">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css"> 
<!-- <link href="{{asset('assetscss/animate.css')}}" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

 
<!--[if lt IE 9]>
    <script src="{{asset('assets/js/respond-1.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('assets/js/html5element.js')}}"></script>
<![endif]-->
 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  @yield('header')
</header>
<!--Header_section--> 
@yield('content')


<script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.isotope.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('assets/js/wow.js')}}"></script>  -->
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
</script>

</body>
</html>