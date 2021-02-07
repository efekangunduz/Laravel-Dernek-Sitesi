@extends('layouts.home')

@section('title','Contact Us -' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
<div class="container">
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Contact Us</li>
    </ul>
</div>

<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                {!! $setting->contact !!}
            </div>
            <div class="col-md-4">
                <h5>İletişim Formu</h5>
            </div>
        </div>
    </div>
</div>
@endsection
