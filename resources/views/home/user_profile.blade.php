@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <div class="container">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User Profile</li>
        </ul>
    </div>

    <div class="section-content">
        <div class="container">
            <div class="row">
                <!-- aside -->
                <div class="col-12 col-lg-4">
                    @include('home.usermenu')
                </div>
                <!-- /aside -->
                <div class="col-12 col-lg-8">
                    @include('profile.show')

                </div>
            </div>
        </div>
    </div>
@endsection
