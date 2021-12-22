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
                <input type="text" name="nama" class="form-control" placeholder="Your Name">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="address" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <textarea name="address" class="form-control" placeholder="Type your address here"></textarea>
              </div>
            </div>
            <br>
            <div class="form-group row">
              <label for="address" class="col-sm-2 col-form-label">Glasses Type</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="tipe_barang">
                  <option selected>Pilih Barang</option>
                  <option value="daridatabase">daridatabase</option>
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

</html>