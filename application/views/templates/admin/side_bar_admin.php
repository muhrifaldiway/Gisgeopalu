    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-map"></i>
            </div>
            <div class="sidebar-brand-text mx-8">GIS Geowisata Palu</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/geowisata'); ?>">
                <i class="fas fa-fw fa-cube"></i>
                <span class="m-0 font-weight-bold">Dashboard</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('marker'); ?>">
            <i class="fas fa-fw fa-filter"></i>
            <span class="m-0 font-weight-bold">Kordinat</span></a>
          </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('mapping'); ?>">
                <i class="fas fa-fw fa-file"></i>
                <span class="m-0 font-weight-bold">Data Geowisata</span></a>
        </li>
        <!--<hr class="sidebar-divider d-none d-md-block">
        
         <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-book"></i>
            <span  class="m-0 font-weight-bold">Berita</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-warning py-2 collapse-inner rounded">
              <a class="collapse-item" href="">Tranding</a>
              <a class="collapse-item" href="">Geowisata</a>
            </div>
          </div>
        </li>
        -->




        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login/logout'); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span class="m-0 font-weight-bold">Logout</span></a>
        </li>


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
