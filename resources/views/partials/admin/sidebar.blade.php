<!-- Sidenav -->
<nav class="navbar border-l border-gray-300 border-solid mb-0 navbar-vertical fixed-left navbar-expand-md navbar-light bg-white"
     id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="text-xl pt-0" href="/admin/dashboard">
            دكان
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <a class="nav-link dropdown-item" href="/admin/dashboard">
                        <i class="ni ni-chart-bar-32 text-primary"></i>
                        @lang('admin.pages.Dashboard')
                    </a>
                    <a class="nav-link dropdown-item" href="/admin/categories">
                        <i class="ni ni-tv-2 text-primary"></i>
                        @lang('admin.pages.Categories')
                    </a>
                    <a class="nav-link dropdown-item" href="/admin/collections">
                        <i class="ni ni-collection text-green"></i>
                        @lang('admin.pages.Collections')
                    </a>
                    <a class="nav-link dropdown-item" href="/admin/attributes">
                        <i class="ni ni-bullet-list-67 text-primary"></i>
                        @lang('admin.pages.Attributes')
                    </a>
                    <a class="nav-link dropdown-item" href="/admin/products">
                        <i class="ni ni-shop text-yellow"></i>
                        @lang('admin.pages.Products')
                    </a>
                    <a class="nav-link dropdown-item" href="/admin/orders">
                        <i class="ni ni-delivery-fast text-orange"></i>
                        @lang('admin.pages.Orders')
                    </a>
                    <a class="nav-link dropdown-item" href="/admin/pages">
                        <i class="ni ni-settings-gear-65   text-pink"></i>
                        @lang('admin.pages.Settings')
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>تسجيل خروج</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">

                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">
                        <i class="ni ni-chart-bar-32 text-primary"></i>
                        @lang('admin.pages.Dashboard')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/categories">
                        <i class="ni ni-tv-2 text-primary"></i>
                        @lang('admin.pages.Categories')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/collections">
                        <i class="ni ni-collection text-green"></i>
                        @lang('admin.pages.Collections')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/attributes">
                        <i class="ni ni-bullet-list-67 text-primary"></i>
                        @lang('admin.pages.Attributes')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/products">
                        <i class="ni ni-shop text-yellow"></i>
                        @lang('admin.pages.Products')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/orders">
                        <i class="ni ni-delivery-fast text-orange"></i>
                        @lang('admin.pages.Orders')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/pages">
                        <i class="ni ni-settings-gear-65   text-pink"></i>
                        @lang('admin.pages.Settings')
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>