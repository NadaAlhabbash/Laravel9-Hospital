@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title">  </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Category List</h4>
                             <p class="card-description">
                                 <a href="{{route('admin.category.create')}}" class="text-success">Add Category</a>
                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Parent</th>
                                         <th>Title</th>
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
                                         <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                         <td>{{$rs->title}}</td>
                                         <td>
                                             @if ($rs->image)
                                                 <img src="{{Storage::url($rs->image)}}" style="height: 40px" >
                                                 @endif
                                         </td>
                                         <td>{{$rs->status}}</td>
                                         <td><a class="btn btn-primary btn-rounded" href="{{route('admin.category.edit',['id'=>$rs->id])}}">Edit</a> </td>
                                         <td><a class="btn btn-warning btn-rounded" href="{{route('admin.category.show',['id'=>$rs->id])}}">Show</a> </td>
                                         <td><a class="btn btn-danger btn-rounded " href="{{route('admin.category.delete',['id'=>$rs->id])}}"
                                                onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>

                                     </tr>
                                     @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
            @include("admin.footer")
            @yield('foot')
                 </div>


    </div>


@endsection

