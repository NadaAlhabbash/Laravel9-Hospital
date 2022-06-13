
@extends('layouts.frontbase')

@section('title','User Comments')

@section('content')
    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Comment</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">User Comments </h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    <div class="page-section pt-5">
        <div class="container">


            <div class="row">
                <div class="col-lg-8">

                    <div class="comment-form-wrap pt-5">
                        <h1 class="mb-5">User Comments & Reviews</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width:10px">ID</th>
                                <th>Policlinic</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th style="width:10px">Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('policlinic',['id'=>$rs->policlinic_id])}}">{{$rs->policlinic->title}}</a></td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td><a class="btn btn-danger btn-rounded " href="{{route('userpanel.commentdelete',['id'=>$rs->id])}}"
                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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

