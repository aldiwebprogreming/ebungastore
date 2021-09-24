<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Seller Ebunga</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-BggmMsnPGVAR9waz"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets_seller/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets_seller/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper" style="">
      <div class="navbar-bg"  style="background-color: #A633FF;"></div>
      <nav class="navbar navbar-expand-lg main-navbar"  style="background-color:#A633FF;">
        <form class="form-inline mr-auto">
          
        </form>
        <ul class="navbar-nav navbar-right" style="background-color: #A633FF;">
        
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url() ?>assets_admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $this->session->nama_seller ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('login_user/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('dashboard/home') ?>">Seller ebunga</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="">St</a>
          </div>
          <ul class="sidebar-menu">

              <li class="menu-header">Home</li>
                <li class=""><a class="nav-link" href="<?= base_url('seller/dashboard') ?>"><i class="fas fa-fire"></i> <span>Home</span></a></li>
              </li>

              

              <li class="menu-header">Produk</li>
                <li class=""><a class="nav-link" href="<?= base_url('seller/upload-produk') ?>"><i class="fas fa-plus"></i> <span>Tambah Produk</span></a></li>
              </li>


              <li class=""><a class="nav-link" href="<?= base_url('seller/data-produk') ?>"><i class="fas fa-list"></i> <span>Data Produk</span></a></li>
              </li>

               <li class="menu-header">Order</li>
                <li class=""><a class="nav-link" href="<?= base_url('seller/data-order') ?>"><i class="fas fa-shopping-cart"></i> <span>Data Order</span></a></li>
              </li>




             <li class="menu-header">Seting</li>

              <li class=""><a class="nav-link" href="<?= base_url('seller/setzona') ?>"><i class="fas fa-users"></i> <span>Seting Zona</span></a></li>
              </li>

             <!--  <li class="menu-header">Bonus</li>
                <li class=""><a class="nav-link" href="<?= base_url('ptberkah/bonus') ?>"><i class="fas fa-credit-card"></i> <span>Bonus</span></a></li>
              </li> -->
<!-- 
               <li class="menu-header">Paket Anda</li>
                <li class=""><a class="nav-link" href="<?= base_url('ptberkah/paket') ?>"><i class="fas fa-credit-card"></i> <span>Paket Anda</span></a></li>

                <li class=""><a class="nav-link" href="<?= base_url('ptberkah/invoice') ?>"><i class="fas fa-receipt"></i> <span>Invocie</span></a></li>
              </li> -->

               <li class="menu-header">Profil</li>
                <li class=""><a class="nav-link" href="<?= base_url('seller/profil') ?>"><i class="fas fa-user"></i> <span>Profil</span></a></li>
              </li>


              <!-- <li class="active"><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> -->




              
            </ul>

           
        </aside>
      </div>
