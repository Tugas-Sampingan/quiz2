<?php

include 'koneksi.php';

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
                <h4 class="card-title" style="text-align: center;"> <?= $row["nama_barang"]; ?></h4>
                <p class="card-text">Kode: <?= $row["kode_barang"]; ?> Harga: Rp <?= $row["harga"]; ?>,- <br>
                  <!-- Deskripsi -->
                  
                  <?php $arr = explode ("; ",$row['detail']); ?>
                  <ul type="disc">
                    <h6>Detail Size: </h6>
                    <li>Lebar lensa: <?= $arr[0]; ?></li>
                    <li>Lebar nosepad (jarak antara lensa kanan kiri) : <?= $arr[1]; ?></li>
                    <li>Panjang gagang : <?= $arr[2]; ?></li>
                    <li>Lebar seluruh lensa (ujung lensa kanan ke kiri): <?= $arr[3]; ?></li>
                    <li>Tinggi frame: <?= $arr[4]; ?></li>
                    <li>material: <?= $arr[5]; ?></li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>    
      </div>
    </div>
  </section>

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