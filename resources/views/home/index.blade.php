
@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon) )

 @section('sidebar')
     @include('home.sidebar')
 @endsection

@section('slider')
@include('home.slider')
@endsection


@section('content')

    @include('home.messages')
    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Policlinics</h1>

            <div class="row mt-5">
                @foreach($policlinicList as $rs)
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            @php
                                $average=$rs->comment->average('rate');
                            @endphp
{{--                            <div class="post-category">--}}
{{--                                <a href="#">Covid19</a>--}}
{{--                            </div>--}}
                            <a href="{{route('policlinic',['id'=>$rs->id])}}" class="post-thumb">
                                <img src="{{Storage::url($rs->image)}}" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="{{route('policlinic',['id'=>$rs->id])}}">{{$rs->title}}</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
{{--                                    <div class="avatar-img">--}}
{{--                                        <img src="{{asset('assets')}}/img/person/person_1.jpg" alt="">--}}
{{--                                    </div>--}}
                                    <span>{{number_format($average,1)}}</span>
                                </div>
{{--                                <span class="mai-time"></span> 1 week ago--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

{{--                <div class="col-12 text-center mt-4 wow zoomIn">--}}
{{--                    <a href="blog.html" class="btn btn-primary">Show More</a>--}}
{{--                </div>--}}

            </div>
        </div>
    </div> <!-- .page-section -->
    <div class="page-section">
        <div class="container">

            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

            <form class="main-form"  action="{{route('makeappointment')}}" method="post" enctype="multipart/form-data">
                @csrf

                @php
                    $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                @endphp

                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" class="form-control" placeholder="Email address..">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="policlinic_id" id="policlinic_id" class="custom-select">
                            <option value="general">Choose Policlinic</option>
                            @foreach($mainCategories as $rs)
                            <option>{{$rs->id}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="time" class="form-control" placeholder="time">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <select name="payment" id="payment" class="custom-select">
                            <option value="general">Choose Payment</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" name="note" class="form-control" placeholder="note">
                    </div>


                </div>
             @auth()
                    <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
                @else
                    <a href="/loginuser" class=" primary-btn"> For submit your comment, please login </a>
                @endauth
            </form>
        </div>
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
            </div>
        </div>
    </div> <!-- .banner-home -->
@endsection
