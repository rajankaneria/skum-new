<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mission_eklavya   extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Mission Eklavya ",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "mission_eklavya",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
