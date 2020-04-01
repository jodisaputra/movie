<?php

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }
  public function index()
  {
    $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
    $this->load->view('includes/topbar');
    $this->load->view('dashboard/index');
    $this->load->view('includes/footer');
  }
}
