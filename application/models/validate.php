
<?php
class Validate extends CI_Model {


	function login()
	{
		$name=trim($_REQUEST['name']);
		$email=trim($_REQUEST['email']);
		if($this->isnewuser($name,$email)==1)
		{
					$this->checktime($email);
					$this->session->set_userdata('current_email',$email);
					$this->session->set_userdata('username',$name);
					$this->session->set_userdata('play_count',0);
					echo "login";
		}
		else
		{
					$this->adduser($name,$email);
					$this->session->set_userdata('current_email',$email);
					$this->session->set_userdata('username',$name);
					$this->session->set_userdata('play_count',0);
					echo "added";
		}
		
	}
	function isnewuser($name,$email)
	{
		$this->db->where('email', $email);
		$this->db->from('users');
		return $this->db->count_all_results();  		
	}
	
	function adduser($name,$email)
	{
		$data=array(
				'fname'=>$name,
				'email'=>$email,
				'count'=>0,
				'stamp'=>"NA");
				$this->db->insert("users",$data);
	}
	
	function checktime($email)
	{
				$this->db->where('email', $email);
				$query=$this->db->get('users');
				foreach($query->result() as $row):
					$this->session->set_userdata('stamp',$row->stamp);
				endforeach;	
	}
}