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

    a {
      color: white;
    }

    p i {
      color: white;
    }
  </style>
</head>

<body>


  <div class="container-fluid m-4">
    <div class="row" style="margin-left: 37%;">
      <div class="col">
        <div class="card" style="width: 27rem;">
          <div class="card-header bg-success">
            <h4 class="mt-4">Detail Produk</h4>
          </div>
          <div class="card-body">

            <img src="/img/<?= $barang['sampul'] ?>" class=" card-img-top detail-sampul" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nama Barang: <?= $barang['nama']; ?></h5>
              <p class="card-text"><b>Jenis Barang</b> <?= $barang['jenis']; ?></p>
              <p><b>Harga Jual</b> <?= $barang['harga_jual']; ?></p>
              <p><b>Harga Beli</b> <?= $barang['harga_beli']; ?></p>
              <p><b>Stok Barang</b> <?= $barang['stok']; ?></p>



              <a href="/barang/edit/<?= $barang['slug']; ?>" class="btn btn-success">Edit</a>
              <form action="/barang/ <?= $barang['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class=" btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ?');"> Delete</button>
              </form> <br>
              <!-- <div class="back">


                <a href="/barang">Kembali ke Daftar Barang</a>
              </div> -->
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

  </div>
  </div>
  </div>
  </div>


  <script>
    function previewImg() {

      const sampul = document.querySelector('#sampul')
      const sampulLabel = document.querySelector('.custom-file-label')
      const imgPreview = document.querySelector('.img-preview')

      sampulLabel.textContent = sampul.files[0].name

      const fileSampul = new FileReader()
      fileSampul.readAsDataURL(sampul.files[0])

      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result
      }

    }
  </script>


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




</body>

</html>