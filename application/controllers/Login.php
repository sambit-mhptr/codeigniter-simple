<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->model('mo_login','logy');

	}

public function index(){

$this->load->view('view_login');

}

public function login_user(){

	$this->load->library('form_validation');

	if($this->form_validation->run('login')){
	
	$eml=$this->input->post('email');
	$pss=md5($this->input->post('password'));

	if($this->logy->check_user($eml,$pss)){
       //create session
        $this->session->set_userdata('user_name',$eml);
        redirect('dashboard/index');

	}else{
           //user not found. try again.
		$this->session->set_flashdata('not_found','user not found! please try again.');
        $this->index();

	}

	}else{
		
		$this->index();

	}

}

}


