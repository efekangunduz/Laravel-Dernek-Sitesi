
    <!-- Navbar Area -->
    <div class="faith-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="faithNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{route('home')}}"><img src="{{asset('assets')}}/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        @php
                            $parentCategories = \App\Http\Controllers\HomeController::categorylist()
                        @endphp
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="cn-dropdown-item has-down"><div>
                                        <span class="classy-menu">Categories</span>
                                        <ul class="dropdown">
                                            @foreach($parentCategories as $rs)
                                                <li style="font-size: 10px" class="has-down">
                                                    <a>{{$rs->title}}</a>

                                                        <div class="row">
                                                        @if(count($rs->children))
                                                            @include('home.categorytree', ['children'=>$rs->children])
                                                        @endif
                                                        </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('admin_login')}}" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true">
                                        <i class="material-icons">Hesap</i>
                                        <p class="d-lg-none d-md-block">
                                            Account
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        @auth
                                            <a class="dropdown-item" href="{{route('myprofile')}}">Profile</a>
                                            <a class="dropdown-item" href="#">Settings</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="d-block">{{Auth::user()->name}}</a>

                                            <a href="{{ route('logout') }}" class="d-block">Logout</a>
                                        @endauth
                                        @guest
                                            <a href="{{route('admin_login')}}">Login</a>
                                            <a href="/register">Join</a>
                                        @endguest
                                    </div>
                                </li>

                               <!-- <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">
                                            Account
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <a class="dropdown-item" href="#">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="d-block">Efekan Gündüz</a>
                                        <a href="#" class="d-block">Logout</a>
                                    </div>
                                </li>
                            </ul>
                            --!>
                                <!-- Search Button -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
