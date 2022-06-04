@extends('layouts.adminbase')

@section('title', 'Edit FAQ :'.$data->title)
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
                         <h3 class="page-title"> Edit FAQ : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">Policilinic</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">FAQ Elements </h4>
                            <p class="card-description text-small">
                                <a class="text-small text-info" href="{{route('admin.faq.create')}}">Add FAQ</a>
                                <a class="text-danger text-small" style="padding-left:10px " href="{{route('admin.faq.delete',['id'=>$data->id])}}"
                                   onclick="return confirm('Deleting !! Are you sure?')">Delete</a>

                            </p>
                             <form class="forms-sample" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                 @csrf

                                 <div class="form-group">
                                     <label for="exampleInputName1">Question</label>
                                     <input type="text" class="form-control text-light " name="question" value="{{$data->question}}">
                                 </div>

                                 <div class="form-group" >
                                     <label for="exampleInputName1">Answer</label>
                                     <textarea class="form-control text-dark" id="answer" name="answer" >
                                         {!! $data->answer !!}
                                     </textarea>
                                     <script style="color:black ">
                                         ClassicEditor
                                             .create(document.querySelector('#answer'))
                                             .then(editor=>{
                                                 console.log(editor);
                                             })
                                             .catch(error=>{
                                                 console.error(error);
                                             });
                                     </script>
                                 </div>


                                 <div class="form-group">
                                     <label >Status</label>
                                     <select class="form-control text-light" name="status">
                                         <option selected>{{$data->status}}</option>
                                         <option>True</option>
                                         <option>False</option>

                                     </select>
                                 </div>


                                 <button type="submit" class="btn btn-primary me-2">Update</button>
                                 <button class="btn btn-dark" ><a class="text-gray" href="/admin" >Cancel</a></button>
                             </form>
                         </div>
                     </div>

                 </div>
            @include("admin.footer")
            @yield('foot')
            <script src="http://cdn.jsdeliver.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <script>
                $(function(){
                    // Summernote
                    $('.textarea').summernote()
                })
            </script>
        </div>
    </div>

@endsection

