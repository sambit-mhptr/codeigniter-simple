<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mo_dashboard extends CI_Model{


public function all_content($limit,$offset=0){

$q=$this->db->get('mo_content',$limit, $offset);
return $q->result();

}

public function delete_mo($id){

return $this->db->delete('mo_content', array('id'=>$id) );

}

public function insert_mo(array $arr){
return $this->db->insert('mo_content',$arr);


}


public function fetch_record($id){

	$q= $this->db->get_where('mo_content', array('id'=>$id)) ;

return $q->row();
}


public function update_mo($id,$arr){


return $this->db->update('mo_content',$arr,array('id'=>$id));
 


}

public function count_rows(){

$q=$this->db->select('id')->get('mo_content');
return $q->num_rows();
}


}