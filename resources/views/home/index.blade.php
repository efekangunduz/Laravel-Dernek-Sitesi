

@extends('layouts.home')

@section('title', 'Laravel Dernek Sitesi')
@section('description','Bağışlarınızla kimsesiz çocuklara umut olun..')
@section('keywords', 'Kimsesiz Çocuklar, Yardım, Umut, Hayat Kurtar, Bağış')

@section('content')



    <!--services start here-->
    <div class="services">
        <div class="container">
            <div class="services-main">
                <div class="col-md-8 services-left">
                    <div class="service-top">
                        <h3> LATEST NEWS</h3>
                        <h4> LOREM  IPSUM DOLOR SIT AMET </h4>
                        <h5>POSTED ON:NOV 2014 </h5>
                        <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="bwn">
                            <a href="#"> READMORE</a>
                        </div>
                    </div>
                    <div class="service-top">
                        <h4> MAECENAS LACUS IPSUM,INTERDUM SED </h4>
                        <h5>POSTED ON: NOV 2014</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <div class="bwn">
                            <a href="#"> READMORE</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 services-right">
                    <img src="{{asset('assets')}}/images/mobile-bg.png">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--/services end here-->
    <!--video-banner start here-->
    <!--pop-up-box-->
    <script type="text/javascript" src="{{asset('assets')}}/js/modernizr.custom.53451.js"></script>
    <link href="{{asset('assets')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('assets')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--pop-up-box-->
    <div class="video">
        <div class="container">
            <div class="video-main">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog5"> <span class="e"> </span> </a>
                <!--video-->
                <div id="small-dialog5" class="mfp-hide">
                    <iframe src="{{asset('assets')}}///player.vimeo.com/video/38584262"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>
            </div>
        </div>
    </div>
    <!--/video-banner end here-->
    <!--top grid start here-->
    <div class="grid">
        <div class="container">
            <div class="row grid-main">
                <div class="grid-top">
                    <div class="col-md-4 grid-column">
                        <img src="{{asset('assets')}}/images/help.png">
                        <h3>HELP US</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="col-md-4 grid-column">
                        <img src="{{asset('assets')}}/images/donate.png">
                        <h3>DONATE</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    </div>
                    <div class="col-md-4 grid-column">
                        <img src="{{asset('assets')}}/images/email.png">
                        <h3>CONTACT US</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="grid-bottom">
                    <div class="col-md-4 grid-column">
                        <img src="{{asset('assets')}}/images/give.png">
                        <h3>GIVE</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="col-md-4 grid-column">
                        <img src="{{asset('assets')}}/images/what.png">
                        <h3>WHAT WE DO</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
                    </div>
                    <div class="col-md-4 grid-column">
                        <img src="{{asset('assets')}}/images/about.png">
                        <h3>ABOUT US</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--/top grid end here-->

@endsection

