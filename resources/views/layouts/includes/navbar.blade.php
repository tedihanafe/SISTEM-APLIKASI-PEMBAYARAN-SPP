<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fad fa-bars"></i></a></li>
        </ul>
    </form>

    <ul class="navbar-nav navbar-right ml-auto">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img src="{{ asset('user.png') }}" alt="Logo Sekolah">
                <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                <a href="#" class="dropdown-item has-icon">
                    <i class="fad fa-user"></i> Profil
                </a>
                <a href="#" class="dropdown-item has-icon">
                    <i class="fad fa-bolt"></i> Aktifitas
                </a>
                <a href="{{ route('setting.index') }}" class="dropdown-item has-icon">
                    <i class="fad fa-cog"></i> Pengaturan
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout').submit();">
                    <i class="fad fa-sign-out-alt"></i> Logout
                </a>
                <form action="{{ route('logout') }}" method="post" id="logout" style="display: none;">
                    @csrf
                    @method('post')
                </form>
            </div>
        </li>
    </ul>
</nav>
