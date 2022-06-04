<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Nada Alhabbash">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">

    <link rel="stylesheet" href="{{asset('assets')}}/css/maicons.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="{{asset('assets')}}/vendor/animate/animate.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/theme.css">

    @yield("head")
</head>
<body >

<div class="back-to-top"></div>
@include("home.header")



@section('sidebar')
@show
    @section('slider')

    @show

    @yield('content')


@include("home.footer")
@yield('foot')
</body>
</html>
