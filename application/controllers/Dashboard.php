<?php

class Dashboard extends CI_Controller
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
      'listmovie'     => $this->movie_model->listmovie()
    ];
    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('dashboard/index', $data);
    $this->load->view('includes/footer');
  }
}
