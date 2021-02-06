
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="Efekan Gündüz">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets')}}/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">

    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._wrapper')
@include('home._header')
@include('home._category')
@section('content')
    İçerik Alanı
@show


@include('home._footer')
@yield('footerjs')



</body>
</html>
