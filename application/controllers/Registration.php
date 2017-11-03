<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Registration extends MY_Controller{

function __construct(){
parent::__construct();
$this->load->model('mo_registration','regy');

}

public function index(){

	$this->load->helper('form');
	
	$this->load->view('view_registration');

}

public function create_user(){

$this->load->library('form_validation');

/*
$this->form_validation->set_error_delimeters('<p class="text-danger">','</p>');
$this->form_validation->set_rules('email','E-mail','trim|required|valid_email');
$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
$this->form_validation->set_rules('conf_password','Confirm Password','trim|required|matches[password]');
*/

if($this->form_validation->run('signup')){

	$arr=$this->input->post();
	unset($arr['conf_password']);
	$arr['password']=md5($arr['password']);
	
	/* $arr=array( 
	               'email'=>$this->input->post('email'),
                   'password'=>md5($this->input->post('password')) 
                  )

	*/

	if($this->regy->insert_regy($arr)){

    echo "Registered Successfully";


	}else{

		echo "not registered";
	}

}else{

$this->index();

return false;

}

}

};