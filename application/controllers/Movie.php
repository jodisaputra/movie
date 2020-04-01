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

  public function detail()
  {
    $data = [
        'detailmovie'    => $this->movie_model->getMovieById()
    ];

    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('movie/detail', $data);
    $this->load->view('includes/footer');
  }
}
