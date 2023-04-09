<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title><?= $tittle; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/components.css">
</head>

<body>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">


      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>

      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">FunTechnology</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">FT</a>
          </div>
          <ul class="sidebar-menu">
            <hr>
            <li><a href="/pages"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="/customer"><i class="fas fa-user"></i><span>Data Customer</span></a></li>
            <li><a class="nav-link" href="/barang"><i class="fas fa-box"></i> <span>Data Barang</span></a></li>
            <li><a class="nav-link" href="/supplier"><i class="fas fa-store"></i> <span>Data Supplier</span></a></li>
            <li><a class="nav-link" href="/transaksi"><i class="fas fa-book"></i> <span>Data Transaksi</span></a></li>
            <li><a class="nav-link" href="/logout"><i class="fas fa-sign"></i> <span>Logout</span></a></li>
        </aside>
      </div>


      <div class="main-content">

        <?= $this->renderSection('content'); ?>

      </div>



      <!-- General JS Scripts -->
      <script src="<?= base_url() ?>assets/modules/jquery.min.js"></script>
      <script src="<?= base_url() ?>assets/modules/popper.js"></script>
      <script src="<?= base_url() ?>assets/modules/tooltip.js"></script>
      <script src="<?= base_url() ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?= base_url() ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
      <script src="<?= base_url() ?>assets/modules/moment.min.js"></script>
      <script src="<?= base_url() ?>assets/js/stisla.js"></script>

      <!-- JS Libraies -->
      <script src="<?= base_url() ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

      <!-- Page Specific JS File -->
      <script src="<?= base_url() ?>assets/js/page/components-table.js"></script>

      <!-- Template JS File -->
      <script src="<?= base_url() ?>assets/js/scripts.js"></script>
      <script src="<?= base_url() ?>assets/js/custom.js"></script>

</body>

</html>