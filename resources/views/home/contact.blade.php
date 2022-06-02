
@extends('layouts.frontbase')

@section('title','Contact'. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon) )

@section('content')
    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Contact</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    <div class="page-section pt-5">
        <div class="container">


            <div class="row">
                <div class="col-lg-8">

                    <div class="comment-form-wrap pt-5">
                        <h1 class="mb-5">Contact</h1>
                        @include('home.messages')
                        <form action="{{route("storemessage")}}" class="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row form-group">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control " name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" placeholder="Your Message" name="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Contact Info</h3>
                            {!! $setting->contact !!}
                        </div>

                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
@endsection
