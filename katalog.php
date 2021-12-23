<?php

include 'crud/conn.php';

$selected = mysqli_query($conn, "SELECT * FROM databarang");

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>OZARK GLASSES STORE</title>

</head>

<body>
  <script src="js/bootsrap.js"></script>
  <script src="js/popper.min.js"></script>
  <?php
  include 'navbar.php';
  ?>
  <br> <br> <br> <br>


  <h3 style="text-align: center;">OZARK'S CATALOG</h3>

  <div class="container">
    <?php if (isset($_SESSION['useradmin'])) : ?>
      <button id="tambah" type="button" class="btn btn-primary border-0 mb-4 mt-4 px-4" style="background-color:#696969 ; margin-right: 8px;" data-toggle="modal" data-target="#m_tambah">Tambah</button>
    <?php endif; ?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php foreach ($selected as $row) : ?>
        <div class="col">
          <div class="card">
            <img src="katalog/<?= $row["gambar"]; ?>" class="card-img-top" alt="p1" height="360px" width="530px">
            <div class="card-body">
              <h4 class="card-title" style="text-align: center;"> <?= $row["nama_barang"]; ?></h4>
              <hr>
              <p class="card-text">Kode: <?= $row["kode_barang"]; ?> <br>
                Harga: Rp <?= $row["harga"]; ?>,- <br>
              </p>

              <p><?= $row["deskripsi"]; ?></p>
              <hr>

              <?php $arr = explode("; ", $row['detail']); ?>
              <h6>Detail Size: </h6>
              <ul type="disc">
                <li>Lebar lensa: <?= $arr[0]; ?></li>
                <li>Lebar nosepad (jarak antara lensa kanan kiri) : <?= $arr[1]; ?></li>
                <li>Panjang gagang : <?= $arr[2]; ?></li>
                <li>Lebar seluruh lensa (ujung lensa kanan ke kiri): <?= $arr[3]; ?></li>
                <li>Tinggi frame: <?= $arr[4]; ?></li>
                <li>material: <?= $arr[5]; ?></li>
              </ul>
              <?php if (isset($_SESSION['useradmin'])) : ?>
                <hr>
                <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_edit<?= $row['kode_barang'] ?>">Edit</button>
                <a href="crud/delete.php?kode=<?= $row["kode_barang"]; ?>" class="btn btn-danger">Remove</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php
        include 'modal.php';
        ?>
      <?php endforeach; ?>
    </div>
  </div>


  <?php foreach ($selected as $row) : ?>
    <!-- MODAL EDIT -->
    <div class="modal" id="m_edit<?= $row['kode_barang'] ?>">
      <div class="modal-dialog" style="max-width: 40%;">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form action="crud/update.php" method="post" enctype="multipart/form-data">
            <!-- Modal body -->
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="nama"><b>Nama</b> </label>
                      <input type="text" class="form-control" id="kode" name="nama" value="<?= $row["nama_barang"]; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="kode"><b>Kode</b> </label>
                      <input type="text" class="form-control" id="kode" name="kode" value="<?= $row["kode_barang"]; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group mt-3">
                  <label for="tahun_terbit"><b>Deskripsi</b> </label>
                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"><?= $row["deskripsi"]; ?></textarea>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="harga"><b>Harga</b> </label>
                      <input type="text" class="form-control" id="harga" name="harga" value="<?= $row["harga"]; ?>">
                    </div>
                    <div class="form-group mt-3">
                      <label for="lebar_lensa"><b>Lebar Lensa </b> </label>
                      <input type="text" class="form-control" id="lebar_lensa" name="lebar_lensa" value="<?= $arr[0]; ?>">
                    </div>
                    <div class="form-group mt-3">
                      <label for="lebar_nosepad"><b>Lebar Nosepad </b> </label>
                      <input type="text" class="form-control" id="lebar_nosepad" name="lebar_nosepad" value="<?= $arr[1]; ?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group mt-3">
                      <label for="panjang_gagang"><b>Panjang Gagang </b> </label>
                      <input type="text" class="form-control" id="panjang_gagang" name="panjang_gagang" value="<?= $arr[2]; ?>">
                    </div>
                    <div class="form-group mt-3">
                      <label for="lebar_seluruh_lensa"><b>Lebar Seluruh Lensa </b> </label>
                      <input type="text" class="form-control" id="lebar_seluruh_lensa" name="lebar_seluruh_lensa" value="<?= $arr[3]; ?>">
                    </div>
                    <div class="form-group mt-3">
                      <label for="tinggi_frame"><b>Tinggi Frame </b> </label>
                      <input type="text" class="form-control" id="tinggi_frame" name="tinggi_frame" value="<?= $arr[4]; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group mt-3">
                  <label for=material><b>Material </b> </label>
                  <input type="text" class="form-control" id="material" name="material" value="<?= $arr[5]; ?>">
                </div>

                <br>
                <div class="form - group">
                  <label for="foto"><b>Gambar</b></label>
                  <input type="file" name="foto" class="form-control" id="inputGroupFile02" required="required">
                </div>

              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan Perubahan">
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- END MODAL EDIT -->

  <!-- footer -->
  <footer class="mt-4">
    <div class="container">
      <div class="row">
        <div class="col text-center mt-3">
          <p style="text-align: center;"><b>Firenze Sukmaning Diefta_1202194019</b></p>
        </div>
      </div>
    </div>
  </footer>
</body>