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



  <div class="container-fluid m-4">
    <div class="row" style="margin-left: 32%;">
      <div class="col-8">
        <div class="card" style="width: 38rem;">
          <div class="card-header bg-success">
            <h4 class="mt-4 ml-2"> Tambah Data Barang</h4>
          </div>
          <div class="card-body">
            <form style="width:700px" class="mt-4" action="/barang/save" method="post" enctype="multipart/form-data">
              <div class="form-group row ">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="nama" class="form-control" id="nama" name="nama">
                </div>
              </div>

              <div class="form-group row ">
                <label for="jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="jenis" name="jenis">
                </div>
              </div>

              <div class="form-group row ">
                <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="harga_beli" name="harga_beli">
                </div>
              </div>
              <div class="form-group row ">
                <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="harga_jual" name="harga_jual">
                </div>
              </div>
              <div class="form-group row ">
                <label for="stok" class="col-sm-2 col-form-label">Stok Barang</label>
                <div class="col-sm-6">
                  <input type="number" class="form-control" id="stok" name="stok">
                </div>
              </div>
              <div class="form-group row ">
                <label for="stok" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-2">
                  <img src="/img/default.png" class="img-thumbnail img-preview ">
                </div>

              </div>
              <div class="col-sm-6" style="margin-left: 100px;">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                  <label class="custom-file-label" for="sampul">Pilih Gambar</label>

                </div>
              </div>

              <button type="submit" class="btn btn-success mt-2" style="margin-left: 115px;">Simpan</button>
            </form>
          </div> <br>
          <div class="card-footer bg-success">
            <center>

              <p><i>@Copyright 2023 - FunTechnology </i></p>
            </center>
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