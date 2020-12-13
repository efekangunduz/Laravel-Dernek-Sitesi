<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kahtalı Miçe">
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--web-fonts-->
    <link href='{{asset('assets')}}/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--js-->
    <script src="{{asset('assets')}}/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('assets')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
    @yield('css')
    @yield('headerjs')
</head>
<body>
@include('home._header')
@include('home._slider')
@section('content')
    İçerik Alanı
@show


@include('home._footer')
@yield('footerjs')



</body>
</html>
