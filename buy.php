<?php
session_start();
include 'crud/conn.php';
$resul1 = mysqli_query($conn, "SELECT * FROM pemesanan");
$result = mysqli_query($conn, "SELECT * FROM databarang");

setcookie('login', $_SESSION["login"] = true, time() + 600); //10 menit

$namaBarang;

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


  <section id="buy">
    <?php if (isset($_SESSION['username'])) : ?>
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center" style="margin-top: 60px;">
            <br>
            <h2 style="text-align: center;">GO CHECKOUT YOUR GLASSES NOW!</h2>
          </div>
        </div>

        <div class="row justify-content-center" style="margin-bottom: 120px;">

          <div class="col-lg-7">

            <form action="crud/buatPesanan.php" method="post">
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" value="<?= $_SESSION['username'] ?>" readonly>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" value="<?= $_SESSION['email'] ?>" readonly>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                  <input type="text" name="no_telp" class="form-control" value="<?= $_SESSION['no_telp'] ?>" readonly>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" class="form-control" placeholder="Type your address here"><?= $_SESSION['alamat'] ?></textarea>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Glasses Type</label>
                <div class="col-sm-10">
                  <select onchange="val()" class="form-select" id="tipe_barang" aria-label="Default select example" name="tipe_barang">
                    <option selected>Pilih Barang</option>
                    <?php
                    foreach ($result as $row) : ?>
                      <option value="<?= $row['kode_barang'].'; '.$row['harga'] ?>"><?= $row['kode_barang'].' - '.$row['harga'] ?></option>
                    <?php
                    endforeach;
                    ?>
                  </select>
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                  <input type="number" min="1" max="5" name="jumlah" name="jumlah">
                </div>
              </div>
              <br>
              <div class="form-group row">
                <label for="payment" class="col-sm-2 col-form-label">Payment Method</label>
                <div class="col-sm-10">
                  <select name="payment" class="form-control">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <center>
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="pesan">Pesan Sekarang</button>
                  </center>
                </div>
              </div>
            </form>
          </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['useradmin'])) { ?>
          <div class="container">
            <div class="row mb-4">
              <div class="col text-center" style="margin-top: 60px;">
                <br>
                <h2 style="text-align: center;">Pesanan</h2>
              </div>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Pemesan</th>
                  <th scope="col">Email</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Total</th>
                  <th scope="col">Pembayaran</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($resul1 as $row) { ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $row['nama_pemesan'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['kode_barang'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['jumlah'] ?></td>
                    <td><?= ($row['jumlah'] * $row['harga']) ?></td>
                    <td><?= $row['pembayaran'] ?></td>
                    <td><a href="crud/hapusPesanan.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a></td>
                  </tr>
                <?php
                  $i++;
                }
                ?>
              </tbody>
            </table>

          <?php } ?>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
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
<script>
  function val() {
    tipeBarang = document.getElementById("tipe_barang").value;
    if (tipeBarang == "AGNES") {
      document.getElementById("harga_barang").value = 110000;
    } else if (tipeBarang == "CHARIZ") {
      document.getElementById("harga_barang").value = 109000;
    } else if (tipeBarang == "ELENZE") {
      document.getElementById("harga_barang").value = 250000;
    } else if (tipeBarang == "KALA") {
      document.getElementById("harga_barang").value = 100000;
    } else {
      document.getElementById("harga_barang").value = 90000;
    }
  }
</script>

</html>