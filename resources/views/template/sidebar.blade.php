<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('images/cartoon-logo.png') }}" alt="Museum Logo" class="brand-image img-circle elevation-3" style="opacity: .5">
      <span class="brand-text font-weight-light">Museum</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Form Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('petugas.index')}}" class="nav-link">
                  <p><i class="fas fa-user"></i> Form Petugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('jadwal.index')}}" class="nav-link">
                  <p><i class="fas fa-calendar-alt"></i> Jadwal Museum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tiket.index')}}" class="nav-link">
                  <p><i class="fas fa-ticket-alt"></i> Kategori Tiket Museum</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-mon"></i>
              <p>
                Form Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('transaksi.index')}}" class="nav-link">
                  <p><i class="fas fa-users"></i> Transaksi Pengunjung</p>
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