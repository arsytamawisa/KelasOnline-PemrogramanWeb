
<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <!-- Basic Form-->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Kategori</h3>
              <a href="<?= base_url('admin/kategori/tambah') ?>" style="margin-left:auto" class="btn btn-primary"><i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Jumlah Kelas</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($kategori as $key => $value): ?>
                      <tr>
                        <th><?= $key+1 ?></th>
                        <td><?= $value['nama_kategori'] ?></td>
                        <td><?= hitung_kelas($value['id_kategori']) ?></td>
                        <td>
                          <style>a:hover{text-decoration:none}</style>
                          <a href="<?= base_url("admin/kategori/edit/$value[id_kategori]") ?>">
                            <i title="Edit" class="fa fa-pencil pull-left"></i>&emsp;
                          </a>
                          <a href="<?= base_url("kelas/list/$value[nama_kategori]") ?>" target="_blank">
                            <i title="Detail" class="fa fa-eye pull-left"></i>&emsp;
                          </a>
                          <a href="<?= base_url("admin/kategori/hapus/$value[id_kategori]") ?>">
                            <i title="Hapus" class="fa fa-trash pull-left"></i>&emsp;
                          </a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
