<?php
session_start();
include 'crud/conn.php';
$best = mysqli_query($conn, "SELECT *, sum(p.jumlah) as jumlah FROM pemesanan p join databarang d on d.kode_barang = p.kode_barang group by d.kode_barang ORDER BY jumlah DESC;");

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
  <section id="home">
    <div class="container-fullwidth">
      <br><br><br>
      <div class="jumbotron" id="home" style="text-align: center;">
        <div class="container"></div>
        <br>
        <div class="text-center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xUryV969vRs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h1 class="display-4">WELCOME TO OZARK GLASSES STORE</h1>
          <h3 class="lead">Ozark Glasses Store menyediakan berbagai macam jenis frame kacamata beserta lensa,seperti kacamata minus,plus,atau pun silinder</h3>
          <h3 class="lead">Serta menyediakan juga berbagai macam sunglasses yang trendy dan nyaman.</h3>
        </div>
      </div>
  </section>
  <br><br>

  <section id="bestseller" style="background-color:darksalmon ;">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center" style="margin-top: 60px;">
          <h1 style="text-align: center;">Best Seller Glasses Of The Year</h1>
        </div>
      </div>
      <div class="row">
        <?php
        $i = 0;
        foreach ($best as $row) :
          $i++;
        ?>
          <div class="col-md mb-4">
            <div class="card" style="margin-bottom: 50px;">
              <img class="card-img-top" src="katalog/<?= $row["gambar"]; ?>" alt="kcmt1" style="display: block;">
              <div class="card-body">
                <h3 style="text-align: center;"><?= $row["nama_barang"]; ?></h3>
                <p class="card-text" style="text-align: justify;"><?= $row["deskripsi"]; ?>
                </p>
              </div>
            </div>
          </div>
        <?php
          if ($i == 3) {
            exit();
          }
        endforeach; ?>
      </div>
    </div>
  </section>

  <br><br><br>
  <center>
    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ALUN%20ALUN%20BATANG&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 600px;
          }
        </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
        <style>
          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 600px;
          }
        </style>
      </div>
    </div>
  </center>

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

</html>