<?php
include 'crud/conn.php';
$selected = mysqli_query($conn, "SELECT * FROM databarang");
setcookie('login', $_SESSION["login"] = true, time() + 600); //10 menit


?>
<!DOCTYPE html>
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

  <section id="bestseller" style="background-color:darksalmon ;">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center" style="margin-top: 60px;">
          <h1 style="text-align: center;">Best Seller Glasses Of The Year</h1>
        </div>
      </div>
      <div class="row">
        <?php foreach ($selected as $row) : ?>
        <div class="col-md mb-4">
          <div class="card" style="margin-bottom: 50px;">
            <img class="card-img-top" src="katalog/<?= $row["gambar"]; ?>" alt="kcmt1" style="display: block;">
            <div class="card-body">
              <h3 style="text-align: center;"><?= $row["nama_barang"]; ?></h3>
              <p class="card-text" style="text-align: justify;"><?= $row["deskripsi"]; ?>
              <h6>Estimasi Detail Size</h6>
              <ul type="disc">
                <?php $arr = explode("; ", $row['detail']); ?>
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