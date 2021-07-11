<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" target="_blank" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('contact_us') }}" target="_blank" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">
                    {{ \App\Models\PrivateMessages::where('to_id', Auth::user()->id )->where('opened', 0)->count() }}
                </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="_dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image" width="30" style="margin: 5px 20px 0px 10px;">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                     <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" width="100" class="img-circle" alt="User Image">
                    <p>
                        Admin
                        <small>Member since Nov. 2018</small>
                    </p>
                </span>
                <div class="dropdown-divider"></div>
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-start" style="width: 50%">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="d-flex justify-content-end" style="width: 50%">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="_display: none;">
                                @csrf
                                <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<div class="content-wrapper">
    <div class="content-header  pb-1 bt-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
