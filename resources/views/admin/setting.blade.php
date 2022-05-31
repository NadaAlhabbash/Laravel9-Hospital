@extends('layouts.adminbase')

@section('title', 'Admin Settings')

@section('head')
    <!--include summernote css/js-->
    <link href="http://cdn.jsdeliver.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Settings </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="card">
                    <div class="card-body">

                        <form class="forms-sample" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        <nav>
                            @csrf
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-general-tab" data-bs-toggle="tab" data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-general" aria-selected="true">General</button>
                                <button class="nav-link" id="nav-smtpemail-tab" data-bs-toggle="tab" data-bs-target="#nav-smtpemail" type="button" role="tab" aria-controls="nav-smtpemail" aria-selected="false">Smtp Email</button>
                                <button class="nav-link" id="nav-socialmedia-tab" data-bs-toggle="tab" data-bs-target="#nav-socialmedia" type="button" role="tab" aria-controls="nav-socialmedia" aria-selected="false">Social Media</button>
                                <button class="nav-link" id="nav-aboutus-tab" data-bs-toggle="tab" data-bs-target="#nav-aboutus" type="button" role="tab" aria-controls="nav-aboutus" aria-selected="false">About Us</button>
                                <button class="nav-link" id="nav-contactpage-tab" data-bs-toggle="tab" data-bs-target="#nav-contactpage" type="button" role="tab" aria-controls="nav-contactpage" aria-selected="false">Contact Page</button>
                                <button class="nav-link" id="nav-reference-tab" data-bs-toggle="tab" data-bs-target="#nav-reference" type="button" role="tab" aria-controls="nav-reference" aria-selected="false">Reference</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text"  name="keywords" value="{{$data->keywords}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text"  name="description" value="{{$data->description}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text"  name="company" value="{{$data->company}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text"  name="address" value="{{$data->address}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text"  name="phone" value="{{$data->phone}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text"  name="email" value="{{$data->email}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control text-muted" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputFile">Icon</label>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <div class="custom-file">--}}
{{--                                            <input type="file" class="custom-file-input" name="icon">--}}
{{--                                            <label class="custom-file-label" for="exampleInputFile">Choose File</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group " >
                                    <label for="exampleInputName1">Icon</label>
                                    <div class="file-upload-info ">
                                        <input class="input-group-append" type="file" name="icon" >
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-smtpemail" role="tabpanel" aria-labelledby="nav-smtpemail-tab">
                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text"  name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text"  name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtppassword</label>
                                    <input type="text"  name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpport</label>
                                    <input type="text"  name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-socialmedia" role="tabpanel" aria-labelledby="nav-socialmedia-tab">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text"  name="fax" value="{{$data->fax}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text"  name="facebook" value="{{$data->facebook}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text"  name="instagram" value="{{$data->instagram}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text"  name="twitter" value="{{$data->twitter}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text"  name="youtube" value="{{$data->youtube}}" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contactpage" role="tabpanel" aria-labelledby="nav-contactpage-tab">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reference" role="tabpanel" aria-labelledby="nav-reference-tab">
                                <div class="form-group">
                                    <label>Reference</label>
                                    <textarea id="reference" name="reference">{{$data->reference}}</textarea>
                                </div>
{{--                                <script>--}}
{{--                                    $(document).ready(function(){--}}
{{--                                        $('#aboutus').summernote();--}}
{{--                                        $('#contact').summernote();--}}
{{--                                        $('#reference').summernote();--}}
{{--                                    });--}}
{{--                                </script>--}}
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
        </div>

    </div>
        @include("admin.footer")
        @yield('foot')
        <script src="http://cdn.jsdeliver.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#aboutus').summernote();
                $('#contact').summernote();
                $('#reference').summernote();
            });
        </script>
    </div>
    </div>
@endsection

