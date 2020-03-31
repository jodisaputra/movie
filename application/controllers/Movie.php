<?php

class Movie extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
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
}
