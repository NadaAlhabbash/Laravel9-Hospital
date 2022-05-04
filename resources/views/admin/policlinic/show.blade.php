@extends('layouts.adminbase')

@section('title', 'Show Policlinic :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Show Policlinic : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.policlinic.index')}}">Policlinic</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">

                         <div class="card-body">

                             <h4 class="card-title">Details</h4>
                             <p class="card-description ">
                                 <a class="text-small text-success" href="{{route('admin.policlinic.edit',['id'=>$data->id])}}">Edit Policlinic</a>
                                 <a class="text-small text-info" style="padding-left:10px " href="{{route('admin.policlinic.create')}}">Add Policlinic</a>
                                 <a class="text-danger text-small" style="padding-left:10px " href="{{route('admin.policlinic.delete',['id'=>$data->id])}}"
                                    onclick="return confirm('Deleting !! Are you sure?')">Delete</a>

                             </p>
                             <div >
                                 <table class="table table-bordered table-contextual">
                                     <tbody >
                                     <tr style="width: 100px" >
                                         <th style="width: 200px"> ID </th>
                                         <td> {{$data->id}} </td>
                                     </tr>
                                     <tr >
                                         <th> Category </th>
                                         <td> {{$data->category_id}} </td>
                                     </tr>
                                     <tr >
                                         <th> Title </th>
                                         <td> {{$data->title}} </td>
                                     </tr>
                                     <tr >
                                         <th> Keywords </th>
                                         <td> {{$data->keywords}} </td>
                                     </tr>
                                     <tr>
                                         <th> Description </th>
                                         <td> {{$data->description}} </td>
                                     </tr>
                                     <tr >
                                         <th> Detail </th>
                                         <td> {{$data->detail}} </td>
                                     </tr>
                                     <tr >
                                         <th> Specialization </th>
                                         <td> {{$data->specialization}} </td>
                                     </tr>
                                     <tr >
                                         <th> Location </th>
                                         <td> {{$data->location}} </td>
                                     </tr>
                                     <tr >
                                         <th> Image </th>
                                         <td>
                                             @if ($data->image)
                                                 <img src="{{Storage::url($data->image)}}" style="height: 100px" >
                                             @endif
                                         </td>
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
                                         <th> {{$data->updated_at}} </th>
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

