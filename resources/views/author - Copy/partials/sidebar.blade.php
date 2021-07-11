<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('author.dashboard') }}" class="brand-link">
        <img src="{{asset('backend_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Quick Access</li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('author.sent-message.index') }}" class="nav-link {{Request::is('author/sent-message*') ? 'active':''}}">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>Sent Message</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('author.recieve-message.index') }}" class="nav-link {{Request::is('author/recieve-message*') ? 'active':''}}">
                        <i class="nav-icon far fa-comments"></i>
                        <p>Recieved Message</p>
                    </a>
                </li>
                <li class="nav-header">Profile</li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('author.basic-info.index') }}" class="nav-link {{Request::is('author/basic-info*') ? 'active':''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Basic Information</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('author.personal-info.index') }}" class="nav-link {{Request::is('author/personal-info*') ? 'active':''}}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Personal Information</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('author.images.index') }}" class="nav-link {{Request::is('admin/images*') ? 'active':''}}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Set Images</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>