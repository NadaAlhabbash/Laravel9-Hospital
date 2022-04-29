<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('adminasset')}}/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('adminasset')}}/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('adminasset')}}/images/favicon.png" />
    @yield("head")
</head>
<body class="container-scroller">

@include("admin.header")

@section('sidebar')
@include("admin.sidebar")
@show

@yield('content')


{{--@include("admin.footer")--}}
{{--@yield('foot')--}}

</body>
</html>
