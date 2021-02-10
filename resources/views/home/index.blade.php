@php
$setting= \App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title',$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')

    @include('home._slider')



    <!-- ##### About Area Start ##### -->
    <section class="faith-about-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content">
                        <img src="{{asset('assets')}}/img/core-img/holy-star.png" alt="">
                        <h2>“İçindeki iyiliğin<br> dışavurumu.”</h2>
                        <h6>{{$setting->description}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Church Activities Area Start ##### -->
    <section class="church-activities-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <img src="{{asset('assets')}}/img/iyilikdernegi.jpg" alt="">
                        <h3>Dernek Aktiviteleri</h3>
                        <p>*Türkiye ve Dünya'nın bir çok bölgesinde savaşlardan veya doğal afetlerden etkilenen topluluklara ve ihtiyaç sahibi insanlara ulaşmak için sivil toplum faaliyetleri yürütüyoruz.
                        <br>
                            *Amacımız mümkün olan en çok cana yetişmek, onların yaşam haklarını savunmak, tedavi ve yemek ihtiyaçlarını karşılamak. Sizi de ailemize bekleriz, gelin hep beraber onların sesi olalım.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <!-- Upcoming Events -->
                    <div class="upcoming-events mb-100">
                        <!-- Headline -->
                        <div class="headline">
                            <h5>Son Eklenenler</h5>
                        </div>
                    @foreach($yeni as $rs)
                        <!-- Single Upcoming Events -->
                            <div class="single-sermons">
                                <div class="sermons-content d-flex align-items-center">
                                    <!-- Sermons Thumbnail -->
                                    <div class="sermons-thumbnail bg-img" style="background-image: url({{Storage::url($rs->image)}});"></div>
                                    <!-- Sermons Content -->
                                    <div class="sermons-text">
                                        <a href="#">
                                            <h6>{{$rs->title}}</h6>
                                        </a>
                                        <p>{{$rs->description}}</p>
                                        <p class="date">{{$rs->created_at}}</p>
                                    </div>
                                </div>

                                <div class="all-events-btn">
                                    <a href="{{route('duyuru',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn faith-btn active">Detaylar İçin Tıklayın</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Latest Sermons -->
                    <div class="latest-sermons mb-100">
                        <div class="headline">
                            <h5>Random Events</h5>
                        </div>
                        @foreach($randomevent as $rs)
                        <!-- Single Sermons Area -->
                        <div class="single-sermons">
                            <div class="sermons-content d-flex align-items-center">
                                <!-- Sermons Thumbnail -->
                                <div class="sermons-thumbnail bg-img" style="background-image: url({{Storage::url($rs->image)}});"></div>
                                <!-- Sermons Content -->
                                <div class="sermons-text">
                                    <a href="#">
                                        <h6>{{$rs->title}}</h6>
                                    </a>
                                    <p>{{$rs->description}}</p>
                                    <p class="date">{{$rs->created_at}}</p>
                                </div>
                            </div>
                            <div class="sermons-audio-player d-flex align-items-center">
                                <audio preload="auto" controls>
                                    <source src="{{asset('assets')}}/audio/dummy-audio.mp3">
                                </audio>
                                <div class="all-events-btn">
                                    <a href="{{route('duyuru',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn faith-btn active">Detaylar İçin Tıklayın</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Church Activities Area End ##### -->

    <!-- ##### Donate Area Start ##### -->
    <section class="donate-our-charities section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-3.jpg);">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white text-center mx-auto">
                        <img src="{{asset('assets')}}/img/iyilikdernegi.jpg" alt="">
                        <h3>Bağış Yapmak İçin</h3>
                        <p>Buluşmalara gönüllü katılmaya vaktiniz yoksa bağışlarınızla da destek olabilirsiniz.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="donate-slides owl-carousel">
                    @foreach($donate as $rs)
                        <!-- Single Donate Slide Area -->
                        <div class="single-donate-slide">
                            <img style=" width: 286px; height: 513px" src="{{Storage::url($rs->image)}}" alt="">
                            <!-- Donate Content -->
                            <div class="donate-content">
                                <h4>{{$rs->title}}</h4>
                            </div>
                            <!-- Donate Button -->
                            <div class="donate-btn text-center">
                                <a href="#" class="btn faith-btn active">Donate</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Donate Area End ##### -->

@endsection

