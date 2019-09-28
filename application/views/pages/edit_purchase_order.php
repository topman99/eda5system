    <title>Edit Purchase Order</title>
<div class="container-fluid">
    <h3 id="read_title"><center>Update Purchase Order</center></h3>
              

              <?php if($this->session->has_userdata('error')){?>
                     <div class="alert alert-danger" role="alert">
                     <?php
                        echo $this->session->flashdata('error')?>
                      </div>
              <?php }?>
              <?php
              echo form_open('login/edit_purchase_order','class="myclass"');
              $id_purchase_order          = $result[0]['id'];
              $purchase_order_no          = $result[0]['purchase_order_no'];
              $purchase_order_date        = $result[0]['purchase_order_date'];
              $supplier_purchase_order     = $result[0]['supplier'];
              $remarks_purchase_order     = $result[0]['remarks'];
              $author_email    	          = $result[0]['author_email'];
              $author_firstname           = $result[0]['author_firstname'];
              $author_lastname            = $result[0]['author_lastname'];
              $item_type               = $result[0]['item_type'];
              $category                   = $result[0]['category'];
              $price                      = $result[0]['price'];
              $quantity                   = $result[0]['quantity'];

              ?>
              <div class="form-signin">

                <h3><center>Update Purchase Order Form</center></h3>
                <h4><center><label>ID: <?php echo $id_purchase_order;?></label></center></h4>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_purchase_order;?>" required>
        </div> 
               <label>Purchase Order No</label>
                  <input type="text" class="form-control" name="purchase_order_no" value="<?php echo $purchase_order_no; ?>" placeholder="Manufacturer" readonly="true" />

               <label>Purchase Order Date</label>
                  <input type="text" class="form-control" name="purchase_order_date" value="<?php echo $purchase_order_date; ?>" placeholder="Lastname" readonly="true" />
                <label>Category:</label>

        <select name="category" id="category" class="form-control">
            <option value="<?php echo $category?>"><?php echo $category?></option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="Other">Other</option>
        </select>

               <label>Supplier:</label>
          <select name="supplier" id="manufacturer" class="form-control">
             <option value="<?php echo $supplier_purchase_order?>"><?php echo $supplier_purchase_order?></option>
                        <?php
                            foreach ($supplier as $res) {
                                echo "<option value='$res->supplier_name'>$res->supplier_name</option>";
                            }
                        ?>
          </select>
          <label>Quantity:</label>
            <input type="text" name="quantity" value="<?php echo $quantity?>" class="form-control" /><br>
        <label>Item Type:</label>
          <input type="text" name="item_type" value="<?php echo $item_type?>" class="form-control" /><br>

          <label>Price</label>
            <input type="text" name="price" value="<?php echo $price?>" class="form-control" /><br>

               <label>Remarks</label>
                  <input type="text" class="form-control" name="remarks" value="<?php echo $remarks_purchase_order; ?>" placeholder="remarks" /><br>

             <input type="hidden" name="author_email" value="<?php echo $email; ?>">
        <input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
        <input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
 
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