<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Components &rsaquo; Table &mdash; Stisla</title>

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
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">

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
            <li class="menu-header">Dashboard</li>

            <li>

              <a href="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            </li>

            <li>
              <a href="#"><i class="fas fa-columns"></i> <span> Data Customer</span></a>

            </li>

            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data Barang</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data Supplier</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data Transaksi</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Logout</span></a></li>

        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Table</h2>
            <p class="section-lead">Data Customer</p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-md">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Irwansyah Saputra</td>
                        <td>2017-01-09</td>
                        <td>
                          <div class="badge badge-success">Active</div>
                        </td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                      </tr>

                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
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