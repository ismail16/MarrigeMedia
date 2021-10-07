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
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.message.index') }}">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">
                    {{ \App\Models\Contact::where('status', 0)->count() }}
                </span>
            </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.user-info.index') }}">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">
                    {{ \App\User::where('activation', 0)->where('role_id', 2)->count() }}
                </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="_dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <img src="{{asset('images/default.png')}}" class="user-image" alt="User Image" width="30" style="margin: 5px 20px 0px 10px;">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                     <img src="{{asset('images/default.png')}}" width="100" class="img-circle" alt="User Image">
                    <p>
                        Admin
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
    <div class="content-header pb-2">
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
