<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('allowed') != true) {
			redirect("login");
		}
	} 
	
	function index() {
		
		
		
		$data['main_content'] = "admin_home_view";
		$this->load->view('template/admin_content', $data);
		
		
	}

}