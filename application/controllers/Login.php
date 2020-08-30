<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
				parent::__construct();
                $this->load->model(array());

                $this->load->database();

	}

	
	// Index login
	public function index() {
		// Fungsi Login
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		if($valid->run()) {
			$this->simple_login->login($username,$password);
		}
		// End fungsi login
		$data = array(	'title'	=> 'Halaman Login Administrator');
		$this->load->view('login_view',$data);
	}
	
	// Logout di sini
	public function logout() {
		$this->simple_login->logout();	
	}	
}