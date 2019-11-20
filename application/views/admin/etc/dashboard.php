
<div class="content-inner">
  <section class="dashboard-header">
    <div class="container-fluid">
      <div class="row">

        <div class="statistics col-lg-3 col-12">
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i class="fa fa-user"></i></div>
            <div class="text"><strong>234</strong><br><small>Member</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-green"><i class="fa fa-newspaper-o"></i></div>
            <div class="text"><strong>152</strong><br><small>Mading</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-orange"><i class="fa fa-comments-o"></i></div>
            <div class="text"><strong>147</strong><br><small>Forum</small></div>
          </div>
        </div>

        <div class="chart col-lg-6 col-12">
          <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
            <div class="card-body">
              <h3 class="h4 text-center mb-3">Pemesanan Terbaru</h3>
              <br>
              <div class="table-responsive">
                <table id="example" class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($mading as $key => $value): ?>
                      <tr>
                        <th><?= $key+1 ?></th>
                        <td><?= $value['judul_mading'] ?></td>
                        <td><?= $value['nama_member'] ?></td>
                        <td><?= tanggal_indo($value['tanggal']) ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="statistics col-lg-3 col-12">
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i class="fa fa-list-alt"></i></div>
            <div class="text"><strong>234</strong><br><small>Kategori</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-green"><i class="fa fa-book"></i></div>
            <div class="text"><strong>152</strong><br><small>Kelas</small></div>
          </div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-orange"><i class="fa fa-exchange"></i></div>
            <div class="text"><strong>147</strong><br><small>Pemesanan</small></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br>

  <section class="updates no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <!-- Daily Feeds -->
        <div class="col-lg-12">
          <div class="daily-feeds card"> 
            <div class="card-header">
              <h3 class="h4">Mading Terbaru</h3>
            </div>
            <?php foreach ($mading as $key => $value): ?>
              <div class="card-body no-padding">
                <div class="item"> 
                  <div class="feed d-flex justify-content-between">
                    <div class="feed-body d-flex justify-content-between">
                      <div class="content">
                        <h5 class="mb-2"><?= $value['nama_member'] ?></h5>
                        <span class="mb-1"><?= $value['judul_mading'] ?></span>
                        <div class="full-date"><small><?= tanggal_indo($value['tanggal']) ?></small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="updates no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="daily-feeds card"> 
            <div class="card-header">
              <h3 class="h4">Forum Terbaru</h3>
            </div>
            <?php foreach ($forum as $key => $value): ?>
              <div class="card-body no-padding">
                <div class="item"> 
                  <div class="feed d-flex justify-content-between">
                    <div class="feed-body d-flex justify-content-between">
                      <div class="content">
                        <h5 class="mb-2"><?= $value['nama_member'] ?></h5>
                        <span class="mb-1"><?= $value['judul_forum'] ?></span>
                        <div class="full-date"><small><?= tanggal_indo($value['tanggal']) ?></small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>
