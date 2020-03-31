<?php

class Movie extends CI_Controller
{
  public function index()
  {
    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('movie/index');
    $this->load->view('includes/footer');
  }
}
