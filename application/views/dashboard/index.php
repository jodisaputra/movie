
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row justify-content-center">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">List Movie Terbaru</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" width="25%">Judul Movie</th>
                        <th scope="col" width="30%">Deskripsi</th>
                        <th scope="col" width="20%">Dibuat Oleh</th>
                        <th scope="col" width="25%">Gambar</th>
                        <th scope="col" width="30%">Tanggal</th>
                        <th scope="col" width="30%">Genre</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>
                      <?php foreach($listmovie as $list) : ?>
                      <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $list->judul ?></td>
                        <td><?php echo $list->detail ?></td>
                        <td><?php echo $list->dibuat_oleh ?></td>
                        <td><img width="30%" src="<?= base_url('asset/picture/' . $list->gambar) ?>"></td>
                        <td><?php echo $list->tanggal ?></td>
                        <td><?php echo $list->genre ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
