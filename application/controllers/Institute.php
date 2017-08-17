<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute  extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Institute",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "institute",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
