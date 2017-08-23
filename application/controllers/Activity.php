<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity  extends CI_Controller {

	
	public function index()
	{		
		/*$this->load->model("image_model");*/
		$headerData = array(
			"pageTitle" => "Activity ",
			"stylesheet" => array("dashboard.css","activity.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js","activity.js")
		);
		$viewData = array(
			"viewName" => "activity",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
