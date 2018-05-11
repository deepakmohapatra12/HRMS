<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct() {
	parent::__construct();
	$this->load->model('User_model');
	$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('adminlogin');
	}
	
	
	public function usercheck()
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$status = $this->User_model->logincheck($email,$password);
			if($status==true)
				{
					redirect(base_url('dashboard/index'));
				}else{
					$this->session->set_flashdata("msg","<p class='alert alert-warning text-center'>Sorry,Invalid Login !..</p>");
						redirect(base_url('login/index'));
				}
		}
}
