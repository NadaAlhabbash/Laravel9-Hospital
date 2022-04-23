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
                                 <li class="breadcrumb-item"><a href="#">Category</a></li>
                                 <li class="breadcrumb-item active" aria-current="page"><a href="/admin">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Category Elements</h4>

                             <form class="forms-sample" action="/admin/category/store" method="post">
                                 @csrf
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
                                         <input class="input-group-append" type="file" name="file" >
                                     </div>
                                 </div>

                                 <button type="submit" class="btn btn-primary me-2">Submit</button>
                                 <button class="btn btn-dark" > Cancel</button>
                             </form>
                         </div>
                     </div>

                 </div>

        </div>
    </div>

@endsection

