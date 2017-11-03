<?php include('header.php');?>

<div class="row">
<?php if(trim($this->session->flashdata('msg_flash'))!=''):?>

<div class="alert alert-dismissible alert-<?php echo $this->session->flashdata('msg_class')?> text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php echo ucwords($this->session->flashdata('msg_flash'));?>
</div>
	
	
	<?php endif;?>
</div>

 <div class="page-header">
              <h1 class="text-center">Manage Content</h1>
</div>


<div class="row"> <div class="col-md-5 col-md-offset-6"><a class="btn btn-md btn-primary pull-right" href="<?php echo base_url('dashboard/create_record');?>">ADD NEW</a>
</div>
</div>
<br>
<table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th width="100">#</th>
      <th width="150">Title</th>
      <th width="250">Description</th>
      <th width="100">Action</th>
    </tr>
  </thead>
  
  <tbody>
   
 <?php 
	  if(isset($datas[0]->id)):
	  $count=$this->uri->segment(3);
	foreach($datas as $data):?>
	  
<tr>
      <td><?php echo ++$count; ?></td>
      <td><?php echo $data->title ?></td>
      <td><div><?php echo $data->description ?></div></td>
      <td><div class="row">
      <div class="col-md-3 col-md-offset-3"><a class="actn" href="<?php echo base_url("dashboard/delete_record/$data->id") ?>"><i class="fa fa-trash-o actn"></i></a></div>
      <div class="col-md-3 "><a class="actn" href="<?php echo base_url("dashboard/edit_record/{$data->id}") ?>"><i class="fa fa-pencil-square actn"></i></a></div>
      </div>
      </td>
</tr>
  
	<?php
	  endforeach;
	  else: echo '<tr><td class="text-center" colspan="4">No Records Found.</td></tr>';
	 endif;?>  
  </tbody>
  

</table> 
<?php echo $this->pagination->create_links(); ?>
<?php include('footer.php');?>