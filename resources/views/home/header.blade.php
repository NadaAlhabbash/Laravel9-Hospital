@section('head')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


@endsection

<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            @php
            $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>

                    <div class="dropdown nav-item">
                        <a id="dLabel" class="nav-link dropdown-toggle" data-toggle="dropdown"  href="/page.html" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" >
                            @foreach($mainCategories as $rs)
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#" >{{$rs->title}} </a>
                                <ul class="dropdown-menu">
{{--                                    <li><a tabindex="-1" href="#">Second level</a></li>--}}
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                </ul>
                            </li>
                            @endforeach

                        </ul>
{{--                        @if(count($rs->children))--}}
{{--                            @include('home.categorytree',['children'=>$rs->children])--}}
{{--                        @endif--}}
                    </div>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('reference')}}">References</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                    </li>

                    <li class="nav-item">
                        @auth()
                        <div class="align-middle active">
                            <strong class="text-uppercase "><a href="{{route('userpanel.index')}}"> <i class="mai-person ">{{Auth::user()->name}}</i></a></strong>
                        </div>
                            <a class="text-uppercase text-small" href="/logoutuser">Log Out</a>
                        @endauth

                        @guest
                           <a class="text-uppercase text-small" href="/loginuser">Login</a>    /<a class="text-uppercase ml-lg-3" href="/registeruser">Register</a>
                        @endguest
                    </li>

                    <div class="float-right">

                    </div>


                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>




</header>
