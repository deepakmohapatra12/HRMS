<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{


	public function logincheck($email,$password)
	{
		$res = $this->db->query("select * from adminuser where email='$email' and password = '$password'");

		$total = $res->num_rows();

		if($total>0)
		{
			$user = $res->row();
						$data = array("ID"=>$user->id, "NAME"=>$user->name);//create array
						$this->session->set_userdata($data);//store array data
						return true;	
					}
					else
					{
						return false;
					}
	}

				public function getBlog()
				{
					$this->db->order_by('created_at','desc');
					$query = $this->db->get('tbl_blogs');
					if($query->num_rows()>0){
						return $query->result();
					}else{
						return false;
					}
				}

				public function submit($title,$description,$photo)
				{

					$sql="insert into tbl_blogs(title,description,photo,status) values('$title','$description','$photo','$sts')";
					$this->db->query($sql);
					return true;

				}


				public function getBlogById($id)
				{
					$this->db->where('id',$id);
					$query = $this->db->get('tbl_blogs');
					if($query->num_rows()>0){
						return $query->row();
					}else{
						return false;
					}
				}

				public function update($txt_hidden,$title,$description,$sts)
				{
					if(!empty($_FILES['photo']['name']))
					{
		$photo=$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],'assets/images/'.$photo);
		$sql = "update tbl_blogs set title='$title',description='$description',photo='$photo',status='$sts' where id='$txt_hidden'";
					}else{
						$sql = "update tbl_blogs set title='$title',description='$description',status='$sts' where id='$txt_hidden'";
					}
		
		
		$this->db->query($sql);
		return true;



	}


	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_blogs');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


}

?>