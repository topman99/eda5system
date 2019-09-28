    <title>Edit Supplier Data</title>
<div class="container-fluid">
    <h3 id="read_title"><center>Edit Supplier</center></h3>
              <?php if($this->session->has_userdata('success')){?>
                     <div class="alert alert-success" role="alert">
                     <?php
                        echo $this->session->flashdata('success')?>
                      </div>
              <?php }?>

              <?php if($this->session->has_userdata('error')){?>
                     <div class="alert alert-danger" role="alert">
                     <?php
                        echo $this->session->flashdata('error')?>
                      </div>
              <?php }?>

              <?php
              echo form_open('login/edit_supplier','class="myclass"');
              $id_supplier          = $result[0]['id'];
              $supplier_name      	= $result[0]['supplier_name'];
              $contact_no_supplier  = $result[0]['contact_no'];
              $region_supplier     	= $result[0]['region'];
              $province_supplier    = $result[0]['province'];
              $city_supplier     	= $result[0]['city'];
              $address_supplier     = $result[0]['address'];
              $status_supplier     = $result[0]['status'];

              ?>
              <div class="form-signin">

                <h3><center>Edit Supplier Form</center></h3>
                <h4><center><label>ID: <?php echo $id_supplier;?></label></center></h4>
              
              <input type="hidden" id="id" name="id" value="<?php echo $id_supplier;?>" required>
       
               <label>Supplier</label>
                  <input type="text" class="form-control" name="supplier_name" value="<?php echo $supplier_name; ?>" placeholder="Supplier" />

               <label>Contact No.</label>
                  <input type="text" class="form-control" name="contact_no" value="<?php echo $contact_no_supplier; ?>" placeholder="Lastname" />

               <label>Region</label>
                  <input type="text" class="form-control" name="region" value="<?php echo $region_supplier; ?>" placeholder="Middlename" />

               <label>Province</label>
                  <input type="text" class="form-control" name="province" value="<?php echo $province_supplier; ?>" placeholder="Middlename" />

               <label>City</label>
                  <input type="text" class="form-control" name="city" value="<?php echo $city_supplier; ?>" placeholder="Middlename" />
               <label>Address</label>
                  <input type="text" class="form-control" name="address" value="<?php echo $address_supplier; ?>" placeholder="Middlename" />

                  <label>Status</label>
                        <select name="status" class="form-control">
                          <option value="<?php echo $status_supplier; ?>"><?php echo $status_supplier; ?></option>
                          <option value="active">active</option>
                          <option value="not-active">not-active</option>
                        </select>
                            <br>
 
                <center><button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button></center>
              <?php echo form_close() ?>
            </button>
          </div>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
</div>