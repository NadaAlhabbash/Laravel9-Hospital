@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <h3>{{$policlinic->title}}</h3>
            <hr>
            <form class="forms-sample" action="{{route('admin.image.store',['pid'=>$policlinic->id])}}" method="post" enctype="multipart/form-data">
                @csrf



                <div class="input-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control text-light " name="title" placeholder="Title">
                    <div class="form-group " >
                        <label for="exampleInputName1">Image</label>
                        <div class="file-upload-info ">
                            <input class="input-group-append" type="file" name="image" >
                        </div>
                    </div>
                    <div class="input-group-append">
                        <input class="input-group-text" type="submit" value="Upload">
                    </div>
                </div>



            </form>

                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Policlinic Image List</h4>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                     <tr>
                                         <th style="width:10px">ID</th>
                                         <th>Title</th>
                                         <th>Image</th>

                                         <th style="width:10px">Delete</th>

                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach($images as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>{{$rs->title}}</td>
                                         <td>
                                             @if ($rs->image)
                                                 <img src="{{Storage::url($rs->image)}}" style="height: 100px" >
                                                 @endif
                                         </td>

                                         <td><a class="btn btn-danger btn-rounded " href="{{route('admin.image.delete',['pid'=>$policlinic->id, 'id'=>$rs->id])}}"
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
@endsection
