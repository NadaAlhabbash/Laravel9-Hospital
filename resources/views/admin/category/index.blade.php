@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Category List</h4>
                             <p class="card-description">
                                 <a href="/admin/category/create" class="text-success">Add Category</a>
                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Title</th>
                                         <th>Keywords</th>
                                         <th>Discription</th>
                                         <th>Image</th>
                                         <th>Status</th>
                                         <th>Edit</th>
                                         <th>Show</th>
                                         <th>Delete</th>

                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($data as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>{{$rs->title}}</td>
                                         <td>{{$rs->keywords}}</td>
                                         <td>{{$rs->description}}</td>
                                         <td>{{$rs->image}}</td>
                                         <td>{{$rs->status}}</td>
                                         <td><a class="btn btn-primary btn-rounded" href="/admin/category/edit/{{$rs->id}}/">Edit</a> </td>
                                         <td><a class="btn btn-warning btn-rounded" href="/admin/category/show/{{$rs->id}}/">Show</a> </td>
                                         <td><a href="/admin/category/delete/{{$rs->id}}"class="btn btn-danger btn-rounded "
                                                onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>

                                     </tr>
                                     @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 </div>
        </div>
    </div>

@endsection

