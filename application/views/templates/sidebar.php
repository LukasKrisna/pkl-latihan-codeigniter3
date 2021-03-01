<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kemenkominfo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lukas Krisna</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('Dinas')?>" class="nav-link ">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Dinas
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('Barang');?>" class="nav-link ">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Master Aset
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('Ruangan');?>" class="nav-link ">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Ruangan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('Transaksi')?>" class="nav-link ">
              <i class="nav-icon fas fa-coins"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>