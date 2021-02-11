<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('assets')}}/admin/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{route('admin_home')}}" class="simple-text logo-normal">
            HOME
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_category')}}">
                    <i class="material-icons">content_paste</i>
                    Kategori
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin_duyurus') }}" class="nav-link">
                    <p><i class="material-icons">content_paste</i>
                        Duyurular
                    </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_users')}}">
                    <i class="material-icons">content_paste</i>
                    <p>User List</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin_message') }}">
                    <i class="material-icons">library_books</i>
                    <p>Contact Messages</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin_setting') }}">
                    <i class="fa fa-cog"></i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>

