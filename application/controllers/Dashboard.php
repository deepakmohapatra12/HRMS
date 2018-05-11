<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

function __construct() {
	parent::__construct();
	$this->load->library('session');
	}

	public function index()
	{
		$role  = $this->session->userdata("role");
		switch($role)
		{
			case "1":
			redirect(base_url('superuser/index'));
			break;
			
			case "2":
			redirect(base_url('hr/dashboard'));
			break;
			
			case "3":
			redirect(base_url('employee/index'));
			break;
			
			default:
			$this->session->set_flashdata("msg","<p class='alert alert-danger text-center'>Please Login</p>");
			redirect(base_url('login/index'));
		}
	}
	
	public function logout()
		{
			$data = array("userid"=>"", "name"=>"", "role"=>"");
			$this->session->set_userdata($data);
			$this->session->set_flashdata("msg","<p class='alert alert-success text-center'>You are Logout Successfully</p>");
			redirect(base_url('login/index'));					
		}
}
