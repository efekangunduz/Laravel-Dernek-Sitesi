@extends('layouts.home')


@section('description', "Duyurularım")
@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection

@section('content')


    <div class="container">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Duyuru Edit</li>
        </ul>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    @include('home.usermenu')
                </div>
                <div class="col-md-10">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Duyuru</h3>

                    </div>
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" action="{{route('user_duyuru_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Category</label>

                                    <select class="form-control" name="category_id" style="width: 100%;">

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif >
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" id="title" name="title" value="{{ $data->title }}"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" value="{{ $data->keywords }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" value="{{ $data->description }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea id="detail" name="detail">{{ $data->detail }}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="slug" value="{{ $data->slug }}" class="form-control">
                                </div>
                                <div style=" height: 70px" class= "form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" value="{{$data->image}}" class="form-control">

                                </div>
                                @if ($data->image)
                                    <img src="{{ Storage::url($data->image) }}" height="60" align="center" alt="">
                                @endif
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" style="width: 100%;">
                                        <option selected="selected">{{ $data->status }}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>


                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Duyuru</button>
                            </div>
                        </form>


                </div>
            <!--/.card-->

            </div>
        </div>
    </div>
</div>

@endsection
