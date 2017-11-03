<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_login extends CI_Model{


public function check_user($eml,$pss){

$q=$this->db->select()->from('mo_registration')->where(array('email'=>$eml,'password'=>$pss))->get();
//return $q->row();
return $q->num_rows();

}


}