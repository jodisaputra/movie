<?php

class Movie extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('movie_model');
  }

  public function index()
  {
    $data = [
        'movie'    => $this->movie_model->getMovie()
    ];

    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('movie/index', $data);
    $this->load->view('includes/footer');
  }

  public function tambah()
  {
    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('movie/tambah');
    $this->load->view('includes/footer');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('judul_film', 'Judul Film', 'required|trim');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi Film', 'required|trim');
    // $this->form_validation->set_rules('gambar', 'Gambar Film', 'required');
    $this->form_validation->set_rules('tanggal', 'Tanggal Film', 'required');
    $this->form_validation->set_rules('genre', 'Genre Film', 'required');
  }

  public function store()
  {
    $this->_rules();

    if($this->form_validation->run() == FALSE)
    {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Isi sesuai dengan format!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      $this->tambah();
    }
    else
    {
      $judul    = $this->input->post('judul_film');
      $detail   = $this->input->post('deskripsi');
      $dibuat   = $this->session->userdata('name');
      $tanggal  = $this->input->post('tanggal');
      $genre    = $this->input->post('genre');
      $gambar   = $_FILES['gambar'];

      if($gambar='') {} else {
         $config['upload_path']  = './asset/picture/';
         $config['allowed_types'] = 'jpg|png|gif|jpeg';

         $this->upload->initialize($config);

          if(!$this->upload->do_upload('gambar')){
            echo $this->upload->display_errors();die();
          } else {
           $gambar = $this->upload->data('file_name');
          }

      }
      $data = [
          'judul'       => $judul,
          'detail'      => $detail,
          'dibuat_oleh' => $dibuat,
          'gambar'      => $gambar,
          'tanggal'     => $tanggal,
          'genre'       => $genre
      ];

      $this->movie_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil disimpan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect(base_url('movie'));
    }
  }

  public function detail($id)
  {
    $data = [
        'detailmovie'    => $this->movie_model->getMovieById($id)
    ];

    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('movie/detail', $data);
    $this->load->view('includes/footer');
  }

  public function edit($id)
  {
    $data = [
        'detailmovie'    => $this->movie_model->getMovieById($id)
    ];

    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('movie/update', $data);
    $this->load->view('includes/footer');
  }

  public function edit_action()
  {
    $id       = $this->input->post('id_movie');
    $judul    = $this->input->post('judul_film');
    $detail   = $this->input->post('deskripsi');
    $dibuat   = $this->session->userdata('name');
    $tanggal  = $this->input->post('tanggal');
    $genre    = $this->input->post('genre');

    if(!empty($_FILES['gambar']['name']))
    {
      $config['upload_path']  = './asset/picture/';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';

      $this->upload->initialize($config);

       if(!$this->upload->do_upload('gambar')){
         echo $this->upload->display_errors();die();
       } else {
        $gambar = $this->upload->data('file_name');
       }
    }
    else
    {
       $this->input->post('old_image');
    }

    $data = [
        'id_movie'    => $id,
        'judul'       => $judul,
        'detail'      => $detail,
        'dibuat_oleh' => $dibuat,
        'tanggal'     => $tanggal,
        'genre'       => $genre
    ];

    $this->movie_model->update($id,$data);
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil diubah
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
    redirect(base_url('movie'));
  }

  public function delete($id)
  {
    $id_movie = $this->db->get_where('movie',['id_movie' => $id])->row();
     $query = $this->db->delete('movie',['id_movie'=>$id]);
     if($query){
         unlink("asset/picture/".$id_movie->gambar);
		 }
		 $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil dihapus
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
    redirect(base_url('movie'));
  }
}
