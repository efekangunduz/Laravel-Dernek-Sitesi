<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="faith-blog-sidebar-area">

        <!-- Widget -->
                @auth
                <div class="blog-widget-area">
                    <h4>Panel</h4>
                        <ul>
                            <li><a href="{{route('myprofile')}}">Profilim</a></li>
                            @php
                                $userRoles= Auth::user()->roles->pluck('name');
                            @endphp
                            @if($userRoles->contains('admin'))
                            <li><a href="{{route('admin_home')}}">AdminProfilim</a></li>
                            @endif
                            @if($userRoles->contains('admin')or($userRoles)->contains('duyuru'))
                            <li><a href="{{route('user_duyurus')}}">Duyurularım</a></li>
                            @endif
                            <li><a href="#">Mesajlarım</a></li>
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        </ul>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>

