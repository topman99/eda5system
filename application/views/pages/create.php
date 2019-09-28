<title><?php echo $firstname?>: Create User Area</title>
<div class="container-fluid">
<div class="col-md-12">
              <h3 id="read_title"><center>User</center></h3>
              <center>
       <?php if($this->session->has_userdata('error')){?>
          <div class="alert alert-danger" role="alert">
          <?php
            echo $this->session->flashdata('error')?>
          </div>
      <?php }?>

      <?php if($this->session->has_userdata('success')){?>
          <div class="alert alert-danger" role="alert">
          <?php
            echo $this->session->flashdata('success')?>
          </div>
      <?php }?>
      </center>
    <?
    if(isset($message))
    {
        echo $message;
    }  
    ?>


<?php echo form_open('login/register'); ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="form-signin">
  <div class=form-group >
<h3><center>Create User</center></h3><br>
<div class="form-group">
<div class="col-md-3">
  <label>Firstname:</label>
  </div>
  <div class="col-md-9">
    <input type="text" name="firstname" class="form-control" value="" placeholder="Firstname" required  />
</div>
</div>
<br><br>
<div class="form-group">
<div class="col-md-3">
  <label>Lastname:</label>
  </div>
  <div class="col-md-9">
    <input type="text" name="lastname" class="form-control" value="" placeholder="Lastname" required />
</div>
</div>
<br><br>
<div class="form-group">
<div class="col-md-3">
  <label>Middlename:</label>
 </div>
  <div class="col-md-9"> 
    <input type="text" name="middlename" class="form-control" value="" placeholder="Middlename" required />
</div>
</div>
<br><br>
                <div class="form-group">
                     <div class="col-md-3">
                 <label>User Level:</label>
                  </div>
                  <div class="col-md-9">
                        <select name="type" class="form-control">
                          <option value="">---SELECT USER LEVEL---</option>
                          <option value="SuperAdmin">SuperAdmin</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                        </div>
                        </div>
                        <br><br>
                 <div class="form-group">
                     <div class="col-md-3">  
                  <label>Department:</label> 
                  </div>
                  <div class="col-md-9">
                        <select name="department"  class="form-control">
                          <option value="">---SELECT DEPARTMENT ---</option>
                          <option value="CTD-DEPARTMENT">CTD-DEPARTMENT</option>
                          <option value="ITD-DEPARTMENT">ITD-DEPARTMENT</option>
                          <option value="HRD-DEPARTMENT">HRD-DEPARTMENT</option>
                          <option value="BDD-DEPARTMENT">BDD-DEPARTMENT</option>
                          <option value="CSD-DEPARTMENT">CSD-DEPARTMENT</option>
                          <option value="RCD-DEPARTMENT">RCD-DEPARTMENT</option>
                          <option value="BSD-DEPARTMENT">BSD-DEPARTMENT</option>
                          <option value="ACD-DEPARTMENT">ACD-DEPARTMENT</option>
                        </select>
                        </div>
                        </div>
                        <br><br>
  <div class="form-group">
      <div class="col-md-3">               
  <label>Username:</label>
</div>
    <div class="col-md-9">
    <input type="text" name="username" class="form-control" value="" placeholder="Username" required />
</div>
</div>
<br><br>
  <div class="form-group">
      <div class="col-md-3">   
  <label>Password:</label>
</div>
    <div class="col-md-9">  
    <input type="password" name="password" class="form-control" value="" placeholder="Password" required />
    </div>
    </div>
    <br><br>

   <div class="form-group">
      <div class="col-md-3">  
  <label>Email:</label>
  </div>
    <div class="col-md-9">  
    <input type="email" name="email" value="" class="form-control" placeholder="Email" required />
    </div>
    </div>
    <br>
    <input name="dateregistered" class="form-control" type="hidden" id="dateregistered" value="<?php echo date('Y-m-d');?>" readonly="true" /><br>
                <center><button type="submit" name="register" class="btn btn-success"  value="Register" >Register</button></center>
   </div>
              <?php echo form_close() ?>



        <div class="col-md-4"></div>
</form>
</div><!--form-signin -->
</div><!--col -12-->
</div><!--container-fluid -->
