@extends('layouts.home')

@section('title',$data->title)
@section('description', $data->description)
@section('keywords', $data->keywords)

@section('content')
<div class="container">
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}>{{$data->title}}</li>
    </ul>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="single-sermons style-3">
                <div class="sermons-content d-flex">
                    <!-- Sermons Thumbnail -->

                    <div class="sermons-thumbnail bg-img" style=" background-image: url({{Storage::url($data->image)}});"></div>
                    <!-- Sermons Content -->
                    <div class="sermons-text">
                        <a href="#">
                            <h6>{{$data->title}}</h6>
                        </a>
                        <p class="date">{{$data->created_at}}</p>
                        <p class="text">{!! $data->detail!!}</p>

                        <!-- Audio Player -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
