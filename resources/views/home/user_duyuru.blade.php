@extends('layouts.home')


@section('description', "Duyurularım")

@section('content')


    <div class="container">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Duyuru</li>
        </ul>
    </div>

    <div class="section-content">

            <div class="row">
                <div class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!-- Default box -->
                <div class="col-md-10">
                    <div class="card card-plain">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0"> Duyuru Listesi</h4>
                            <a href="{{route('user_duyuru_add')}}" type="submit" class="btn btn-primary">Add Duyuru</a>
                        @include('home.message')
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
                                        <th>Image</th>
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
                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{ Storage::url($rs->image) }}" style="height: 60px" alt="">
                                                @endif
                                            </td>
                                            <td><a class="btn btn-primary btn-round" href="{{route('user_duyuru_edit',['id'=>$rs->id])}}"> Edit</a></td>
                                            <td><a class="btn btn-primary btn-round" href="{{route('user_duyuru_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete? Are you sure?')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.card-->

        </div>
        </div>
    </div>
@endsection
