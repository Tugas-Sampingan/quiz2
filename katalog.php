<?php

include 'crud/conn.php';

$selected = mysqli_query($conn, "SELECT * FROM databarang");

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>OZARK GLASSES STORE</title>
</head>

<body>
  <script src="js/bootsrap.js"></script>
  <script src="js/popper.min.js"></script>
  <?php include 'navbar.php' ?>
  <br> <br> <br> <br>

  <section id="katalog">
    <h3 style="text-align: center;">OZARK'S CATALOG</h3>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($selected as $row) : ?>
          <div class="col">
            <div class="card">
              <img src="katalog/<?= $row["gambar"]; ?>" class="card-img-top" alt="p1" height="360px" width="530px">
              <div class="card-body">
                <h4 class="card-title" style="text-align: center;"> <?= $row["nama_barang"]; ?></h4><hr>
                <p class="card-text">Kode: <?= $row["kode_barang"]; ?> <br> 
                  Harga: Rp <?= $row["harga"]; ?>,-  <br>
                </p>

                <p><?= $row["deskripsi"]; ?></p><hr>

                <?php $arr = explode ("; ",$row['detail']); ?>
                <h6>Detail Size: </h6>
                <ul type="disc">
                  <li>Lebar lensa: <?= $arr[0]; ?></li>
                  <li>Lebar nosepad (jarak antara lensa kanan kiri) : <?= $arr[1]; ?></li>
                  <li>Panjang gagang : <?= $arr[2]; ?></li>
                  <li>Lebar seluruh lensa (ujung lensa kanan ke kiri): <?= $arr[3]; ?></li>
                  <li>Tinggi frame: <?= $arr[4]; ?></li>
                  <li>material: <?= $arr[5]; ?></li>
                </ul>
                <hr>
                <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_edit">Edit</button>
                <a href="crud/delete.php?kode=<?=$row["kode_barang"]; ?>" class="btn btn-danger">Remove</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>    
      </div>
    </div>
  </section>

  <!-- MODAL -->
  <div class="modal" id="m_edit">
    <div class="modal-dialog" style="max-width: 60%;">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sunting</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <!-- Modal body -->
          <div class="modal-body">
            <div class="container mt-5 p-5">

              <div class="form-group mt-3">
                <label for="kode"><b>Kode</b> </label>
                <input type="text" class="form-control" id="kode" name="kode" value="">
              </div>
              <div class="form-group mt-3">
                <label for="harga"><b>Harga</b> </label>
                <input type="text" class="form-control" id="harga" name="harga" value="">
              </div>
              <div class="form-group mt-3">
                <label for="tahun_terbit"><b>Deskripsi</b> </label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="">
              </div>

              <div class="form-group mt-3">
                <label for="lebar_lensa"><b>Lebar Lensa </b> </label>
                <input type="text" class="form-control" id="lebar_lensa" name="lebar_lensa" value="">
              </div>
              <div class="form-group mt-3">
                <label for="lebar_nosepad"><b>Lebar Nosepad </b> </label>
                <input type="text" class="form-control" id="lebar_nosepad" name="lebar_nosepad"" value="">
              </div>
              <div class="form-group mt-3">
                <label for="panjang_gagang"><b>Panjang gagang </b> </label>
                <input type="text" class="form-control" id="panjang_gagang" name="panjang_gagang" value="">
              </div>
              <div class="form-group mt-3">
                <label for="lebar_seluruh_lensa"><b>Lebar Seluruh Lensa </b> </label>
                <input type="text" class="form-control" id="lebar_seluruh_lensa" name="lebar_seluruh_lensa" value="">
              </div>
              <div class="form-group mt-3">
                <label for="tinggi_frame"><b>Tinggi Frame </b> </label>
                <input type="text" class="form-control" id="tinggi_frame" name="tinggi_frame" value="">
              </div>  
              <div class="form-group mt-3">
                <label for=material><b>Material </b> </label>
                <input type="text" class="form-control" id="material" name="material" value="">
              </div>             

              <br>
              <div class="form - group">
                <label for="foto"><b>Gambar</b></label>
                <input type="file" name="foto" class="form-control" id="inputGroupFile02" required="required">
              </div>
              <br><br>

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
  <!-- END MODAL -->

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