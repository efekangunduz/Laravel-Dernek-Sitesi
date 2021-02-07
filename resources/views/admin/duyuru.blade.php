@extends('layouts.admin')

@section('title', 'Duyuru List')
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
                        <h3>Duyurular</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Duyuru</li>
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
                        <h4 class="card-title mt-0"> Duyuru Listesi</h4>
                        <a href="{{route('admin_duyuru_add')}}" type="submit" class="btn btn-primary">Add Duyuru</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr></thead>
                                <tbody>
                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>
                                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}
                                        </td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->description}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a class="btn btn-primary btn-round" href="{{route('admin_duyuru_edit',['id'=>$rs->id])}}"> Edit</a></td>
                                        <td><a class="btn btn-primary btn-round" href="{{route('admin_duyuru_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete? Are you sure?')">Delete</a></td>
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


