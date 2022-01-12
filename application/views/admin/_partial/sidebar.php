<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('adminlcs') ?>">
        <div class="sidebar-brand-icon rotate-15">
          <i class="fas fa-lightbulb"></i>
        </div>
        <div class="sidebar-brand-text mx-3">LCS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('adminlcs') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('control') ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kontrol Lampu</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data LCS
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('dht') ?>">
          <i class="fas fa-fw fa-bullseye"></i>
          <span>Data Sensor</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('lampu') ?>">
          <i class="fas fa-fw fa-lightbulb"></i>
          <span>Data Lampu</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>