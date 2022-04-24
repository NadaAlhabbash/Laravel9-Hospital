@extends('layouts.adminbase')

@section('title', 'Edit Category :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Edit Category : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="/admin/category">Category</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="/admin">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Category Elements </h4>
                            <p class="card-description text-small">
                                <a class="text-small text-info" href="/admin/category/create">Add Category</a>
                                <a class="text-danger text-small" style="padding-left:10px " href="/admin/category/delete/{{$data->id}}"
                                   onclick="return confirm('Deleting !! Are you sure?')">Delete</a>

                            </p>
                             <form class="forms-sample" action="/admin/category/update/{{$data->id}}" method="post">
                                 @csrf
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
                                         <input class="input-group-append" type="file" name="file" >
                                     </div>
                                 </div>

                                 <button type="submit" class="btn btn-primary me-2">Update</button>
                                 <button class="btn btn-dark" ><a class="text-gray" href="/admin" >Cancel</a></button>
                             </form>
                         </div>
                     </div>

                 </div>

        </div>
    </div>

@endsection

