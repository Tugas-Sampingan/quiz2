<?php

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
        <div class="col-md mb-4">
          <div class="card" style="margin-bottom: 50px;">
            <img class="card-img-top" src="https://www.optiktunggal.com/img/product/IMG_0146_copy.jpg" alt="kcmt1" style="display: block;">
            <div class="card-body">
              <h3 style="text-align: center;">AGNES B</h3>
              <p class="card-text" style="text-align: justify;">Kacamata dengan frame bulat leopard yang trendy dan nyaman dipakai. Bisa Request lensa minus/plus/silinder
              <ul type="disc">
                <h6>Estimasi Detail Size</h6>
                <li>Lebar lensa: 5,3 cm</li>
                <li>Lebar nosepad (jarak antara lensa kanan kiri) : 1,5 cm</li>
                <li>Panjang gagang : 13,8 cm</li>
                <li>Lebar seluruh lensa (ujung lensa kanan ke kiri): 12,1 cm</li>
                <li>Tinggi frame: 4,8cm</li>
                <li>material: plastik mix besi,Penyangga hidung bisa diatur</li>
              </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card" style="margin-bottom: 50px;">
            <img class="card-img-top" src="https://www.optiktunggal.com/img/product/IMG_0254_copy1.jpg" alt="kcmt2">
            <div class="card-body">
              <h3 style="text-align: center;">RONA BLACK</h3>
              <p class="card-text" style="text-align: justify;">Bentuk semi Cat eyes mungil ini bikin penampilan kamu semakin elegant dan kece bgt😍. Bisa Request lensa minus/plus/silinder
              <ul type="disc">
                <h6>Estimasi Detail Size </h6>
                <li>Lebar lensa: 5,4cm</li>
                <li>Lebar nosepad (jarak antara lensa kanan kiri) : 2cm</li>
                <li>Panjang gagang : 14,2cm</li>
                <li>Lebar seluruh lensa (ujung lensa kanan ke kiri): 12,8cm</li>
                <li>Tinggi frame: 4,4cm</li>
                <li>aterial: plastik mix besi,Penyangga hidung bisa diatur</li>
              </ul>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card" style="margin-bottom: 50px;">
            <img class="card-img-top" src="https://www.optiktunggal.com/img/product/0RB4278__628211_000A.jpg" alt="kcmt3">
            <div class="card-body">
              <h3 style="text-align: center;">ELENZE IN SQUARE</h3>
              <p class="card-text" style="text-align: justify;">Super stylish😎 cocok untuk nemenin liburan kamu jadi makin hype!
                Unisex cewe cowo bisa pakai 😍. Kacamata sudah dilengkapi lensa anti UV!
              <ul type="disc">
                <h6>Estimasi Detail Size</h6>
                <li>Lebar lensa: 6,4 cm</li>
                <li>Lebar nosepad (jarak antara lensa kanan kiri) : 1,3 cm</li>
                <li>Panjang gagang : 15,8 cm</li>
                <li>Lebar seluruh lensa (ujung lensa kanan ke kiri): 14,1 cm</li>
                <li>Tinggi frame: 5,4 cm</li>
                <li>material: plastik mix besi,Penyangga hidung tidak bisa diatur</li>
              </ul>
              </p>
            </div>
          </div>
        </div>
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