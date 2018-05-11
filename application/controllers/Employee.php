<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Hr_model');
		$this->load->library('session');
		if($this->session->userdata("userid")=="")
		{
			$this->session->set_flashdata("msg","<p class='alert alert-danger text-center'>Please Login</p>");
			redirect(base_url('login/index'));	
		}
	}
	public function index(){
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/dashboard');
		$this->load->view('footer');
	}
	public function applyleave()
	{
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/applyleave');
		$this->load->view('footer');
	}
	public function saveleave()
	{
		$this->Hr_model->saveleave();
		$this->session->set_flashdata("msg","<center>Request Send ! Waiting For Approval</center>");
		header("Location:applyleave");	
	}
	public function payslip()
	{
		$empid = $this->session->userdata("userid");
		$data['salary'] = $this->Hr_model->getEmpsalary($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/empsalarylist',$data);
		$this->load->view('footer');
	}
	//by deepak
	public function newempdetails()
	{
		$empid = $this->session->userdata("userid");
		$data['row']=$this->Hr_model->get_adddetails($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/addempdetails',$data);
		$this->load->view('footer');
	}	
	public function employmenthistory()
	{
		$empid = $this->session->userdata('userid');
		$data['hist'] = $this->Hr_model->gethistorydetails($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/employmenthistory',$data);
		$this->load->view('footer');
	}
	public function employeeeducation()
	{
		$empid = $this->session->userdata('userid');
		$data['edu'] = $this->Hr_model->getedudetails($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/education',$data);
		$this->load->view('footer');
	}
	public function training()
	{
		$empid = $this->session->userdata('userid');
		$data['training'] = $this->Hr_model->get_training($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/training',$data);
		$this->load->view('footer');
	}
	public function certifications()
	{
		$empid = $this->session->userdata('userid');
		$data['certification'] = $this->Hr_model->get_certificate($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/certifications',$data);
		$this->load->view('footer');
	}
	public function references()
	{
		$empid = $this->session->userdata('userid');
		$data['reference'] = $this->Hr_model->get_reference($empid);
		$this->load->view('header');
		$this->load->view('empleftnav');
		$this->load->view('emp/references',$data);
		$this->load->view('footer');
	}
	public function save_education()
	{
		$edu=array(
			"qualification	"=>$_POST['qual'],
			"university"=>$_POST['uni'],
			"specialization"=>$_POST['spec'],
			"year"=>$_POST['yop'],
			"cgpa"=>$_POST['cgpa'],
			"type"=>$_POST['type'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_education($edu);
		header("Location:employeeeducation");		
	}
	public function save_training()
	{
		$training=array(
			"course"=>$_POST['course'],
			"location"=>$_POST['location'],
			"conduct"=>$_POST['conduct'],
			"duration"=>$_POST['duration'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_training($training);
		header("Location:training");
	}
	public function save_employee_history()
	{
			$history=array(
			"from"=>$_POST['from'],
			"to"=>$_POST['to'],
			"organisation"=>$_POST['org'],
			"title"=>$_POST['title'],
			"report"=>$_POST['report'],
			"salary"=>$_POST['salary'],
			"reason"=>$_POST['reason'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_employee_history($history);
		header("Location:employmenthistory");
	}
	public function save_employee_certificate()
	{
		$certificate=array(
			"name"=>$_POST['name'],
			"board"=>$_POST['board'],
			"duration"=>$_POST['duration'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_employee_certificate($certificate);
		header("Location:certifications");
	}
	public function save_employee_reference()
	{
			$reference=array(
			"firstreference"=>$_POST['one'],
			"firstempid"=>$_POST['empidone'],
			"secondreference"=>$_POST['two'],
			"secondempid"=>$_POST['empidtwo'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_employee_references($reference);
		header("Location:references");
	}
	public function save_employee_info()
	{
		$einfo=array(
			//"name"=>$_POST['name'],
			//"joindate"=>$_POST['joining'],
			//"designation"=>$_POST['designation'],
			"pan"=>$_POST['pan'],
			"empcity"=>$_POST['city'],
			"dob"=>$_POST['dob'],
			"blood"=>$_POST['blood'],
			"nationality"=>$_POST['nationality'],
			"religion"=>$_POST['religion'],
			"dl"=>$_POST['drive'],
			"dldateofissue"=>$_POST['dlissue'],
			"dlplaceofissue"=>$_POST['dlplace'],
			"passport"=>$_POST['passport'],
			"pdateofissue"=>$_POST['pissue'],
			"pplaceofissue"=>$_POST['pplace']
			);
		$this->Hr_model->save_employee_info($einfo);
		header("Location:newempdetails");
	}
	public function save_employee_address()
	{
		$eaddress=array(
			"currentaddress"=>$_POST['caddress'],
			"phone"=>$_POST['cphone'],
			"emailid"=>$_POST['email'],
			"permanentaddress"=>$_POST['paddress'],
			"permanentphone"=>$_POST['pphone'],
			"emailid"=>$_POST['email'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_employee_address($eaddress);
		header("Location:newempdetails");
	}
	public function save_primary_info()
	{
		$eprimaryinfo=array(
			"primaryname"=>$_POST['name'],
			"primaryrelationship"=>$_POST['relation'],
			"primaryaddressone"=>$_POST['address'],
			"primarycity"=>$_POST['city'],
			"primaryaddresstwo"=>$_POST['secaddress'],
			"primaryphone"=>$_POST['phone'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_primary_info($eprimaryinfo);
		header("Location:newempdetails");
	}
	public function save_secondary_info()
	{
			$esecondaryinfo=array(
			"secondaryname"=>$_POST['name'],
			"secondaryrelationship"=>$_POST['relation'],
			"secondaryaddressone"=>$_POST['address'],
			"secondarycity"=>$_POST['city'],
			"secondaryaddresstwo"=>$_POST['secaddress'],
			"secondaryphone"=>$_POST['phone'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_secondary_info($esecondaryinfo);
		header("Location:newempdetails");
	}
	public function save_personal_info()
	{
			$personalinfo=array(
			"children"=>$_POST['child'],
			"fathername"=>$_POST['fname'],
			"fatherprof"=>$_POST['fprof'],
			"fatherage"=>$_POST['fage'],
			"mothername"=>$_POST['mname'],
			"motherprof"=>$_POST['mprof'],
			"motherage"=>$_POST['mage'],
			"empid"=>$this->session->userdata("userid")
			);
		$this->Hr_model->save_personal_info($personalinfo);
		header("Location:newempdetails");
	}
}
?>