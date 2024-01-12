 <!-- Main Sidebar Container -->
 <style>
     [class*=sidebar-dark] .user-panel {
         border-bottom: 1px solid white;
     }

     [class*=sidebar-dark] .brand-link {
         border-bottom: 1px solid white;
     }
 </style>
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #5D2489; color: #fff;">
     <!-- Brand Logo -->
     <a href="<?= base_url() ?>/public/assets/index3.html" class="brand-link d-flex flex-column align-items-center">
         <span class="brand-text font-weight-light"><b style="color: #fff;">REPORT APP</b></span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?= base_url() ?>/public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block" style="color: #fff;">Pebri</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar bg-white" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar bg-white">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item">
                     <a href="<?= base_url() ?>" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-folder"></i>
                         <p>
                             Master
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>master/role" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Role</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>master/user" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>User</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-folder"></i>
                         <p>
                             Order
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>order/index" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <?php if (has_permission('admin') || has_permission('supp')) : ?>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-file-alt"></i>
                             <p>
                                 Laporan
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="<?= base_url() ?>/public/assets/index.html" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Dashboard v1</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 <?php endif; ?>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user-alt"></i>
                         <p>
                             User Profile
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>/public/assets/index.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v1</p>
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