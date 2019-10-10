<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<title>DA5 Inventory - Login</title>

    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
     <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">


  </head>
  <body>
    <div class="container"  style="margin-top:100px;">

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <?php
              if(validation_errors()){
              ?>

              <center>
                <div class="alert alert-warning alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <strong><?php echo validation_errors(); ?></strong>
                </div> 
              </center>
              <?php
              }
              echo form_open('login','class="myclass"');
              ?><div >
                <h3><center><img src="<?php echo base_url('assets/images/logo5.png') ?>" width="70%" height="70%" ><br></center></h3>
                <h4><center>Electronic DA5 System</center></h4>
                <div class="form-group">
                <center>
                  <?php
                    echo form_label('Username','username');
                    echo form_input('username','','class="form-control" id="input_1" placeholder="Username"')
                  ?>
                  </center>
                </div>
                <div class="form-group">
                <center>
                  <?php
                    echo form_label('Password','password');
                    echo form_password('password','','class="form-control" id="input_1" placeholder="Password"')
                  ?>
                  </center>
                </div>
               <center><button type="submit" class="btn btn-primary" name="login" value="Login" >Login</button></center>
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
  </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>