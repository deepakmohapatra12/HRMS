<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	  var $db;
    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }   
	public function logincheck($email,$password)
	{
		$password=md5($password);
		$res = $this->db->query("select * from emp where mobile='$email' or email='$email' and password='$password'");
		$total = $res->num_rows();
		if($total>0)
		{
			$user = $res->row();
			$data = array("userid"=>$user->empid, "name"=>$user->name, "role"=>$user->role);//create array
			$this->session->set_userdata($data);//store array data
			return true;	
		}
		else
		{
			return false;
		}
	}
}

?>