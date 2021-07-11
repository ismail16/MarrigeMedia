<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{asset('backend_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminDashboard</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.user-info.index') }}" class="nav-link {{Request::is('admin/user-info*') ? 'active':''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Brides/Grooms</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.message.index') }}" class="nav-link {{Request::is('admin/message*') ? 'active':''}}">
                        <i class="nav-icon far fa-comments"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li class="">Settings</li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.success-story.index') }}" class="nav-link {{Request::is('admin/success-story*') ? 'active':''}}">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <p>Success Story</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.package-price.index') }}" class="nav-link {{Request::is('admin/package-price*') ? 'active':''}}">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Package Price</p>
                    </a>
                </li>

                
            </ul>
        </nav>
    </div>
</aside>