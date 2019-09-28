    <title>Search Purchase Order</title>
<div class="container-fluid">
              <center><h3 id="read_title">Search Purchase Order No.</h3></center>
              <div id="form_1">
              <h3>Input PO no.</h3>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/purchase_order_search','class="myclass"');
              ?>
                <div class="form-group row">  
            <input type="text" id="input_1" name="purchase_order_no" class="form-control" placeholder="Po no." value="" required>
           </div> 


                <center><button type="submit" name="submit" id="a_upd" value="submit">Search</button></center><br>
                <?php
    
    if(isset($message))
    {
        echo $message;
    }  
    ?>
              <?php echo form_close() ?>

            </div>
  </div>

        <div class="col-md-4"></div>