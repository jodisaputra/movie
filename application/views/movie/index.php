<div class="container">
  <div class="row">
    <div class="col-md-3 mb-2">
      <form class="form-inline" action="<?= base_url('movie/cari') ?>" method="post">
        <div class="form-group">
          <select class="form-control" name="genre">
            <option value="horror">Horror</option>
            <option value="thriller">Thriller</option>
            <option value="romantic">Romantic</option>
            <option value="comedy">Comedy</option>
          </select>
        </div>
        &nbsp;
        &nbsp;
        <button type="submit" class="btn btn-info" name="cari">Cari</button>
      </form>
    </div>
  </div>

  <?php echo $this->session->flashdata('message') ?>

  <div class="row">
    <?php foreach($movie as $movie) : ?>
    <div class="col-md-3 mt-2">
      <div class="card">
        <img src="<?php echo base_url() ?>asset/picture/<?php echo $movie->gambar  ?>" class="card-img-top" width="30%">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->judul ?></h5>
          <p class="card-text"><?php echo substr($movie->detail, 0, 30) ?></p>
          <small class="text-danger float-right"><?php echo date('d F Y', strtotime($movie->tanggal)) ?></small>
          <br>
          <hr>
          <a href="<?php echo base_url('movie/detail/' . $movie->id_movie) ?>" class="btn btn-info btn-sm">Selengkapnya</a>
          <a href="<?php echo base_url('movie/edit/' . $movie->id_movie) ?>" class="btn btn-warning btn-sm float-right"><i class="fas fa-edit"></i></a>
          <a href="<?php echo base_url('movie/delete/' . $movie->id_movie) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></a>
        </div>
      </div>
    </div>
    <?php endforeach ?>

  </div>
</div>
