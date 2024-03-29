<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    @if(auth()->check())
                        <p>Welcome, {{ auth()->user()->name }}!</p>
                    @endif
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('logo.form') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Logo
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Properties
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('property.create') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Property</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../index2.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>List Properties</p>
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