@extends('layouts.adminbase')

@section('title', 'Add Qusetion')
@section('head')
    <script src="http://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Add Question </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">FAQ</a></li>
                                 <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">FAQ Elements</h4>

                             <form class="forms-sample" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                 @csrf

                                 <div class="form-group">
                                     <label for="exampleInputName1">Question</label>
                                     <input type="text" class="form-control text-light " name="question" placeholder="Your question">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Answer</label>
                                     <textarea class="form-control text-black" id="answer" name="answer">

                                     </textarea>
                                     <script>
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
                                     <select class="form-control text-muted" name="status">
                                         <option >Status</option>
                                         <option>True</option>
                                         <option>False</option>
                                     </select>
                                 </div>

                                 <button type="submit" class="btn btn-primary me-2">Submit</button>
                                 <button class="btn btn-dark" ><a class="text-gray" href="{{route('admin.index')}}" >Cancel</a></button>
                             </form>
                         </div>
                     </div>

                 </div>
            @include("admin.footer")
            @yield('foot')

        </div>
    </div>

@endsection

