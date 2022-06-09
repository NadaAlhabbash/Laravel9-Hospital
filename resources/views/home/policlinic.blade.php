
@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">Policlinic</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$data->title}} </li>
                        </ol>
                    </nav>
                </div>
            </div>  <!-- .row -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{Storage::url($data->image)}}" style="width: 800px; height: 500px" alt="">
                        </div>
                        @foreach($images as $rs)
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{Storage::url($data->image)}}" style="width: 800px; height: 500px" alt="">
                        </div>
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <article class="blog-details">--}}
{{--                        <div class="post-thumb">--}}
{{--                            <img src="{{Storage::url($data->image)}}" style="width: 800px; height: 500px" alt="">--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <div class="post-meta">--}}
{{--                            <div class="post-author">--}}
{{--                                <span class="text-grey">By</span> <a href="#">Admin</a>--}}
{{--                            </div>--}}
{{--                            <span class="divider">|</span>--}}
{{--                            <div class="post-date">--}}
{{--                                <a href="#">22 Jan, 2018</a>--}}
{{--                            </div>--}}
{{--                            <span class="divider">|</span>--}}
{{--                            <div>--}}
{{--                                <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>--}}
{{--                            </div>--}}
{{--                            <span class="divider">|</span>--}}
{{--                            <div class="post-comment-count">--}}
{{--                                <a href="#">8 Comments</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <h2 class="post-title h1">{{$data->title}}</h2>
                        <div class="post-content">
                            <p>{{$data->description}}</p>
                            <p>{!! $data->detail !!}</p>
                        </div>

                    </article> <!-- .blog-details -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>


                        <form action="{{route('storecomment')}}" class="" method="post" enctype="multipart/form-data">
                            @csrf
                            <strong class="text-uppercase" >
                            <input type="hidden" class="form-control" name="policlinic_id" value="{{$data->id}}" >

                            <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input name="subject" type="text" class="form-control" placeholder="subject">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea name="comment" id="message" cols="30" rows="8" class="form-control" placeholder="your comment"></textarea>
                            </div>
                                <div class="form-group">

{{--                                    <div class="br-theme-css-stars">--}}
{{--                                        <input type="radio" id="star5" name="rate" value="5"/><label for="star5"></label>--}}
{{--                                        <input type="radio" id="star4" name="rate" value="4"/><label for="star4"></label>--}}
{{--                                        <input type="radio" id="star3" name="rate" value="3"/><label for="star3"></label>--}}
{{--                                        <input type="radio" id="star2" name="rate" value="2"/><label for="star2"></label>--}}
{{--                                        <input type="radio" id="star1" name="rate" value="1"/><label for="star1"></label>--}}
{{--                                    </div>--}}

                                    <label for="rate">Rating
                                        <select class="form-control" name="rate">
                                            <option >Your rate</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                    </label>
                                </div>
                                </strong>

                            <div class="form-group">

                                <input type="submit" value="Post Comment" class="btn btn-primary">

{{--                                    <a href="/login" class="btn btn-primary">For Submit Your Review, Please Login</a>--}}

                            </div>



                        </form>


                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->

{{--    <div class="page-section pt-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <div class="carousel-item active">--}}
{{--                            <img src="..." class="d-block w-100" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <img src="..." class="d-block w-100" alt="...">--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <img src="..." class="d-block w-100" alt="...">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="page-section banner-home bg-image" style="background-image: url({{asset('assets')}}/img/banner-pattern.svg);">
        <div class="container py-5 py-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-4 wow zoomIn">
                    <div class="img-banner d-none d-lg-block">
                        <img src="{{asset('assets')}}/img/mobile_app.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                    <a href="#"><img src="{{asset('assets')}}/img/google_play.svg" alt=""></a>
                    <a href="#" class="ml-2"><img src="{{asset('assets')}}/img/app_store.svg" alt=""></a>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .banner-home -->


@endsection
