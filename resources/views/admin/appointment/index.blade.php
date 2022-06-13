@extends('layouts.adminbase')

@section('title', 'Appointment List')


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
                             <h4 class="card-title">Appointment List</h4>
                             <p class="card-description">

                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th style="width:10px">ID</th>
                                         <th>Policlinic-Id</th>
                                         <th>Name</th>
                                         <th>Date</th>
                                         <th>Time</th>
{{--                                         <th>Doctor</th>--}}
                                         <th>Payment</th>
                                         <th>Status</th>
                                         <th style="width:10px">Show</th>
                                         <th style="width:10px">Delete</th>

                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($data as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>>{{$rs->policlinic_id}}</td>
                                         <td>{{$rs->user->name}}</td>
                                         <td>{{$rs->date}}</td>
                                         <td>{{$rs->time}}</td>
                                         {{-- <td>{{$rs->Doctor}}</td>--}}
                                         <td>{{$rs->payment}}</td>
                                         <td>{{$rs->status}}</td>
                                         <td> <a class="btn btn-success btn-rounded " href="{{route('admin.appointment.show',['id'=>$rs->id])}}"
                                                onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                 Show
                                             </a>
                                         </td>
                                         <td><a class="btn btn-danger btn-rounded " href="{{route('admin.appointment.delete',['id'=>$rs->id])}}"
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

