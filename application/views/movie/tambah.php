<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Movie</h6>
          </div>
          <div class="card-body">
            <form action="<?php echo base_url('movie/store') ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Judul Film</label>
                <input type="text" name="judul_film" class="form-control">
              </div>

              <div class="form-group">
                <label>Deskripsi Film</label>
                <textarea name="deskripsi" class="form-control" rows="5" cols="80"></textarea>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
              </div>

              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="judul_film" class="form-control">
              </div>

              <div class="form-group">
                <label>Genre</label>
                <select class="form-control" name="genre">
                  <option value="horror">Horror</option>
                  <option value="thriller">Thriller</option>
                  <option value="romantic">Romantic</option>
                  <option value="comedy">Comedy</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Simpan</button>

            </form>
          </div>
        </div>
      </div>
  </div>
</div>
