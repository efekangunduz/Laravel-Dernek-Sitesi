<!-- Stylesheet -->
<link rel="stylesheet" href="{{asset('assets')}}/style.css">
<div class="content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit User Role</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Role</li>
                            @include('home.message')
                        </ol>
                    </div>
                </div><!--/.container-fluid-->
            </div>
        </section>
<!-- Main Content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>

            </div>
            <div class="card-body">
                    <!-- form start -->

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th><td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th><td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        <table role="form">
                                            @foreach($data->roles as $row)
                                                <tr>
                                                    <td>{{$row->name}}</td>
                                                    <td>
                                                        <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                            </tr>

                                <tr>
                                    <th>Add Role</th>
                                    <td>
                                    <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <select name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-outline-primary">Add Role</button>
                                    </form>
                                    </td>
                                </tr>
                            </table>


                        </div>

                        <!-- /.card-body -->

                    </form>



            <!--/.card-body -->
                <div class="card-footer">

                </div>
                <!--/.card-footer-->

                <!--/.card-->

        </section>
        <!--/.content -->
    </div>
    <!-- /.content-wrapper-->


</div>

