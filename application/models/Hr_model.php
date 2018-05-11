<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr_model extends CI_Model{
	var $db;
	function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}   
	
	//employee area
	public function myleavelist()
	{
		$res = $this->db->query("select * from empleave where empid='".$this->session->userdata("userid")."'");
		return $res->result();
	}
	
	public function saveleave()
	{
		$sql ="insert into empleave(empid,fromdate,todate,total,reason,leavetype)
		values('".$this->session->userdata("userid")."', 
		'".$_POST['fromdate']."',
		'".$_POST['todate']."', 
		'".$_POST['todaldays']."',
		'".$_POST['reason']."', 
		'".$_POST['leavetype']."')";
		$this->db->query($sql);
	}
	//employee area end
	public function emplist()
	{
		$res = $this->db->query("select * from emp  where active='YES'");
		return $res->result();
	}

	
	public function inactiveemplist()
	{
		$res = $this->db->query("select * from emp where active='NO'");
		return $res->result();
	}
	
	public function saveemployee($data)
	{
		$this->db->insert("emp", $data);
		return true;
	}
	
	public function getEmpsalary($empid)
	{
		$res= $this->db->query("select * from salary where empid='$empid' order by salaryid desc");
		return $res->result();
	}
	
	public function savesalary($alldata)
	{
		$this->db->insert('salary',$alldata);
		return true;
	}
	
	public function deletepayslip($salaryid)
	{
		$res= $this->db->query("delete from salary where salaryid='$salaryid'");
		return true;
	}
	
	public function leaveupdate()
	{
		$leaveid = $_POST['leaveid'];
		$sts = $_POST['sts'];
		$sql = "update empleave set status = '$sts' where leaveid = '$leaveid'";
		$this->db->query($sql);
		return true;
	}

	public function get_type_expense()
	{
		$sql = "select type from otherexpense";
		$this->db->query($sql);
		return true;
	}
	
	public function save_education($edu)
	{
		$this->db->insert('empeducation',$edu);
		return true;
	}

	public function getedudetails($empid)
	{
		$res = $this->db->query("select * from empeducation where empid='$empid'");
		return $res->result();
	}

	public function save_training($training)
	{
		$this->db->insert('emptraining',$training);
		return true;
	}

	public function get_training($empid)
	{
		$res=$this->db->query("select * from emptraining where empid='$empid'");
		return $res->result();
	}

	public function save_employee_history($history)
	{
		$this->db->insert('emphistory',$history);
		return true;

	}
	public function gethistorydetails($empid)
	{
		$res = $this->db->query("select * from emphistory where empid='$empid'");
		return $res->result();

	}

	public function save_employee_certificate($certificate)
	{
		$this->db->insert('empcertification',$certificate);
		return true;

	}
	
	public function get_certificate($empid)
	{
		$res = $this->db->query("select * from empcertification where empid='$empid'");
		return $res->result();

	}
	public function save_employee_references($reference)
	{
		$this->db->insert('empreference',$reference);
		return true;
	}

	public function get_reference($empid)
	{
		$res = $this->db->query("select * from empreference where empid='$empid'");
		return $res->result();

	}

	public function get_adddetails($empid)
	{
		$res = $this->db->query("select t1.*,t2.*,t3.*,t4.*,t5.* from emp t1 
			left join empaddress t2 on t1.empid = t2.empid 
			left join primarycontact t3 on t2.empid = t3.empid
			left join secondarycontact t4 on t3.empid = t4.empid
			left join personalinfo t5 on t4.empid = t5.empid
			where t1.empid = '$empid'");
		return $res->row();
	}

	public function save_employee_info($einfo)
	{
		$empid = $this->input->post('txt_hidden');
		if($empid = $this->input->post('txt_hidden'))
		{
			$where = "empid = '$empid'";
			$query = $this->db->update('emp', $einfo, $where); 
		}
		else
		{
			$query = $this->db->insert('emp', $einfo, $where); 
		}
		return true;
	}

	public function save_employee_address($eaddress)
	{
		$empid = $this->input->post('txt_hidden');
		if($empid = $this->input->post('txt_hidden'))
		{
			$where = "empid = '$empid'";
			$query = $this->db->update('empaddress', $eaddress, $where); 
		}
		else
		{
			$query = $this->db->insert('empaddress', $eaddress, $where); 
		}
		return true;
	}

	public function save_primary_info($eprimaryinfo)
	{
		$empid = $this->input->post('txt_hidden');
		if($empid = $this->input->post('txt_hidden'))
		{
			$where = "empid = '$empid'";
			$query = $this->db->update('primarycontact', $eprimaryinfo, $where); 
		}
		else
		{
			$query = $this->db->insert('primarycontact', $eprimaryinfo, $where); 
		}
		return true;
	}
	public function save_secondary_info($esecondaryinfo)
	{
		$empid = $this->input->post('txt_hidden');
		if($empid = $this->input->post('txt_hidden'))
		{
			$where = "empid = '$empid'";
			$query = $this->db->update('secondarycontact', $esecondaryinfo, $where); 
		}
		else
		{
			$query = $this->db->insert('secondarycontact', $esecondaryinfo, $where); 
		}
		return true;

	}

	public function save_personal_info($personalinfo)
	{
		$empid = $this->input->post('txt_hidden');
		if($empid = $this->input->post('txt_hidden'))
		{
			$where = "empid = '$empid'";
			$query = $this->db->update('personalinfo', $personalinfo, $where); 
		}
		else
		{
			$query = $this->db->insert('personalinfo', $personalinfo, $where); 
		}
		return true;
	}

	public function save_roomrent($roomrent)
	{
		$this->db->insert('roomrent',$roomrent);
		return true;
	}

	public function get_roomrent($limit,$offset)
	{
		$res = $this->db->select('*')
						->from('roomrent')
						->limit($limit,$offset)
						->get();
		return $res->result();
	}

	public function room_rows()
	{
		$res = $this->db->select('*')
						->from('roomrent')
						->get();
		return $res->num_rows();
	}



	public function save_otherexpense($expense)
	{
		$this->db->insert('otherexpense',$expense);
		return true;
	}

	public function get_otherexpense()
	{
		$res = $this->db->query("select * from otherexpense");
		return $res->result();

	}

	public function get_approval()
	{
		$res = $this->db->query("select t1.name,t2.* from emp t1 inner join empleave t2 on t1.empid = t2.empid where status='pending';");
		return $res->result();
	}

	public function save_income($income)
	{
		$this->db->insert('income',$income);
		return true;
	}

	
	public function getchart()
	{
		$this->db->select('*');
		$query = $this->db->get('analysis');
		return $query -> result_array();
	}

	




}

?>