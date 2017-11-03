<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

$config=array(

'signup'=>array(

array(
     
	 'field'=>'email',
	 'label'=>'E-Mail',
	 'rules'=>'trim|required|valid_email|is_unique[mo_registration.email]',
	 'errors'=>array(

	 'required'=>'{field} is required.',
	 'valid_email'=>'invalid {field}.',
	 'is_unique'=>'{field} already exits please login.'
	 )


     
	 ),

array(
     
	 'field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[8]',
	 'errors'=>array(
	 'min_length'=>'{field}\'s minimum length is {param}'
	 )
     
	 ),
	 
array(
     
	 'field'=>'conf_password','label'=>'Confirmation Password','rules'=>'trim|required|matches[password]'
     
	 ),


),

'login'=>array(

array(
	'field'=>'email',
    'label'=>'E-MAil',
    'rules'=>'trim|required|valid_email',
    'errors'=>array()
),
array(
    'field'=>'password',
    'label'=>'Password',
    'rules'=>'trim|required|min_length[8]',
    'errors'=>array()

	 ),
array()



	),

'individual_record'=>array(

array( 
	'field'=>'title',
	'label'=>'Title',
	'rules'=>'trim|required|min_length[2]',
	'errors'=>array()

	),

array( 
	'field'=>'description',
	'label'=>'Description',
	'rules'=>'trim|required|min_length[10]',
	'errors'=>array()

	)



	),



);

$config['error_prefix'] = '<p class="text-danger">';
$config['error_suffix'] = '</p>';