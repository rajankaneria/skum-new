<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webservices  extends CI_Controller {

	
	public function activity(){

		$data_back = json_decode(file_get_contents('php://input'));	
		$month=$data_back->{"month"};
		//$month = $_POST["month"];
		$this->load->model("activity_model");
		$output = $this->activity_model->getMonthActivity($month);
		echo json_encode($output);
		
	}

	public function profile(){
		$data_back = json_decode(file_get_contents('php://input'));

		if(isset($data_back -> {"profile_id"}))
		{
			$profileID=$data_back->{"profile_id"};
			$this->load->model("user_model");
			$profile = $this->user_model->getProfile($profileID);
			if(sizeof($profile) == 0){
				$details = array('status'=>"0", 'message'=>"Profile Not Found");
			}else{
				$details = array('status'=>"1", 'message'=>"Success", 'profile' => $profile);
			}
		}else{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}
	


	public function login(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if(isset($data_back -> {"uname"}) && isset($data_back -> {"pass"}))
		{
			if(!empty($data_back -> {"uname"}) && !empty($data_back -> {"pass"}))
			{
				$uname = $data_back -> {"uname"};
				$pass = $data_back -> {"pass"};
				// modal call
				$details = $this->user_model->login($uname,$pass);			
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}


}
