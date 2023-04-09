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
    <div class="row" style="margin-left: 30%;">
      <div class="col-8">
        <div class="card" style="width: 38rem;">
          <div class="card-header bg-success">

            <h4 class="mt-4">Tambah Data Customer</h4>
          </div>

          <div class="card-body">
            <form style="width:400px" class="mt-4" action="/customer/save" method="post">

              <div class="form-group row ">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                  <input type="nama" class="form-control" id="nama" name="nama">
                </div>
              </div>

              <div class="form-group row ">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
              </div>

              <div class="form-group row ">
                <label for="nomor_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nomor_telp" name="nomor_telp">
                </div>
              </div>
              <button type="submit" class="btn btn-success">Simpan</button>
            </form> <br> <br>
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





  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




</body>

</html>