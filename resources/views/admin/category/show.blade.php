@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
                 <div class="content-wrapper">
                     <div class="page-header">
                         <h3 class="page-title"> Show Category : {{$data->title}} </h3>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="/admin/category">Category</a></li>

                                 <li class="breadcrumb-item active"  aria-current="page"><a href="/admin">Home</a></li>
                             </ol>
                         </nav>
                     </div>
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Details</h4>
                             <div class="table-responsive">
                                 <table class="table table-bordered table-contextual">
                                     <tbody>
                                     <tr class="table-info">
                                         <td> ID </td>
                                         <td> {{$data->id}} </td>
                                     </tr>
                                     <tr class="table-warning">
                                         <td> Title </td>
                                         <td> {{$data->title}} </td>
                                     </tr>
                                     <tr class="table-danger">
                                         <td> Keywords </td>
                                         <td> {{$data->keywords}} </td>
                                     </tr>
                                     <tr class="table-success">
                                         <td> Description </td>
                                         <td> {{$data->description}} </td>
                                     </tr>
                                     <tr class="table-primary">
                                         <td> Image </td>
                                         <td> {{$data->image}} </td>
                                     </tr>
                                     <tr class="table-secondary">
                                         <td> Status </td>
                                         <td> {{$data->status}} </td>
                                     </tr>
                                     <tr class="table-warning">
                                         <td> Created Date </td>
                                         <td> {{$data->created_at}} </td>
                                     </tr>
                                     <tr class="table-info">
                                         <td> Updated Date </td>
                                         <td> {{$data->updated_at}} </td>
                                     </tr>
                                     </tbody>
                                 </table>

                             </div>
                             <a class="text-danger card-description" style="padding-left:1070px " href="/admin/category/delete/{{$data->id}}"
                                onclick="return confirm('Deleting !! Are you sure?')">Delete</a>

                             <a class="card-description" href="/admin/category/create">Add Category</a>

                         </div>
                     </div>

                 </div>

        </div>
    </div>

@endsection

