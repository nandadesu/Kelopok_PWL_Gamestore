

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">


  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="<?php echo base_url('Home/index') ?>">
          <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Gamestores</div>
        </a>

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          <div class="navbar">
              <ul class="nav navbar-nav navbar-right ">
                <li>
                <?php 
                    $keranjang = ' <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> ' .$this->cart->total_items()
                  ?>
                  <?php echo anchor('Home/detail_keranjang', $keranjang)  ?>
                </li>
              </ul>
            </div>
  <!--
            <div class="topbar-divider d-none d-sm-block"></div>
            <div class="navbar">
              <ul class="nav navbar-nav navbar-right ">
                <li>
                  <a class="nav-link" href="<?php echo base_url('User') ?>">
                  <i class="fas fa-user"></i></a>
                </li>
              </ul>
            </div>
-->
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->

          <ul class="na navbar-nav navbar-right">
          <?php  if($this->session->userdata('username')) { ?>
              <li><div><?php echo $this->session->userdata(' username ') ?></div></li>
              <li><?php echo anchor('auth/logout','<div class="btn btn-sm btn-danger">Logout</div>'); ?></li>

            <?php } else { ?>
              <li><?php echo anchor('auth/logout', ' <div class="btn btn-sm btn-success">Login</div>');?></li>

            <?php  } ?>
          </ul>
        </ul>

      </nav>
      <!-- End of Topbar -->