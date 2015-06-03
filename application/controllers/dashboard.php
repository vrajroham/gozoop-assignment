<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
	{
		$this->load->view("main");
	}
	
	public function updatecount($action)
	{
		if($action!=1)
		{
			echo $this->session->userdata("play_count");	
		}
		else{
	   		$count=$this->session->userdata("play_count");
	   		$count++;
	   		$this->session->set_userdata("play_count",$count);
	   		echo $count;
		}
	}
	
	public function enduser($time)
	{
		$data=array("count"=>3,"stamp"=>$time);
		$this->db->where('email', $this->session->userdata("current_email"));
		$this->db->update('users', $data); 
		$this->session->sess_destroy();
		echo "expired";
	}
	public function signout()
	{
				$this->session->sess_destroy();
				redirect("welcome");
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */