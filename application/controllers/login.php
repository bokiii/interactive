<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		if($this->session->userdata('allowed') == true) {
			redirect("admin_home");
		}
	} 
	
	function index() {
		
		$this->load->view('login_view');
		
	}
	
	function process_admin_login() {
	
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		if($username == "admin" && $password == "interactive") {
			
			$login_data = array(
				"allowed" => true
			);
			
			$this->session->set_userdata($login_data);
			
			/*echo "<pre>";
				print_r($this->session->userdata);
			echo "</pre>";*/
			
			redirect('admin_home');
			
		
		} else {
		
			$this->session->set_flashdata('error', 'Invalid username or password');
			
			redirect('login', 'refresh');
			
		}
	
	}
	
	

}