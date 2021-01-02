@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
<div class="content">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Categories</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                        <h4 class="card-title mt-0"> Category List</h4>
                        <a href="{{route('admin_category_add')}}" type="submit" class="btn btn-primary">Add Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr></thead>
                                <tbody>
                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->parent_id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Edit</td>
                                        <td><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete? Are you sure?')">Delete</a></td>
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


