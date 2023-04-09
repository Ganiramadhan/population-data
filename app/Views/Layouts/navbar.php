<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $tittle; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark ">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">Fun Technology</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  <?php if ($tittle == 'Home') {
                                  echo 'active';
                                } ?> " aria-current="page" href="/Pages">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if ($tittle == 'supplier') {
                                  echo 'active';
                                } ?> " href="/supplier">Supplier</a>
          <li class="nav-item">
            <a class="nav-link <?php if ($tittle == 'Product') {
                                  echo 'active';
                                } ?> " href="/Barang">Product</a>
          <li class="nav-item">
            <a class="nav-link <?php if ($tittle == 'customer') {
                                  echo 'active';
                                } ?> " href="/customer">Customer</a>
          <li class="nav-item">
            <a class="nav-link <?php if ($tittle == 'Transaksi') {
                                  echo 'active';
                                } ?> " href="/transaksi">Transaksi</a>

            <?php if (logged_in()) : ?>
          <li class="nav-item">
            <a class="nav-link " href="/logout">Logout</a>
          <?php else : ?>
          <li class="nav-item">
            <a class="nav-link " href="/login">Login</a>
          <?php endif; ?>



        </ul>
      </div>
    </div>
  </nav>