<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>" media="screen">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
<div class="row">
<?php if(trim($this->session->flashdata('not_found'))!=''){?>
<p class="alert alert-danger text-center"> <?php echo ucwords($this->session->flashdata('not_found'));?>
</p>	
	<?php } ?>
</div>

 <div class="page-header">
              <h1 class="text-center">Login</h1>
            </div>
  
  <div class="row "><div class="col-md-6 col-md-offset-3">
<div class="well bs-component" >


<?php echo form_open('login/login_user',array('class'=>'form-horizontal')); ?>
  <fieldset>
    <legend>&nbsp;</legend>
    <div class="form-group">
     
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
      
    <?php echo form_input(['type'=>'email','class'=>'form-control','value'=>set_value('email'), 'placeholder'=>'E-Mail', 'name'=>'email', 'id'=>'inputEmail']) ?>
       
       <!-- <input class="form-control" id="inputEmail" placeholder="Email" type="text"> -->
       
       <?php echo form_error('email','<p class="text-danger">','</p>');?>
        
      </div>
    </div>
    <div class="form-group">
    
      <label for="inputPassword" class="col-md-2 control-label">Password</label>
   
      <div class="col-md-10">
       
       <?php echo form_input(['type'=>'password','name'=>'password','class'=>'form-control','placeholder'=>'Password','id'=>'inputPassword', 'value'=>set_value('password') ]) ?>
       
        <!-- <input class="form-control" id="inputPassword" placeholder="Password" type="password"> -->
        
        <?php echo form_error('password');?>
       
      </div>
    </div>
    
    
    
  <!--
    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Textarea</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-2 control-label">Radios</label>
      <div class="col-md-10">
        <div class="radio">
          <label>
            <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-md-2 control-label">Selects</label>
      <div class="col-md-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div> -->
    
    
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
       <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-default">Clear</button>
        
      </div>
    </div>
  </fieldset>
</form>

</div>
</div></div>
<?php //echo validation_errors('<p class="text-danger">','</p>');?>

</div>
</body>

<script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>" type="text/javascript"></script>

<?php /*?><script src="<?php echo base_url('assets/js/validation_rules.js')?>"></script><?php */?>

</html>