<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link" style="border-bottom:none">
        <span class=""></span>
        <span class="brand-text font-weight-light"
            style="color: black; font-family: roboto; font-weight:bold; color: green; font-style:italic; margin-left: 35px">
            <i class="fas fa-cogs fa-sm fa-fw rotate" style="font-size: 16px; color:green"></i>
            Administrator <i class="fas fa-cogs fa-sm fa-fw rotate" style="font-size: 16px; color:green"></i>
        </span>
    </a>

    <style>
        .hover-color:hover {
            background-color: green !important;
            color: white !important;
        }

        .hover-color:hover i,
        .hover-color:hover p {
            color: white !important;
        }

    </style>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border: none">
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2" style="min-height: 130vh;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li
                    class="nav-item has-treeview
                        {{ Request::is('administrator/add/pdf/resource') ? 'menu-open' : '' }}
                        {{ Request::is('administrator/manage/pdf/resource') ? 'menu-open' : '' }}
                        {{ Request::is('administrator/edit/pdf/resource/*') ? 'menu-open' : '' }}
                    ">
                    <a href="#" class="nav-link hover-color">
                        <i class="nav-icon fas fa-user-astronaut" style="color: green"></i>
                        <p>
                            PDF Resource
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add.pdf.resource') }}"
                                class="nav-link hover-color @if (request()->path() == 'administrator/add/pdf/resource') bg-success @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add PDF Resource</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage.pdf.resource') }}"
                                class="nav-link hover-color @if (request()->path() == 'administrator/manage/pdf/resource') bg-success @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage PDF Resource</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview
                        {{ Request::is('administrator/add/snippet/resource') ? 'menu-open' : '' }}
                        {{ Request::is('administrator/manage/snippet/resource') ? 'menu-open' : '' }}
                        {{ Request::is('administrator/edit/snippet/resource/*') ? 'menu-open' : '' }}
                    ">
                    <a href="#" class="nav-link hover-color">
                        <i class="nav-icon fas fa-user-astronaut" style="color: green"></i>
                        <p>
                            HTML Snippet Resource
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add.snippet.resource') }}"
                                class="nav-link hover-color @if (request()->path() == 'administrator/add/snippet/resource') bg-success @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add HTML Snippet Resource</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage.snippet.resource') }}"
                                class="nav-link hover-color @if (request()->path() == 'administrator/manage/snippet/resource') bg-success @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage HTML Snippet Resource</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item has-treeview
                        {{ Request::is('administrator/add/link/resource') ? 'menu-open' : '' }}
                        {{ Request::is('administrator/manage/link/resource') ? 'menu-open' : '' }}
                        {{ Request::is('administrator/edit/link/resource/*') ? 'menu-open' : '' }}
                    ">
                    <a href="#" class="nav-link hover-color">
                        <i class="nav-icon fas fa-user-astronaut" style="color: green"></i>
                        <p>
                            Link Resource
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add.link.resource') }}"
                                class="nav-link hover-color @if (request()->path() == 'administrator/add/link/resource') bg-success @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Link Resource</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage.link.resource') }}"
                                class="nav-link hover-color @if (request()->path() == 'admin/manage/link/resource') bg-success @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Link Resource</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Main Sidebar Container -->
