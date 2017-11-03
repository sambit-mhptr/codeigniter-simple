<?php include('header.php');?>
 <div class="page-header">
              <h1 class="text-center">Registration Form</h1>
            </div>
  
<div class="well bs-component">


<?php echo form_open('registration/create_user',array('class'=>'form-horizontal')); ?>
  <fieldset>
    <legend></legend>
    <div class="form-group">
     
      <label for="inputEmail" class="col-md-2 control-label">Email</label>
      <div class="col-md-10">
      
       <?php echo form_input(array('type'=>'email','class'=>'form-control','placeholder'=>'Email','id'=>'inputEmail','name'=>'email','value'=>set_value('email')));?>
       
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
    
    <div class="form-group">
     
      <label for="cinputPassword" class="col-md-2 control-label">Confirm Password</label>
      <div class="col-md-10">
       
       <?php echo form_input(['type'=>'password','name'=>'conf_password','class'=>'form-control','placeholder'=>'Confirm Password','id'=>'cinputPassword', 'value'=>set_value('conf_password') ]) ?> 
       
        <!-- <input class="form-control" id="inputPassword" placeholder="Password" type="password"> -->
        
        <?php echo form_error('conf_password', '<p class="text-danger">','</p>');?>
       
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

<?php //echo validation_errors('<p class="text-danger">','</p>');?>

<?php include('footer.php');?>