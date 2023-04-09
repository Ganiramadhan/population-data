<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Data Barang FunTechnology</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->

  <style>
    img {
      width: 100px;
    }
  </style>
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

            <li>
            <li><a href="/pages"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li> <a href="/customer"><i class="fa fa-user"></i> <span> Data Customer</span></a></li>
            <li><a class="nav-link" href="/barang"><i class="fas fa-box"></i> <span>Data Barang</span></a></li>
            <li><a class="nav-link" href="/supplier"><i class="fas fa-store"></i> <span>Data Supplier</span></a></li>
            <li><a class="nav-link" href="/transaksi"><i class="fas fa-book"></i> <span>Data Transaksi</span></a></li>
            <li><a class="nav-link" href="/logout"><i class="fas fa-sign"></i> <span>Logout</span></a></li>

        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Supplier</h1>

          </div>

          <div class="section-body">
            <a href="/supplier/create" class="btn btn-success mt-4"> Tambah Data </a> <br> <br>
            <?php
            if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
              </div>
            <?php endif; ?>


            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">
                      <tr>
                        <th>#</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Action</th>
                      </tr>
                      <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($supplier as $row) : ?>
                          <tr>
                            <th scope="row"><?= $i++; ?> </th>
                            <td> <?= $row['nama'] ?></td>
                            <td> <?= $row['alamat'] ?></td>
                            <td> <?= $row['nomor_telp'] ?></td>
                            <td>
                              <a href="/supplier/ <?= $row['slug']; ?>" class="btn btn-primary">Detail</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>

                    </table>
                  </div>
                </div>

              </div>
            </div>
            <footer class="main-footer">
              <div class="footer-left">
                Created With &copy;Love <div class="bullet"></div> By <a href="https://nauval.in/">Fun Teccology</a>
              </div>
              <div class="footer-right">

              </div>
            </footer>
          </div>
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