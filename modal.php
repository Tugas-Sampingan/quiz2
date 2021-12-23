<!-- MODAL TAMBAH -->
      <div class="modal" id="m_tambah">
        <div class="modal-dialog" style="max-width: 40%;">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="crud/tambahKatalog.php" method="post" enctype="multipart/form-data">
              <!-- Modal body -->
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mt-3">
                        <label for="nama"><b>Nama</b> </label>
                        <input type="text" class="form-control" id="kode" name="nama" value="" required="required">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mt-3">
                        <label for="kode"><b>Kode</b> </label>
                        <input type="text" class="form-control" id="kode" name="kode" value="" required="required">
                      </div>
                    </div>
                  </div>

                  <div class="form-group mt-3">
                    <label for="tahun_terbit"><b>Deskripsi</b> </label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" required="required"></textarea>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mt-3">
                        <label for="harga"><b>Harga</b> </label>
                        <input type="text" class="form-control" id="harga" name="harga" value="" required="required">
                      </div>
                      <div class="form-group mt-3">
                        <label for="lebar_lensa"><b>Lebar Lensa </b> </label>
                        <input type="text" class="form-control" id="lebar_lensa" name="lebar_lensa" value="" required="required">
                      </div>
                      <div class="form-group mt-3">
                        <label for="lebar_nosepad"><b>Lebar Nosepad </b> </label>
                        <input type="text" class="form-control" id="lebar_nosepad" name="lebar_nosepad" value="" required="required">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group mt-3">
                        <label for="panjang_gagang"><b>Panjang Gagang </b> </label>
                        <input type="text" class="form-control" id="panjang_gagang" name="panjang_gagang" value="" required="required">
                      </div>
                      <div class="form-group mt-3">
                        <label for="lebar_seluruh_lensa"><b>Lebar Seluruh Lensa </b> </label>
                        <input type="text" class="form-control" id="lebar_seluruh_lensa" name="lebar_seluruh_lensa" value="" required="required">
                      </div>
                      <div class="form-group mt-3">
                        <label for="tinggi_frame"><b>Tinggi Frame </b> </label>
                        <input type="text" class="form-control" id="tinggi_frame" name="tinggi_frame" value="" required="required">
                      </div>    
                    </div>
                  </div>

                  <div class="form-group mt-3">
                    <label for=material><b>Material </b> </label>
                    <input type="text" class="form-control" id="material" name="material" value="" required="required">
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
                <input type="submit" class="btn btn-primary" name="simpan" id="simpan" value="Simpan">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- END MODAL TAMBAH -->

      <!-- MODAL EDIT -->
      <div class="modal" id="m_edit">
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

      <!-- END MODAL EDIT -->