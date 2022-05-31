
@extends('layouts.frontbase')

@section('title', $category->title,'Policlinic')

@section('content')
    @php
        $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
    @endphp
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($policlinic as $rs)
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <a href="{{route('policlinic',['id'=>$rs->id])}}" class="post-thumb">
                                        <img src="{{Storage::url($rs->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">{{$rs->title}}</a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div> <!-- .row -->
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Categories</h3>
                            @foreach($mainCategories as $rs)
                            <ul class="categories">
                                <li><a href="#">{{$rs->title}} </a></li>
                            </ul>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div>
@endsection
