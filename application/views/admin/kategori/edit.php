
<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <div class="col"></div>
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header text-center">
              <h3 class="h4">Edit Kategori</h3>
            </div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-5">
                    <label>Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" value="<?= $kategori['nama_kategori'] ?>">
                  </div>
                  <div class="col-lg-5">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" name="gambar_kategori" class="form-control">
                  </div>
                  <div class="col"></div>
                </div>
                <br>
                <div class="row">
                  <div class="col"></div>
                  <div class="col-lg-10">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi_kategori" rows="7"><?= $kategori['deskripsi_kategori'] ?></textarea>
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
                    <a href="<?= base_url('admin/kategori') ?>" style="width:100%" class="btn btn-danger">Kembali</a>
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
