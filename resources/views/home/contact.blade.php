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
                <!-- Contact Form Area -->
                <div class="col-12 ">
                    <div class="contact-form-area">
                        <h5>Bizimle İletişime Geç</h5>
                        @include('home.message')
                        <form action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <input type="input" class="form-control" name="name" placeholder="Name Surname">
                            <input type="input" class="form-control" name="email" placeholder="E-mail">
                            <input type="input" class="form-control" name="phone" placeholder="Phone">
                            <input type="input" class="form-control" name="subject" placeholder="Subject">
                            <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                            <button class="btn faith-btn" type="submit">Contact Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
