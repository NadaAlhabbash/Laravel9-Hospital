
@extends('layouts.adminwindow')

@section('title', 'Show Message :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Show Message : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{route('admin.message.index')}}">Message</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="{{route('admin.index')}}">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">

                         <div class="card-body">

                             <h4 class="card-title">Detail Message</h4>
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
                                         <td> {{$data->policlinic->title}} </td>
                                     </tr>

                                     <tr >
                                         <th> Name </th>
                                         <td> {{$data->user->name}} </td>
                                     </tr>

                                     <tr >
                                         <th> Subject </th>
                                         <td> {!! $data->subject !!} </td>
                                     </tr>
                                     <tr >
                                         <th> Comment </th>
                                         <td> {{$data->comment}} </td>
                                     </tr>

                                     <tr >
                                         <th> Rate </th>
                                         <td> {{$data->rate}} </td>
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
                                             <form class="forms-sample" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post" >
                                                 @csrf
                                                 <select name="status">
                                                     <option selected>{{$data->status}}</option>
                                                     <option>True</option>
                                                     <option>False</option>
                                                 </select>
                                                 <div class="card-footer">
                                                     <button type="submit" class="btn btn-primary me-2">Update Comment</button>
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

