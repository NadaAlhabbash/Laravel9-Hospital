
@extends('layouts.adminwindow')

@section('title', 'User Detail :'.$data->title)


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

                             <h4 class="card-title">User Data Detail</h4>
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
                                         <th> Name </th>
                                         <td> {{$data->name}} </td>
                                     </tr>
                                     <tr>
                                         <th> Email </th>
                                         <td> {{$data->email}} </td>
                                     </tr>
                                     <tr >
                                         <th> Roles </th>
                                         <td>
                                             @foreach($data->roles as $role)
                                                 {{$role->name}}
                                                 <a class="btn btn-danger btn-rounded " href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                                    onclick="return confirm('Deleting !! Are you sure?')">[x]</a>
                                             @endforeach
                                         </td>
                                     </tr>
                                     <tr >
{{--                                     <tr >--}}
{{--                                         <th> Created Date </th>--}}
{{--                                         <td> {{$data->created_at}} </td>--}}
{{--                                     </tr>--}}
{{--                                     <tr >--}}
{{--                                         <th> Updated Date </th>--}}
{{--                                         <td> {{$data->updated_at}} </td>--}}
{{--                                     </tr>--}}
                                     <tr >
                                         <th> Add Role to User </th>
                                         <td>
                                             <form class="forms-sample" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" >
                                                 @csrf
                                                 <select name="role_id">
                                                     @foreach($roles as $role)
                                                         {{$role->name}}
                                                     @endforeach
                                                     <option value="{{$role->id}}">{{$role->name}}</option>
                                                 </select>
                                           <div class="card-footer">
                                               <button type="submit" class="btn btn-primary me-2">Add Role</button>
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

