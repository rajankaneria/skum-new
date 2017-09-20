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

		if(isset($data_back->{"uname"}) && isset($data_back->{"pass"}))
		{
			if(!empty($data_back->{"uname"}) && !empty($data_back->{"pass"}))
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

	public function classdiv(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");
		$class = $this->user_model->classdiv();
		if(sizeof($class) == 0)
		{
			$details = array('status'=>"0", 'message'=>"Class Not Found");
		}
		else
		{
			$details = array('status' => "1", 'message' => "Success", 'class' => $class);
		}
		echo json_encode($details);
	}

	public function admin_attendence(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if(isset($data_back->{"class"}))
		{
			if(!empty($data_back->{"class"}))
			{
				$class = $data_back -> {"class"};
				// modal call
				$details = $this->user_model->admin_attendence($class);			
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

	public function studentInsert(){

		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if( isset($data_back->{"name"}) &&
			isset($data_back->{"class"}) &&
			isset($data_back->{"rollno"}) &&
			isset($data_back->{"medium"}) &&
			isset($data_back->{"address"}) &&
			isset($data_back->{"pincode"}) &&
			isset($data_back->{"bod"}) &&
			isset($data_back->{"addmissionDate"}) &&
			isset($data_back->{"gr_no"}) &&
			isset($data_back->{"van_no"}) &&
			isset($data_back->{"re_mobile"}) &&
			isset($data_back->{"of_mobile"}) &&
			isset($data_back->{"f_name"}) &&
			isset($data_back->{"f_occupation"}) &&
			isset($data_back->{"f_mobile"}) &&
			isset($data_back->{"f_emailid"}) &&
			isset($data_back->{"m_name"}) &&
			isset($data_back->{"m_occupation"}) &&
			isset($data_back->{"m_mobile"}) &&
			isset($data_back->{"m_emailid"}))
		{
			if( !empty($data_back->{"name"}) &&
				!empty($data_back->{"class"}) &&
				!empty($data_back->{"rollno"}) &&
				!empty($data_back->{"medium"}) &&
				!empty($data_back->{"address"}) &&
				!empty($data_back->{"pincode"}) &&
				!empty($data_back->{"bod"}) &&
				!empty($data_back->{"addmissionDate"}) &&
				!empty($data_back->{"gr_no"}) &&
				!empty($data_back->{"van_no"}) &&
				!empty($data_back->{"re_mobile"}) &&
				!empty($data_back->{"of_mobile"}) &&
				!empty($data_back->{"f_name"}) &&
				!empty($data_back->{"f_occupation"}) &&
				!empty($data_back->{"f_mobile"}) &&
				!empty($data_back->{"f_emailid"}) &&
				!empty($data_back->{"m_name"}) &&
				!empty($data_back->{"m_occupation"}) &&
				!empty($data_back->{"m_mobile"}) &&
				!empty($data_back->{"m_emailid"}))
			{

				$studentData = array(
					"name" => $data_back->{"name"},
					"class" => $data_back->{"class"},
					"rollno" => $data_back->{"rollno"},
					"medium" => $data_back->{"medium"},
					"address" => $data_back->{"address"},
					"pincode" => $data_back->{"pincode"},
					"bod" => $data_back->{"bod"},
					"addmissionDate" => $data_back->{"addmissionDate"},
					"gr_no" => $data_back->{"gr_no"},
					"van_no" => $data_back->{"van_no"},
					"re_mobile" => $data_back->{"re_mobile"},
					"of_mobile" => $data_back->{"of_mobile"},
					"f_name" => $data_back->{"f_name"},
					"f_occupation" => $data_back->{"f_occupation"},
					"f_mobile" => $data_back->{"f_mobile"},
					"f_emailid" => $data_back->{"f_emailid"},
					"m_name" => $data_back->{"m_name"},
					"m_occupation" => $data_back->{"m_occupation"},
					"m_mobile" => $data_back->{"m_mobile"},
					"m_emailid" => $data_back->{"m_emailid"},
				);

				$details = $this->user_model->studentInsert($studentData);
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

	public function noticeBoardInsert()
	{
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if( isset($data_back->{"title"}) && isset($data_back->{"description"}))
		{
			if( !empty($data_back->{"title"}) && !empty($data_back->{"description"}))
			{
				$title = $data_back -> {"title"};
				$description = $data_back -> {"description"};

				$details = $this->user_model->noticeBoardInsert($title,$description);	
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

	public function noticeBoardView(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		$noticeBoard = $this->user_model->noticeBoardView();
		if(sizeof($noticeBoard) == 0){
			$details = array('status'=>"0", 'message'=>"Profile Not Found");
		}else{
			$details = array('status'=>"1", 'message'=>"Success", 'noticeBoard' => $noticeBoard);
		}
		echo json_encode($details);
	}

}
