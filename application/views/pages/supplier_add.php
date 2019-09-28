<title>Add Supplier</title>
<div class="container-fluid">
<div class="col-md-12">
    <h3 id="read_title"><center>Supplier</center></h3>
    <center>
     <?php if($this->session->has_userdata('error')){?>
    <div class="alert alert-danger" role="alert">
    <?php
      echo $this->session->flashdata('error')?>
</div>
<?php }?>

 <?php if($this->session->has_userdata('errors')){?>
    <div class="alert alert-danger" role="alert">
    <?php
      echo $this->session->flashdata('errors')?>
</div>
<?php }?>
</center>

        <?php echo form_open('login/supplier_add'); ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-signin">
             <div class=form-group >
        
                 <h3><center>Add Supplier</center></h3><br>
              <div class="form-group">
            <div class="col-md-3">
                        <label>Supplier:</label>
                </div>
                <div class="col-md-9">
                            <input type="text" name="supplier_name" value="" placeholder="Supplier" class="form-control" />
                </div>
                </div>
                <br>
                <br>
                <div class="form-group">
            <div class="col-md-3">
                        <label>Contact:</label>
                    </div>
                    <div class="col-md-9">
                            <input type="text" name="contact_no" value="" placeholder="Contact No." class="form-control"/>
                    </div>
                    </div>
                    <br>
                    <br>

                       <div class="form-group">
            <div class="col-md-3">
                        <label>Region:</label>
                    </div>
                    <div class="col-md-9">
                            <input type="text" name="region" value="" placeholder="Region" class="form-control"/>
                        </div>
                        </div>
                        <br>
                        <br>
         <div class="form-group">
            <div class="col-md-3">
                        <label>Province:</label>
                    </div>
                    <div class="col-md-9">
                            <input type="text" name="province" value="" placeholder="Province" class="form-control" />
                            </div>
                            </div>
                            <br>
                            <br>

                        <div class="form-group">
            <div class="col-md-3">
                        <label>City:</label>
                          </div>
                    <div class="col-md-9">
                            <input type="text" name="city" value="" placeholder="City" class="form-control" />
                            </div>
                            </div>
                            <br>
                            <br>
                <div class="form-group">
                    <div class="col-md-3">
                        <label>Address:</label> 
                          </div>
                    <div class="col-md-9"> 
                            <input type="text" name="address" value="" placeholder="Address" class="form-control"/>
                        </div>
                        </div>
                        <br>
                        <br>
                              <div class="form-group">
                    <div class="col-md-3"> 
                        <label>Status:</label>
                        </div>
                      <div class="col-md-9">    
                           
                                <select name="status" class="form-control">
                                    <option value="active">active</option>
                                    <option value="not-active">not-active</option>
                                </select>
                            </div> 
                            </div>
                            <br>
                            <br> 

                    <center><button type="submit" name="supplier_add" value="Supplier_add" class="btn btn-success">Add</button></center>

        
                </div>
    <?php echo form_close() ?>

</div><!--form-signin -->
</div><!--col -12-->
</div><!--container-fluid -->
<div class="col-md-4"></div>

