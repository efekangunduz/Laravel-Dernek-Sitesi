
    <!-- Navbar Area -->
    <div class="faith-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="faithNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="{{asset('assets')}}/img/core-img/logo.png" alt=""></a>

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
                                <li><a href="index.html">Home</a></li>
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
                                <li><a href="ministries.html">Ministries</a></li>
                                <li><a href="sermons.html">Sermons</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Donate Button -->
                            <div class="donate-btn">
                                <a href="#">Send Donations</a>
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
