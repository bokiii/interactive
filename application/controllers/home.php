<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	} 
	
	function index() {
		
		$data['main_content'] = "home_view";
		$this->load->view('template/content', $data);
		
	}

}