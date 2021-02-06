<!-- ##### Search Wrapper Start ##### -->
<div class="search-wrapper d-flex align-items-center justify-content-center bg-img foo-bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-2.jpg);">
    <div class="close--icon">
        <i class="fa fa-times"></i>
    </div>
    <!-- Logo -->
    <a href="{{route('home')}}" class="search-logo"><img src="({{asset('assets')}}/img/core-img/logo2.png" alt=""></a>
    <!-- Search Form -->
    <div class="search-form">
        <form action="#" method="get">
            <input type="search" name="search" id="search" placeholder="Enter Your Keywords">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <!-- Copwrite Text -->
    <div class="copywrite-text">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{$setting->company}}
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
</div>
<!-- ##### Search Wrapper End ##### -->

<!-- ##### Preloader ##### -->
<div id="preloader">
    <div class="circle">
        <img src="({{asset('assets')}}/img/core-img/church.png" alt="">
    </div>
</div>
