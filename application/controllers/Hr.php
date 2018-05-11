<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('income_model');
		$this->load->model('other_expense_model');
		$this->load->model('Hr_model');
		$this->load->library('session');
		if($this->session->userdata("userid")=="")
		{
			$this->session->set_flashdata("msg","<p class='alert alert-danger text-center'>Please Login</p>");
			redirect(base_url('login/index'));	
		}
	}

	

	public function dashboard(){
		//$data['push'] = $this->Hr_model->get_push_data();
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/dashboard');
		$this->load->view('footer');
	}
	
	
	public function emplist(){
		$data['emp'] = $this->Hr_model->emplist();
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/emplist',$data);
		$this->load->view('footer');
	}

	
	public function inactiveemplist(){
		$data['emp'] = $this->Hr_model->inactiveemplist();
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/inactiveemployee',$data);
		$this->load->view('footer');
	}
	
	public function newemployee()
	{
		$this->load->view('header');
		$this->load->view('leftnav');
		$data['emp'] = $this->Hr_model->emplist();
		$this->load->view('hr/newemp');
		
		$this->load->view('footer');
	}
	
	public function saveemployee()
	{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$joindate = $_POST['joindate'];
		$gender = $_POST['gender'];
		$role = $_POST['role'];
		$data = array("name"=>$name, "email"=>$email, "password"=>$password, "mobile"=>$mobile, "gender"=>$gender, "joindate"=>$joindate, "role"=>$role, "designation"=>$_POST['designation']);
		$this->Hr_model->saveemployee($data);
		$this->session->set_flashdata("msg","<center>Employee Saved !</center>");
		header("Location:newemployee");	
	}
	
	public function empsalary(){
		$data['emp'] = $this->Hr_model->emplist();
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/empsalary',$data);
		$this->load->view('footer');
	}
	
	public function processsalary(){
		$empid = $this->uri->segment(3);
		$data['salary'] = $this->Hr_model->getEmpsalary($empid);
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/empsalarylist',$data);
		$this->load->view('footer');
	}
	
	public function savesalary()
	{
		$alldata=array(
			"total"=>$_POST['total'],
			"pt"=>$_POST['pt'],
			"medical"=>$_POST['medical'],
			"other"=>$_POST['other'],
			"paid"=>$_POST['paid'],
			"basic"=>$_POST['basic'],
			"hra"=>$_POST['hra'],
			"special"=>$_POST['special'],
			"net"=>$_POST['net'],
			"empid"=>$_POST['empid'],
			"month"=>$_POST['month'],
			"year"=>$_POST['year'],
			"totaldays"=>$_POST['tdays'],
			"presentdays"=>$_POST['presentdays']
			);
		$this->Hr_model->savesalary($alldata);
		echo "Salary Processed Successfully!";
	}	
	
	public function deletepayslip(){
		$salaryid = $this->uri->segment(4);
		$this->Hr_model->deletepayslip($salaryid);
		header("Location:".BASEURL."hr/processsalary/".$this->uri->segment(3));	
	}

	public function empleave()
	{
		$data['emp'] = $this->Hr_model->emplist();
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/empleave',$data);
		$this->load->view('footer');
	}	
	
	public function leave_details()
	{
		$empid = $this->uri->segment(3);
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/leavedetails');
		$this->load->view('footer');

	}
	
	public function leaveupdate()
	{
		$this->Hr_model->leaveupdate();
		echo "Updated Successfully";
	}

	public function getexpensetype()
	{
		$this->Hr_model->get_type_expense();
		//echo "Updated Successfully";

	}

	public function employee_all_details()
	{
		$empid = $this->uri->segment(3);
		$data['hist'] = $this->Hr_model->gethistorydetails($empid);
		$data['certification'] = $this->Hr_model->get_certificate($empid);
		$data['edu'] = $this->Hr_model->getedudetails($empid);
		$data['reference'] = $this->Hr_model->get_reference($empid);
		$data['training'] = $this->Hr_model->get_training($empid);
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/employee_all_details',$data);
		$this->load->view('footer');

	}

	public function roomrent()
	{
		$this->load->library('pagination');
		$config = [
		'base_url' => base_url('Hr/roomrent'),
		'per_page' =>3,
		'total_rows'=>$this->Hr_model->room_rows(),
		];

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['next_tag_open'] = '<li class="pg-next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="pg-prev">';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		
		$this->pagination->initialize($config);
		$data['allroomrent'] = $this->Hr_model->get_roomrent( $config['per_page'],$this->uri->segment(3));
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/roomrent',$data);
		$this->load->view('footer');

	}

	public function save_roomrent()
	{
		$roomrent=array(
			"month"=>$_POST['year'],
			"year"=>$_POST['month'],
			"paidamount"=>$_POST['amount']
			);
		$this->Hr_model->save_roomrent($roomrent);
		header("Location:roomrent");
	}

	public function otherexpense()
	{
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/otherexpense');
		$this->load->view('footer');

	}

	public function other_expense_ajax_list()
	{
		$list = $this->other_expense_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $other) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $other->month;
			$row[] = $other->year;
			$row[] = $other->type;
			$row[] = $other->amount;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->other_expense_model->count_all(),
			"recordsFiltered" => $this->other_expense_model->count_filtered(),
			"data" => $data,
			);
		//output to json format
		echo json_encode($output);
	}


	public function save_otherexpense()
	{
		$expense=array(
			"month"=>$_POST['year'],
			"year"=>$_POST['month'],
			"type"=>$_POST['type'],
			"amount"=>$_POST['amount']
			);
		$this->Hr_model->save_otherexpense($expense);
		header("Location:otherexpense");
	}

	public function waitapproval()
	{
		$data['approve'] = $this->Hr_model->get_approval();
		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/waitapproval',$data);
		$this->load->view('footer');

	}

	public function income()
	{

		$this->load->view('header');
		$this->load->view('leftnav');
		$this->load->view('hr/income');
		$this->load->view('footer');

	}

	public function save_income()
	{
		$income = array(
			"year"=>$_POST['year'],
			"month"=>$_POST['month'],
			"day"=>$_POST['day'],
			"type"=>$_POST['type'],
			"amount"=>$_POST['amount'],

			);

		$this->Hr_model->save_income($income);
		header("Location:income");
	}
	public function getchart()
	{
		$data = $this->Hr_model->getchart();
		print_r(json_encode($data,true));
	}

	public function ajax_list()
	{
		$list = $this->income_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $income) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $income->year;
			$row[] = $income->month;
			$row[] = $income->day;
			$row[] = $income->type;
			$row[] = $income->amount;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->income_model->count_all(),
			"recordsFiltered" => $this->income_model->count_filtered(),
			"data" => $data,
			);
		//output to json format
		echo json_encode($output);
	}


}

?>