
<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col"></div>
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header text-center">
              <h3 class="h4">Tambah Kelas</h3>
            </div>

            <div class="card-body">
              <form method="post">

                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-5 mb-3">
                    <label>Kelas</label>
                    <input name="nama_kelas" type="text" class="form-control">
                  </div>
                  <div class="col-lg-5 mb-3">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <option value="">Pilih Kategori</option>
                      <?php foreach ($kategori as $key => $value): ?>
                        <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="col"></div>
                </div>
                <br>

                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-10 mb-3">
                    <label>Tipe Kelas</label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="premium" name="tipe_kelas" value="Premium">
                      <label class="form-check-label">Premium</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="free" name="tipe_kelas" value="Free">
                      <label class="form-check-label">Free</label>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
                <br>

                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-4">
                    <label>Harga Normal</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp. </span>
                      </div>
                      <input type="text" id="harga" name="harga" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <label>Harga Diskon</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp. </span>
                      </div>
                      <input type="text" id="harga-diskon" name="harga_diskon" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <label>Diskon</label>
                    <div class="input-group mb-3">
                      <input type="text" id="diskon" name="diskon" value="0" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
                <br>

                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-10">
                    <label>Deskripsi Kategori</label>
                    <textarea class="form-control" name="deskripsi_kelas" rows="7" placeholder="Penjelasan singkat mengenai kelas"></textarea>
                  </div>
                  <div class="col"></div>
                </div>
                <br><br>

                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-5">
                    <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:20px">Simpan</button>
                  </div>
                  <div class="col-lg-5">
                    <a href="<?= base_url('admin/kelas') ?>" style="width:100%" class="btn btn-danger">Kembali</a>
                  </div>
                  <div class="col"></div>
                </div>

              </form>
            </div>

          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </section>
</div>
