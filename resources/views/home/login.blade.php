
@extends('layouts.frontbase')

@section('title','User Login')


@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Login</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Login</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="text-lg">
                        @include('auth.login')
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
