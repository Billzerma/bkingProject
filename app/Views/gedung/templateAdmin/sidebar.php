<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
       
        <div class="sidebar-brand-text mx-3">Welcome, Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            
            <span>Informasi Gedung</span></a>
    </li>

    <!-- Nav Item - Edit profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pemesananAdmin'); ?>">
           
            <span>Pemesanan</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Edit Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>