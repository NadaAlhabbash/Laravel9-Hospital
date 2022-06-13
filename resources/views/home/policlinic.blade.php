
@extends('layouts.frontbase')

@section('title', $data->title)


@section('head')
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{--    <!------ Include the above in your HEAD tag ---------->--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


@endsection

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
                @php
                    $average=$data->comment->average('rate');
                @endphp
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item active" aria-current="page">Review(s)</li>
                            <li class="breadcrumb-item active " aria-current="page">{{$data->comment->count('id')}}</li>
                            <li class="breadcrumb-item active" aria-current="page">{{number_format($average,1)}}</li>
                        </ol>
                    </nav>
                </div>

            </div>
                @include('home.messages')<!-- .row -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{Storage::url($data->image)}}" style="width: 800px; height: 500px" alt="">
                        </div>
                        @foreach($images as $rs)
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{Storage::url($rs->image)}}" style="width: 800px; height: 500px" alt="">
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
            </div>
                        <h2 class="post-title h1">{{$data->title}}</h2>
                        <div class="post-content">
                            <p>{{$data->description}}</p>
                            <p>{!! $data->detail !!}</p>
                        </div>

                    </article><!-- .blog-details -->




            </div> <!-- .row -->
         <!-- .container -->
     <!-- .page-section -->

    <div class="comment-form-wrap pt-5">
        <!-- Tabs -->
        <section id="tabs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Comment</a>
                                <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Review({{$data->comment->count('id')}})</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h3 class="mb-5">Leave a comment</h3>
                                    <form action="{{route('storecomment')}}" class="container" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" class="form-control" name="policlinic_id" value="{{$data->id}}" >

                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input name="subject" type="text" class="form-control" placeholder="subject">
                                        </div>

                                        <div class="form-group">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" id="message" cols="30" rows="8" class="form-control" placeholder="your comment"></textarea>
                                        </div>
                                        <div class="form-group">

                                            <div class="input-rating">
                                                <strong class="text-uppercase">Your rating: </strong>
                                                <div class="stars">
                                                    <input type="radio" id="star5" name="rate" value="5"><label for="star5"></label>
                                                    <input type="radio" id="star4" name="rate" value="4"><label for="star4"></label>
                                                    <input type="radio" id="star3" name="rate" value="3"><label for="star3"></label>
                                                    <input type="radio" id="star2" name="rate" value="2"><label for="star2"></label>
                                                    <input type="radio" id="star1" name="rate" value="1"><label for="star1"></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            @auth
                                                <input type="submit"  value="Submit">
                                            @else
                                                <a href="/loginuser" class=" primary-btn"> For submit your comment, please login </a>
                                            @endauth
                                        </div>
                                    </form>
                                </div>

                            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">

                                @foreach($reviews as $rs)
                                    <div class="single-review">
                                        <div class="review-heading">
                                            <div><a href="#"><i class="bi bi-person"></i> {{$rs->user->name}}</a> </div>
                                            <div><a href="#"><i class="bi bi-clock-history"></i> {{$rs->created_at}}</a> </div>
                                            <div class="review-rating pull-right">
                                                <i class="bi bi-star @if ($rs->rate<1) -o empty @endif "></i>
                                                <i class="bi bi-star @if ($rs->rate<2) -o empty @endif "></i>
                                                <i class="bi bi-star @if ($rs->rate<3) -o empty @endif "></i>
                                                <i class="bi bi-star @if ($rs->rate<4) -o empty @endif "></i>
                                                <i class="bi bi-star @if ($rs->rate<5) -o empty @endif "></i>
                                            </div>
                                            <div class="review-body">
                                                <strong>{{$rs->subject}}</strong>
                                                <p>{{$rs->comment}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ./Tabs -->
    </div>

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

