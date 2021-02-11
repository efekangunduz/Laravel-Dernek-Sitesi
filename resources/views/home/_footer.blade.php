@php
    $setting= \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer-area section-padding-100-0 bg-img foo-bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-1.jpg);">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="d-flex flex-wrap mb-100">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                            </div>
                            <div class="footer-social-info">
                                @if( $setting->facebook != null)<a target="_blank" href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>@endif
                                @if( $setting->twitter != null)<a target="_blank" href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>@endif
                                @if( $setting->instagram != null)<a target="_blank" href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a>@endif
                                @if( $setting->youtube != null)<a target="_blank" href="{{$setting->youtube}}"><i class="fa fa-youtube"></i></a>@endif
                            </div>
                        </div>
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{ $setting->company }}
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact Us</h6>
                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Address:</p>
                            <span>{{ $setting->address }}</span>
                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Phone:</p>
                            <span>{{$setting->phone}}</span>
                            <p><br>Fax:</p>
                            <span><br>{{$setting->fax}}</span>

                        </div>

                        <!-- Single Contact Area -->
                        <div class="single-contact-area mb-30">
                            <p>Email:</p>
                            <span>{{$setting->email}}</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Usefull Links</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                @guest
                                <li><a href="{{route('admin_login')}}">Login</a></li>
                                <li><a href="/register">Register</a></li>
                                @endguest
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>İYİLİKTEN HABERİNİZ OLSUN</h6>
                        </div>
                        <p>E-Posta bültenimize abone olarak iyilik serüvenimizin mutlu anlarından haberdar olabilirsiniz.</p>
                        <a href="#" class="btn faith-btn mt-70">Sunday Workship: 10:30 AM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('assets')}}/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="{{asset('assets')}}/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{asset('assets')}}/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="{{asset('assets')}}/js/plugins/plugins.js"></script>
<script src="{{asset('assets')}}/js/plugins/audioplayer.js"></script>
<!-- Active js -->
<script src="{{asset('assets')}}/js/active.js"></script>
