<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-video"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Movie by Jodi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php $halaman = $this->uri->segment(1) ?>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo ($halaman == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($halaman == 'movie') ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('movie') ?>">
          <i class="fas fa-fw fa-video"></i>
          <span>Movie</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->
