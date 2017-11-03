<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mo_registration extends CI_Model{


public function insert_regy(array $arr){

return $this->db->insert('mo_registration',$arr); //returns affected rows here and also with insert_batch function

}


}