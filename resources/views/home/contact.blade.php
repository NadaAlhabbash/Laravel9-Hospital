
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
    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Contact Form</h1>

            <form class="contact-form mt-5">
                <div class="row">
                    <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        {!! $setting->contact !!}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6 py-2 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <label for="fullName">Name</label>
                        <input type="text" id="fullName" class="form-control" placeholder="Full name..">
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <label for="emailAddress">Email</label>
                        <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary wow zoomIn" style="visibility: visible; animation-name: zoomIn;">Send Message</button>
            </form>
        </div>
    </div>
@endsection
