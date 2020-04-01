<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Movie <small class="text-danger"><?php echo $detailmovie->judul ?></small></h6>
          </div>
          <div class="card-body">
            <form action="<?php echo base_url('movie/edit_action/' . $detailmovie->id_movie) ?>" method="post" enctype="multipart/form-data">
              <?php echo $this->session->flashdata('message') ?>

              <input type="hidden" name="id_movie" value="<?php echo $detailmovie->id_movie ?>">

              <div class="form-group">
                <label>Judul Film</label>
                <input type="text" name="judul_film" class="form-control" value="<?php echo $detailmovie->judul ?>">
                <small class="text-danger"><?php echo form_error('judul_film') ?></small>
              </div>

              <div class="form-group">
                <label>Deskripsi Film</label>
                <textarea name="deskripsi" class="form-control" rows="5" cols="80"><?php echo $detailmovie->detail ?></textarea>
                <small class="text-danger"><?php echo form_error('deskripsi') ?></small>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="hidden" name="old_image" value="<?php echo $detailmovie->gambar ?>">
                <input type="file" name="gambar" class="form-control">
              </div>

              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $detailmovie->tanggal ?>">
                <small class="text-danger"><?php echo form_error('tanggal') ?></small>
              </div>

              <div class="form-group">
                <label>Genre</label>
                <select class="form-control" name="genre">
                  <?php if($detailmovie->genre == 'horror') { ?>
                  <option selected value="horror">Horror</option>
                  <option value="thriller">Thriller</option>
                  <option value="romantic">Romantic</option>
                  <option value="comedy">Comedy</option>
                <?php } elseif($detailmovie->genre == 'thriller') { ?>
                  <option value="horror">Horror</option>
                  <option selected value="thriller">Thriller</option>
                  <option value="romantic">Romantic</option>
                  <option value="comedy">Comedy</option>
                <?php } elseif($detailmovie->genre == 'romantic') { ?>
                  <option value="horror">Horror</option>
                  <option value="thriller">Thriller</option>
                  <option selected value="romantic">Romantic</option>
                  <option value="comedy">Comedy</option>
                <?php } elseif($detailmovie->genre == 'comedy') { ?>
                  <option value="horror">Horror</option>
                  <option selected value="thriller">Thriller</option>
                  <option value="romantic">Romantic</option>
                  <option selected value="comedy">Comedy</option>
                <?php } ?>
                </select>
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Ubah</button>

            </form>
          </div>
        </div>
      </div>
  </div>
</div>
