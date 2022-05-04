@extends('layouts.adminbase')

@section('title', 'Edit Policlinic :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Edit Policlinic : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.policlinic.index')}}">Policilinic</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Policlinic Elements </h4>
                            <p class="card-description text-small">
                                <a class="text-small text-info" href="{{route('admin.policlinic.create')}}">Add Policlinic</a>
                                <a class="text-danger text-small" style="padding-left:10px " href="{{route('admin.policlinic.delete',['id'=>$data->id])}}"
                                   onclick="return confirm('Deleting !! Are you sure?')">Delete</a>

                            </p>
                             <form class="forms-sample" action="{{route('admin.policlinic.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                 @csrf

                                 <div class="form-group">
                                     <label>Parent Category</label>
                                     <select class="form-control select2" name="category_id" >
                                         <option value="0" selected="selected">Main Category</option>
                                         @foreach($datalist as $rs)
                                             <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                 {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                         @endforeach
                                     </select>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Title</label>
                                     <input type="text" class="form-control text-light " name="title" value="{{$data->title}}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Keywords</label>
                                     <input type="text" class="form-control text-light" name="keywords" value="{{$data->keywords}}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Description</label>
                                     <input type="text" class="form-control text-light" name="description" value="{{$data->description}}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Detail</label>
                                     <textarea class="form-control text-light" name="detail">{{$data->detail}}
                                     </textarea>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Specialization</label>
                                     <input type="text" class="form-control text-light" name="specialization" value="{{$data->specialization}}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleInputName1">Location</label>
                                     <input type="text" class="form-control text-light" name="location" value="{{$data->location}}">
                                 </div>


                                 <div class="form-group">
                                     <label >Status</label>
                                     <select class="form-control text-light" name="status">
                                         <option selected>{{$data->status}}</option>
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

                                 <button type="submit" class="btn btn-primary me-2">Update</button>
                                 <button class="btn btn-dark" ><a class="text-gray" href="/admin" >Cancel</a></button>
                             </form>
                         </div>
                     </div>

                 </div>
            @include("admin.footer")
            @yield('foot')

        </div>
    </div>

@endsection

