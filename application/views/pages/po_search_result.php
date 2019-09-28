<?php

 foreach ($results as $row) { 


}    
?>
<div class="container-fluid">
	<h3 id="read_title"><center>Purchase Order</center></h3>

	 <?php if($this->session->has_userdata('success')){?>
                     <div class="alert alert-success" role="alert">
                     <?php
                        echo $this->session->flashdata('success')?>
                      </div>
              <?php }?>
<div class="form-signin">
	<h3><center>Purchase Order Details</center></h3><br>
	<label><b>Purchase Order NO. :</b> &nbsp; <?php echo $row->purchase_order_no; ?></label><br>
	<label><b>Category:</b> &nbsp; <?php echo $row->category; ?></label><br>
	<label><b>Item Type:</b> &nbsp; <?php echo $row->item_type?></label><br>
	<label><b>Supplier:</b> &nbsp; <?php echo $row->supplier?></label><br>
	<label><b>Total Price: </b> &nbsp; <?php echo $row->price?></label><br>


	<hr id='po_div_line2'>
			<?php //echo validation_errors(); ?>
				<?php echo form_open('login/purchase_order_add_info'); ?>

				   	<?php 
    for ($i = 0; $i < $row->quantity; $i++) { 
    	$price2 = $row->price / $row->quantity;
        echo 	"<!--<label>Purchase Order No.:</label>-->
					<input type='hidden' name='purchase_order_no[]' value='$row->purchase_order_no' id='po_no' readonly='true' />";
		echo 	"<!--<label>Purchase Order Date:</label>-->
					<input type='hidden' name='purchase_order_date[]' value='$row->purchase_order_date' id='po_date' readonly='true' /><br>";
		echo    "<!--<label>Category:</label>-->
					<input type='hidden' name='category[]' value='$row->category' readonly='true'/>";

		echo 	"<div class='col-md-4'>
					<label><b>Serial Number:</b></label>
				</div>
					<div class='col-md-8'>
					<input type='text' name='serial_number[]' class='form-control' required /> &nbsp;&nbsp;
					</div>";

		echo 	"<!--<label><b>Supplier:</b></label>-->
					 	<input type='hidden' name='supplier[]' value='$row->supplier' id='' readonly='true'/><br>";
		echo 	"<hr id='po_div_line'>";
		
		echo 	"<div class='col-md-4'>
					<label><b>Name/Model:</b></label>
				</div>
					<div class='col-md-8'>
					<input type='text' name='name_sh[]' value='' class='form-control' required /> &nbsp;&nbsp;
					</div>";

		echo 	"<div class='col-md-4'>
					<label><b>Manufacuturer:</b></label>
				</div>
				<div class='col-md-8'>
					<input type='text' name='manufacturer[]' value='' id='' class='form-control' required/>
				</div>";

		echo 	"<div class='col-md-4'>
					<label><b>Quantity:</b></label>
				</div>
				<div class='col-md-8'>
				    <input type='text' name='quantity[]' value='1' id='quantity' readonly='true' class='form-control' required />
				</div>";


		echo 	"<div class='col-md-4'>
					<label><b>Assigned to:</b></label>
				</div>
				<div class='col-md-8'>
		    			<input type='text' name='assigned_to[]' id='amount' class='form-control' required /> 
		    	</div>";

		echo 	"<!--<label>Item Type:</label>--> 
						<input type='hidden' name='item_type[]' value='$row->item_type' id='amount' readonly='true'/><br>";


		echo 	"<div class='col-md-4'>
					<label><b>Specifications:</b></label>
				</div>
				 <div class='col-md-8'>
						<textarea rows='4' cols='50' name='specifications[]' value='' id='remarks_po' class='form-control' required ></textarea>
				 </div>";

		echo 	"<div class='col-md-4'>
					<label><b>Price:</b></label>
				</div>
				<div class='col-md-8'>
				    	<input type='text' name='price[]' value='$price2' id='amount' class='form-control' readonly='true'/>
				 </div>";

		echo 	"<div class='col-md-4'>
					<label><b>Status</b></label>
				</div>
				<div class='col-md-8'>
						<select name='status[]' id='category' class='form-control'>
						<option value='Working'>Working</option>
						<option value='Defective'>Defective</option>
						<option value='Spare'>Spare</option>
				    </select></div>";


		echo 	"<div class='col-md-4'>
					<label><b>Color:</b></label>
				</div>
				<div class='col-md-8'>
					<input type='text' name='color[]' value='' id='amount' class='form-control' required /><br><br>
				</div>";

		echo 	"<input type='hidden' name='remarks[]' value='$row->remarks'>";
		echo 	"<input type='hidden' name='author_email[]' value='$row->author_email'>";
		echo 	"<input type='hidden' name='author_firstname[]' value='$row->author_firstname'>";
		echo 	"<input type='hidden' name='author_lastname[]' value='$row->author_lastname'>";
        echo 	"<br><hr id='po_div_line2'>";
        echo    "<input type='hidden' name='quantity2' value='$row->quantity'>";
    }
?>

					
					<button type="submit" name="purchase_order" value="purchase_order" id="submit" >Submit</button>
				<?php echo form_close() ?>
</div>
</div>