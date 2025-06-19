<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
        <span class="brand-text font-weight-light">Quản lý kho hàng</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="pb-3 mt-3 mb-3 user-panel d-flex">
            
            <div class="info">
                <a href="#" class="d-block">Xin chào, {{Auth('account')->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ request()->is('products*') ? 'menu-open' : '' }}">
                    <a href="/products" class="nav-link {{ request()->is('products*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Quản lý sản phẩm
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('customers*') ? 'menu-open' : '' }}">
                    <a href="/customers" class="nav-link {{ request()->is('customers*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Quản lý khách hàng
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ request()->is('imports*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('imports*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Quản lý nhập hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/imports" class="nav-link {{ request()->is('imports') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hóa đơn nhập hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/imports/onlydelete"
                                class="nav-link {{ request()->is('imports/onlydelete') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hóa đơn bị xóa</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('exports*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('exports*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Quản lý xuất hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/exports" class="nav-link {{ request()->is('exports') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hóa đơn xuất hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/exports/remove"
                                class="nav-link {{ request()->is('exports/onlydelete') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hóa đơn bị xóa</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" {{ request()->is('suppliers*') ? 'menu-open' : '' }}>
                    <a href="/suppliers" class="nav-link {{ request()->is('suppliers*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Quản lý nhà cung cấp
                        </p>
                    </a>

                </li>
                 <li class="nav-item" >
                    <a href="/statistics" class="nav-link ">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                           Thống kê, báo cáo
                        </p>
                    </a>

                </li>

                @auth
                @if(auth()->user()->role === 'admin')
                    <li class="nav-item">
                        <a href="/accounts" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Quản lý người dùng</p>
                        </a>
                    </li>
                @endif
            @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
