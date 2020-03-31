<div class="container">
  <a href="#" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Tambah</a>
  <div class="row">
    <?php foreach($movie as $movie) : ?>
    <div class="col-md-3 mt-2">
      <div class="card">
        <img src="<?php echo base_url() ?>asset/picture/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $movie->judul ?></h5>
          <p class="card-text"><?php echo substr($movie->detail, 0, 60) ?></p>
          <small class="text-danger float-right"><?php echo date('d F Y', strtotime($movie->tanggal)) ?></small>
          <br>
          <hr>
          <a href="<?php echo base_url('movie/detail/' . $movie->id_movie) ?>" class="btn btn-info btn-sm">Selengkapnya</a>
          <a href="<?php echo base_url('movie/edit/' . $movie->id_movie) ?>" class="btn btn-warning btn-sm float-right"><i class="fas fa-edit"></i></a>
          <a href="<?php echo base_url('movie/delete/' . $movie->id_movie) ?>" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i></a>
        </div>
      </div>
    </div>
    <?php endforeach ?>

  </div>
</div>
