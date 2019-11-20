
<div class="content-inner">
  <section class="forms"> 
    <div class="container-fluid">
      <div class="row">
        <!-- Basic Form-->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Mading</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Komentar</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($forum as $key => $value): ?>
                      <tr>
                        <th><?= $key+1 ?></th>
                        <td><?= $value['judul_forum'] ?></td>
                        <td><?= $value['nama_member'] ?></td>
                        <td><?= tanggal_indo($value['tanggal']) ?></td>
                        <td><?= $value['status'] ?></td>
                        <td><?= hitung_komentar_forum($value['id_forum']) ?></td>
                        <td>
                          <a href="<?= base_url("forum/detail/$value[id_forum]") ?>" target="_blank"><i class="fa fa-eye pull-left"></i></a>
                          <a href=""><i class="fa fa-trash pull-right"></i></a>
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
