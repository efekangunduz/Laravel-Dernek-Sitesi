@extends('layouts.admin')

@section('title', 'Edit Category')
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
                        <h3>Add Category</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
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
                    <h3 class="card-title">Edit Category</h3>

            </div>
            <div class="card-body">
                    <!-- form start -->
                    <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent</label>

                                <select class="form-control select2" name="parent_id" style="width: 100%;">
                                    <option value="0">Main Category</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif >
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>False</option>
                                    <option>True</option>
                                </select>
                            </div>


                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
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
@endsection
