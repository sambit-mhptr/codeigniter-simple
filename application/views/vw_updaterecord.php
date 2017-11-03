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
              <h1 class="text-center">Update Record</h1>
</div>
  
<div class="well bs-component">


<?php echo form_open('dashboard/update_record',array('class'=>'form-horizontal')); ?>
 <?php echo form_hidden('id',$data->id)?>
  <fieldset>
    <legend></legend>
    <div class="form-group">
     
      <label for="inputEmail" class="col-md-2 control-label">Title</label>
      <div class="col-md-10">
      
       <?php echo form_input(array('type'=>'text','class'=>'form-control','placeholder'=>'Title','id'=>'inputEmail','name'=>'title','value'=>$data->title));?>
       
       <!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
       <?php echo form_error('title','<p class="text-danger">','</p>');?>
        
      </div>
    </div>
    <div class="form-group">
    
      <label for="inputPassword" class="col-md-2 control-label">Description</label>
   
      <div class="col-md-10">
       
       <?php echo form_textarea(['class'=>'form-control','id'=>'inputPassword','placeholder'=>'Description','name'=>'description','value'=>$data->description])?>
       
        <!-- <input class="form-control" id="inputPassword" placeholder="Password" type="password"> -->
        
        <?php echo form_error('description');?>
       
      </div>
    </div>
    
    
 <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
       <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-default">Clear</button>
        
      </div>
    </div>
  </fieldset>
</form>

</div>







<?php include('footer.php');?>