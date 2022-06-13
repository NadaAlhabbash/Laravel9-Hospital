
@extends('layouts.adminwindow')

@section('title', 'Show Appointment :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Show Appointment : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.appointment.index')}}">Message</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">

                         <div class="card-body">

                             <h4 class="card-title">Detail Appointment</h4>
                             <p class="card-description ">


                             </p>
                             <div >
                                 <table class="table table-bordered table-contextual">
                                     <tbody >
                                     <tr style="width: 100px" >
                                         <th style="width: 200px"> ID </th>
                                         <td> {{$data->id}} </td>
                                     </tr>

                                     <tr >
                                         <th> Policlinic </th>
                                         <td> {{$data->policlinic_id}} </td>
                                     </tr>

                                     <tr >
                                         <th> User Name </th>
                                         <td> {{$data->user->name}} </td>
                                     </tr>

                                     <tr >
                                         <th> Patient Name </th>
                                         <td> {{$data->name}} </td>
                                     </tr>

                                     <tr >
                                         <th> Date </th>
                                         <td> {{$data->date}} </td>
                                     </tr>
                                     <tr >
                                         <th> Time </th>
                                         <td> {{$data->time}} </td>
                                     </tr>

{{--                                     <tr >--}}
{{--                                         <th> Doctor </th>--}}
{{--                                         <td> {{$data->doctor}} </td>--}}
{{--                                     </tr>--}}

                                     <tr >
                                         <th> Payment </th>
                                         <td> {{$data->payment}} </td>
                                     </tr>

                                     <tr >
                                         <th> IP Number </th>
                                         <td> {{$data->ip}} </td>
                                     </tr>
                                     <tr >
                                         <th> Status </th>
                                         <td> {{$data->status}} </td>
                                     </tr>
                                     <tr >
                                         <th> Created Date </th>
                                         <td> {{$data->created_at}} </td>
                                     </tr>
                                     <tr >
                                         <th> Updated Date </th>
                                         <td> {{$data->updated_at}} </td>
                                     </tr>
                                     <tr >
                                         <th> Admin Note : </th>
                                         <td>
                                             <form class="forms-sample" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post" >
                                                 @csrf
                                                 <select name="status">
                                                     <option selected>{{$data->status}}</option>
                                                     <option>Accepted</option>
                                                     <option>Refused</option>
                                                 </select>
                                                 <div class="card-footer">
                                                     <button type="submit" class="btn btn-primary me-2">Update</button>
                                                 </div>
                                             </form>
                                         </td>
                                     </tr>
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

