@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Add Category </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.policlinic.index')}}">Policlinic</a></li>
                                 <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Category Elements</h4>

                             <form class="forms-sample" action="{{route('admin.policlinic.store')}}" method="post" enctype="multipart/form-data">
                                 @csrf

                                 <div class="form-group">
                                     <label>Parent Category</label>
                                     <select class="form-control select2" name="category_id" >
                                     @foreach($data as $rs)
                                             <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                         @endforeach
                                     </select>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Title</label>
                                     <input type="text" class="form-control text-light " name="title" placeholder="Title">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Keywords</label>
                                     <input type="text" class="form-control text-light" name="keywords" placeholder="Keywords">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Description</label>
                                     <input type="text" class="form-control text-light" name="description" placeholder="Discription">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Detail</label>
                                     <textarea class="form-control text-light" name="detail">

                                     </textarea>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Specialization</label>
                                     <input type="text" class="form-control text-light" name="specialization" placeholder="Specialization">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Location</label>
                                     <input type="text" class="form-control text-light" name="location" placeholder="Location">
                                 </div>

                                 <div class="form-group">
                                     <label >Status</label>
                                     <select class="form-control text-muted" name="status">
                                         <option >Status</option>
                                         <option>True</option>
                                         <option>False</option>

                                     </select>
                                 </div>
                                 <div class="form-group " >
                                     <label for="exampleInputName1">Image</label>
                                     <div class="file-upload-info ">
                                         <input class="input-group-append" type="file" name="image" >
                                     </div>
                                 </div>

{{--                                 <div class="form-group">--}}
{{--                                     <label for="exampleInputFile">Image</label>--}}
{{--                                     <div class="custom-file">--}}
{{--                                         <label class="custom-file-label" for="exampleInputFile">Choose File Image</label>--}}
{{--                                         <input type="file" class="custom-file-input" name="image">--}}
{{--                                     </div>--}}
{{--                                 </div>--}}

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

