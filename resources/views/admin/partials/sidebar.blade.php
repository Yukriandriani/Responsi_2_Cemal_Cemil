<aside class="main-sidebar sidebar-dark-primary">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users Table</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
