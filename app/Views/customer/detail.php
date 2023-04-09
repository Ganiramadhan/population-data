<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title><?= $tittle; ?></title>
  <style>
    h4 {
      color: white;
    }

    p i {
      color: white;
    }
  </style>
</head>

<body>


  <div class="container-fluid  m-4">
    <div class="row" style="margin-left: 35%;">
      <div class="col-8">
        <div class="card" style="width: 30rem;">

          <div class="card-header bg-success">

            <h4 class="mt-4">Tambah Data Customer</h4>
          </div>
          <div class="card-body">


            <h5 class="card-title">Detail Customer</h5>
            <p class="card-text"><b>Nama</b> <?= $customer['nama']; ?></p>
            <p><b>Alamat</b> <?= $customer['alamat']; ?></p>
            <p><b>Nomor Telepon</b> <?= $customer['nomor_telp']; ?></p>

            <br>
            <a href="/customer/edit/<?= $customer['slug']; ?>" class="btn btn-success">Edit</a>
            <form action="/customer/ <?= $customer['id_cust']; ?>" method="post" class="d-inline">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class=" btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ?');"> Delete</button>
            </form>
            <div class="back">
              <a href="/customer">Kembali ke Daftar Barang</a>
            </div>
          </div>
          <div class="card-footer bg-success">
            <center>

              <p><i>@Copyright 2023 - FunTechnology </i></p>
            </center>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




</body>

</html>