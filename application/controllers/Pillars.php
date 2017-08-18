<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pillars  extends CI_Controller {
	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Pillars ",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "pillars",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
