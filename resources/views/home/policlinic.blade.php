
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
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-thumb">
                            <img src="{{Storage::url($data->image)}}" style="width: 800px; height: 500px" alt="">

                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey">By</span> <a href="#">Admin</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <a href="#">22 Jan, 2018</a>
                            </div>
                            <span class="divider">|</span>
                            <div>
                                <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-comment-count">
                                <a href="#">8 Comments</a>
                            </div>
                        </div>
                        <h2 class="post-title h1">{{$data->title}}</h2>
                        <div class="post-content">
                            <p>{{$data->description}}</p>

                        </div>

                    </article> <!-- .blog-details -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="">
                            <div class="form-row form-group">
                                <div class="col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->

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
