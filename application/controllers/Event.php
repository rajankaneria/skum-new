<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event  extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Event ",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "event",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
