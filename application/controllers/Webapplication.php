<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webapplication extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "SKUM Application",
			"stylesheet" => array("login.css")
		);
		$footerData = array(
			"jsFiles" => array("login.js")
		);
		$viewData = array(
			"viewName" => "app-login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('app-template',$viewData);
	}
}
