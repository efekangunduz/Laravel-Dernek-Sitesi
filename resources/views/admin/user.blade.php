@extends('layouts.admin')

@section('title', 'User List')
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection
@section('content')
<div class="content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Users</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div><!--/.container-fluid-->
            </div>
        </section>
<!-- Main Content -->
        <section class="content">

            <!-- Default box -->
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0"> User Listesi</h4>
                        <!--<a href="{{route('admin_user_add')}}" type="submit" class="btn btn-primary">Add User</a>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Roles</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr></thead>
                                <tbody>
                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                        @if ($rs->profile_photo_path)
                                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                        @endif
                                        </td>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->address}}</td>
                                        <td> @foreach($rs->roles as $row)
                                        {{$row->name}},
                                            @endforeach
                                            <a href="{{route('admin_user_roles', ['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800, height=600')">
                                                <i class="nav-icon fas fa-plus-circle"></i>
                                            </a>
                                        </td>
                                        <td><a  href="{{route('admin_user_edit',['id'=>$rs->id])}}"> <img src="{{asset('assets/admin/img')}}/edit.png" height="25"></a></td>
                                        <td><a class="btn btn-primary btn-round" href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete? Are you sure?')">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!--/.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!--/.card-footer-->

            </div>
                <!--/.card-->


        <!--/.content -->
    </div>
    <!-- /.content-wrapper-->


@endsection


