@extends('layouts.home')

@section('title',$data->title,"Duyuru Listesi")
@section('description',$data->description)
@section('keywords',$data->keywords)

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset('assets')}}/img/bg-img/bg-8.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="breadcumb-text">
                        <h5>Duyurular</h5>
                        <h2>{{$data->title}}-Duyuru Listesi</h2>
                        <p>{{$data->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
<div class="container">
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}>Duyuru Listesi</li>
    </ul>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            <!-- Single Blog Area -->
            @if($datalist->status=1)
            @foreach($datalist as $rs)
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-100">
                    <div class="blog-thumbnail">
                        <img src="{{Storage::url($rs->image)}}" style="height: 200px" alt="">
                        <div class="post-date">
                            <a href="#" {{$rs->created_at}}</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <a href="#" class="blog-title">{{$rs->title}}</a>
                        <p>{{$rs->description}}</p>
                        <a href="{{route('duyuru',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="readmore-btn">Detaylar İçin Tıklayınız.</a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
</div>
@endsection
