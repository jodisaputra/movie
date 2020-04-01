<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-secondary mb-2"><?php echo $detailmovie->judul ?></h4>
            <small class="text-info"><?php echo ucfirst($detailmovie->genre) ?></small>
            <div class="card-body">
              <img src="<?php echo base_url('asset/picture/' . $detailmovie->gambar) ?>" class="img-fluid img-thumbnail mb-3" width="30%" alt="">
              <p><?php echo $detailmovie->detail ?></p>
              <a href="<?php echo base_url('movie') ?>" class="btn btn-info btn-sm mb-4">Kembali</a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
