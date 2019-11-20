
<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <!-- Basic Form-->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Kelas</h3>
              <a href="<?= base_url('admin/kelas/tambah') ?>" style="margin-left:auto" class="btn btn-primary"><i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kelas</th>
                      <th>Kategori</th>
                      <th>Tipe</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($kelas as $key => $value): ?>
                      <tr>
                        <th><?= $key+1 ?></th>
                        <td><?= $value['nama_kelas'] ?></td>
                        <td><?= $value['nama_kategori'] ?></td>
                        <td><?= $value['tipe_kelas'] ?></td>
                        <td>
                          <a href="<?= base_url("admin/kelas/edit/$value[id_kelas]") ?>"><i class="fa fa-pencil pull-left"></i></a>
                          <a href="<?= base_url("admin/kelas/hapus/$value[id_kelas]") ?>"><i class="fa fa-trash pull-right"></i></a>
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
