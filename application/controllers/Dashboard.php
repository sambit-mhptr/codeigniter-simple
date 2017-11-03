<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

public function __construct(){

parent::__construct();
$this->load->model('mo_dashboard', 'dasy');

}

public function index(){
$this->load->library('pagination');

$config['base_url'] = base_url('dashboard/index');
$config['total_rows'] = $this->dasy->count_rows();
$config['per_page'] = 2;
$config['uri_segment'] = 3;
$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
$config['first_tag_open'] = ' <li>';
$config['last_tag_close'] = '</li>';
$config['next_tag_open'] = ' <li>';
$config['next_tag_close'] = '</li>';
$config['prev_tag_open'] = ' <li>';
$config['prev_tag_close'] = '</li>';
$config['num_tag_open'] = ' <li>';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = ' <li class="active"><a>';
$config['cur_tag_close'] = '</a></li>';

$this->pagination->initialize($config);

$limit=$config['per_page'];
if($this->uri->segment(3)==null){$offset=0;}else{$offset=$this->uri->segment(3);}

$arr['datas']=$this->dasy->all_content($limit,$offset);

$this->load->view('view_dashboard',$arr);



}


public function create_record(){

$this->load->helper('form');
$this->load->view('vw_addrecord');


}

public function store_record(){

//print_r($this->input->post());

$this->load->library('form_validation');

if($this->form_validation->run('individual_record')){

  $arr=$this->input->post();

  if($this->dasy->insert_mo($arr)){
   
   $this->session->set_flashdata('msg_flash','Record added successfully.');
   $this->session->set_flashdata('msg_class','success');
   redirect('dashboard/index');

  }else{

  	$this->session->set_flashdata('msg_flash','Failed to add record.');
  	$this->session->set_flashdata('msg_class','danger');
    $this->create_record();
  }


}else{

	$this->create_record();
}


}

public function delete_record(){


if($this->dasy->delete_mo($this->uri->segment(3)))
{
	 $this->session->set_flashdata('msg_flash', 'Deleted Successfully.');
	    $this->session->set_flashdata('msg_class','success');

}else{

        $this->session->set_flashdata('msg_flash', 'failed to delete! please try again.'); 
        $this->session->set_flashdata('msg_class','danger');

	}

	redirect('dashboard/index');

}


public function edit_record(){

$arr['data']=$this->dasy->fetch_record($this->uri->segment(3));
$this->load->helper('form');
$this->load->view('vw_updaterecord',$arr);

}

public function update_record(){


$this->load->library('form_validation');
$arr=$this->input->post();
$id=$arr['id'];
unset($arr['id']);
if($this->form_validation->run('individual_record')){

$this->dasy->update_mo($id,$arr);

redirect('dashboard/');

}else{

		redirect('dashboard/edit_record/'.$id);
	}






}

}