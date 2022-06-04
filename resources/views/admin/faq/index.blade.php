@extends('layouts.adminbase')

@section('title', 'FAQ List')


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
                             <h4 class="card-title">FAQ List</h4>
                             <p class="card-description">
                                 <a href="{{route('admin.faq.create')}}" class="text-success">Add Question</a>
                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th style="width:10px">ID</th>
                                         <th>Question</th>
                                         <th>Answer</th>
                                         <th>Status</th>
                                         <th style="width:10px">Edit</th>
                                         <th style="width:10px">Show</th>
                                         <th style="width:10px">Delete</th>

                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($data as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>{{$rs->questiion}}</td>
                                         <td>{!! $rs->answer !!}</td>
                                         <td>{{$rs->status}}</td>
                                         <td><a class="btn btn-primary btn-rounded" href="{{route('admin.faq.edit',['id'=>$rs->id])}}">Edit</a> </td>
                                         <td><a class="btn btn-warning btn-rounded" href="{{route('admin.faq.show',['id'=>$rs->id])}}">Show</a> </td>
                                         <td><a class="btn btn-danger btn-rounded " href="{{route('admin.faq.delete',['id'=>$rs->id])}}"
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

