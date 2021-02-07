@extends('layouts.home')

@section('title','About Us -' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
<div class="container">
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">About Us</li>
    </ul>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            {!! $setting->aboutus !!}
        </div>
    </div>
</div>
@endsection
