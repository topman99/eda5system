
<title>Purchase Order</title>
<div class="container-fluid">
<div class="col-md-12">

	<h3 id="read_title"><center>Purchase Order</center></h3>
		<?php if($this->session->has_userdata('error')){?>
          <div class="alert alert-danger" role="alert">
          <?php
            echo $this->session->flashdata('error')?>
          </div>
          <?php }?>
			<?php echo form_open('login/purchase_order'); ?>
				
				<?php
    
    if(isset($message))
    {
        echo $message;
    }  
    ?>
    <br>
    <div class="form-signin">
      <h3><center>Create New Purchase Order</center></h3><br>
              <div class="form-group">
            <div class="col-md-5">
    <label><b>Purchase Order #:</b></label>
    </div>
    <div class="col-md-5">
				    <input type="text" name="purchase_order_no" value="" class="form-control" />
				    </div>
				    </div>
				   	<br>
				   	<br>
		<div class="form-group">
            <div class="col-md-5">
				<label><b>Purchase Order Date:</b></label>
		</div>
   			 <div class="col-md-5">
				<input type="date" name="purchase_order_date" value="" class="form-control" />
				</div>
				</div>
				<br>
				<br>
				 <hr id="po_div_line">

				<div class="form-group">
            <div class="col-md-3"> 
				<label><b>Category:</b></label>
				</div>
   			 <div class="col-md-9">
				<select name="category" id="category" class="form-control">
						<option value="">---SELECT---</option>
						<option value="Hardware">Hardware</option>
						<option value="Software">Software</option>
						<option value="Other">Other</option>
				</select>
				</div>
				</div>
				<br>
				<br>
					<div class="form-group">
            <div class="col-md-3"> 
				<label><b>Supplier:</b></label>
				</div>
   			 <div class="col-md-9">
					<select name="supplier" id="manufacturer" class="form-control">
						 <option value="">Select Supplier</option>
                        <?php
                            foreach ($supplier as $res) {
                                echo "<option value='$res->supplier_name'>$res->supplier_name</option>";
                            }
                        ?>
					</select>
					</div>
					</div>
					<br>
					<br>
			<div class="form-group">
           	 <div class="col-md-3">
				<label><b>Quantity:</b></label>
				</div>
				<div class="col-md-9">
				    <input type="text" name="quantity" value="" class="form-control" />
				   </div>
				   </div>
				   <br>
				   <br>
				   <div class="form-group">
           	 <div class="col-md-3">
				<label><b>Item Type:</b></label>
						</div>
				<div class="col-md-9">
					<input type="text" name="item_type" value="" class="form-control" />
					</div>
					</div>
					<br>
					<br>
					   <div class="form-group">
           	 <div class="col-md-3">	 
				<label><b>Price:</b></label>
				</div>
				<div class="col-md-9">
				    <input type="text" name="price" value="" class="form-control" />
				    </div>
				    </div>
				    <br>
				    <br>
		 <div class="form-group">
           	 <div class="col-md-3">	 
				<label><b>Remarks:</b></label>
				</div>
				<div class="col-md-9">
				    <textarea rows="5"  name="remarks" value="" class="form-control"></textarea><br>
				<br>
				    </div>
				    </div>
				    
				<input type="hidden" name="author_email" value="<?php echo $email; ?>">
				<input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
				<input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
				
				<center>
				
			<button type="submit" name="purchase_order" value="purchase_order"  class="btn btn-success" >Create Purchase Order</button></center>
			<?php echo form_close() ?>

</div><!--form-signin-->
</div><!--col -12-->
</div><!--container-fluid -->