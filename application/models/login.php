
<?php
class Login extends CI_Model {

function validate()
{
	return "welcome";
	$config=$this->loadDatabase('vr_tpadmin');
	$db1=$this->load->database($config,TRUE);
	$uid=$_REQUEST['userid'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$db1->where('uid',$uid);
	$db1->where('username',$username);
	$db1->where('password',$password);
	//$db1->where('status',"A");
	$db1->from('customer');
	$cnt=$db1->count_all_results();	
	if($cnt==1)
	{
		$this->session->set_userdata('userid',$uid);
		$dbname="tp_".$uid;
		$this->session->set_userdata('dbname',$dbname);	
	}
	return $cnt;
}
}

