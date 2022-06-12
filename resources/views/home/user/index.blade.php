
@extends('layouts.frontbase')

@section('title','User Panel')

@section('content')
    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Panel</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Menu</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    <div class="page-section pt-5">
        <div class="container">


            <div class="row">
                <div class="col-lg-7">

                    <div class="comment-form-wrap pt-5">
                        <h1 class="mb-5">User Profile</h1>
                        @include('profile.show')
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">User Menu</h3>
                            @include('home.user.usermenu')
                        </div>

                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
@endsection

