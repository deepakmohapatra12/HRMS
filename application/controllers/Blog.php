<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('blog_m','m');
		
		if($this->session->userdata("ID")=="")
		{
			$this->session->set_flashdata("msg","<p class='alert alert-danger text-center'>Please Login</p>");
			redirect(base_url('login/index'));	
		}
	}

		public function logout()
		{
			$data = array("ID"=>"");
			$this->session->set_userdata($data);
			$this->session->set_flashdata("msg","<p class='alert alert-success text-center'>You are LogOut Successfully</p>");
			//header("Location:".BASEURL."index.php/login/index");
			redirect(base_url('login/index'));					
		}


	public function index(){
		$data['blogs'] = $this->m->getblog();
		$this->load->view('layout/header');
		$this->load->view('blog/index',$data);
		$this->load->view('layout/footer');

	}

	public function add()
	{
		$this->load->view('layout/header');
		$this->load->view('blog/add');
		$this->load->view('layout/footer');
	}

	public function submit()
	{

		$title=$_POST['txt_title'];
		$description=$_POST['txt_description'];
		$photo=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],'assets/images/'.$photo);
		$sts = $_POST['status'];
		$this->m->submit($title,$description,$photo,$sts);
		$this->session->set_flashdata('msg','blog created successfully');
		//header("Location:".BASEURL."index.php/inbox/addblog");
		redirect(base_url('blog/index'));
	}

	public function edit($id)
	{
		$data['blog']=$this->m->getBlogById($id);
		$this->load->view('layout/header');
		$this->load->view('blog/edit',$data);
		$this->load->view('layout/footer');
	}

	public function update()
	{
	
		$txt_hidden = $_POST['txt_hidden'];
		$title=$_POST['txt_title'];
		$description=$_POST['txt_description'];
		$sts = $_POST['status'];
		
		$this->m->update($txt_hidden,$title,$description,$sts);
		redirect(base_url('blog/index'));
	}


	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('blog/index'));
	}































}


?>