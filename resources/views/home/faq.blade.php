
@extends('layouts.frontbase')

@section('title','Frequently Asked Questions'. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::url($setting->icon) )
@section('head')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection

@section('content')

    <div class="page-banner overlay-dark bg-image" style="background-image: url({{asset('assets')}}/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Frequently Asked Questions</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Frequently Asked Questions</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>

    <div class="section">
        <div class="container">
            <section class="contact-page-section">
                <div class="people-info-wrap">
                    <br><br><br>
                    <div id="accrodion"></div>
                    @foreach ($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                    <h3>{{$rs->question}}</h3>
                                </a>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accrodion">
                                <div class="card-body">
                                    <p>{!! $rs->answer !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </section>
        </div>
    </div>

{{--    <div class="page-section">--}}
{{--        <div class="container">--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">--}}
{{--                    <h1 class="text-center mb-3">Frequently Asked Questions</h1>--}}
{{--                    <div class="text-lg">--}}
{{--                        <div id="accrodion">--}}
{{--                            @foreach($datalist as $rs)--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">--}}
{{--                                            <h3>{{$rs->question}}</h3>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div id="#collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accrodion">--}}
{{--                                        <div class="card-body">--}}
{{--                                           <p>{!!$rs->answer!!}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--            <div class="page-section">--}}
{{--                <div class="container">--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">--}}
{{--                            <h1 class="text-center mb-3">Frequently Asked Questions</h1>--}}
{{--                            <div class="text-lg">--}}

{{--                                <div class="panel-group" id="accordion">--}}
{{--                                    @foreach($datalist as $rs)--}}
{{--                                    <div class="panel panel-default">--}}
{{--                                        <div class="panel-heading">--}}
{{--                                            <h4 class="panel-title">--}}
{{--                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">--}}
{{--                                                    {{$rs->question}}</a>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                        <div id="#collapse{{$loop->iteration}}" class="panel-collapse collapse in">--}}
{{--                                            <div class="panel-body">{!!$rs->answer!!}</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

@endsection
