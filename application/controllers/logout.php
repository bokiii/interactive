<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->session->sess_destroy();
		redirect("login");
	} 
	
	function index() {

		
	}

}