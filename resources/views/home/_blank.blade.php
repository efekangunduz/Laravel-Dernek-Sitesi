@extends('layouts.home')

@section('title',$data->title)
@section('description', $data->description)
@section('keywords', $data->keywords)

@section('content')
<div class="container">
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Blank</li>
    </ul>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            içerik alanı
        </div>
    </div>
</div>
@endsection
