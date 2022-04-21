<html>
<head>
    <title>App Name - @yield('title')</title>
    @yield('head')
</head>
<body>
@section('sidebar')
    This is master sidebar
    @show
<div class="container">
    @yield('contenet')
</div>
<h1>Footer</h1>
@yield('foot')
</body>
</html>
