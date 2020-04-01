<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_already_login();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$post = $this->input->post(NULL, TRUE);

		if(isset($post['submit']))
		{
			$query = $this->user_model->login($post);
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				$data = [
					'id_user'		=> $row->id_user,
					'name'			=> $row->name
				];
				$this->session->set_userdata($data);
				redirect(base_url('dashboard'));
			}
			else
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Username atau password anda salah!!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect(base_url('auth'));
			}
		}
	}

	public function logout()
	{
		$data = [
			'id_user', 'name'
		];
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Anda berhasil logout
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>');
		redirect(base_url('auth'));
	}
}
