@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')


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
                             <h4 class="card-title">Comment List</h4>
                             <p class="card-description">

                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th style="width:10px">ID</th>
                                         <th>Policlinic</th>
                                         <th>Name</th>
                                         <th>Subject</th>
                                         <th>Comment</th>
                                         <th>Rate</th>
                                         <th>Status</th>
                                         <th style="width:10px">Show</th>
                                         <th style="width:10px">Delete</th>

                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($data as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td><a href="{{route('admin.policlinic.show',['id'=>$rs->policlinic_id])}}">{{$rs->policlinic->title}}</a></td>
                                         <td>{{$rs->user->name}}</td>
                                         <td>{{$rs->subject}}</td>
                                         <td>{{$rs->comment}}</td>
                                         <td>{{$rs->rate}}</td>
                                         <td>{{$rs->status}}</td>
                                         <td> <a class="btn btn-success btn-rounded " href="{{route('admin.comment.show',['id'=>$rs->id])}}"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                 Show
                                             </a>
                                         </td>
                                         <td><a class="btn btn-danger btn-rounded " href="{{route('admin.comment.delete',['id'=>$rs->id])}}"
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

