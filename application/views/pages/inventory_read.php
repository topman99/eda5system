<title>Inventory</title>
    <div class="container-fluid">
    <h3 id="read_title"><center>Inventory</center></h3>
<body> 
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <?php
              
              echo form_open('login/inventory_search','class="myclass"');
              ?>
        <div class="form-group">
            <input type="text" class="form-control" name="search_input" id="search" placeholder="Search...">
  
            <button type="submit" class="btn btn-info" name="inventory_search">Search</button>      
        </div>
    <table class="table table-bordered table-striped">  

        <thead>  
    
        <tr>  
            <th><center><strong>PO #</strong></center></th>
            <th><center><strong>PO Date</strong></center></th>
            <th><center><strong>Category</strong></center></th>
            <th><center><strong>Serial Number</strong></center></th>
            <th><center><strong>Name/Model</strong></center></th>
            <th><center><strong>Manufacturer</strong></center></th>
            <th><center><strong>Quantity</strong></center></th>
            <th><center><strong>Assigned To</strong></center></th>
            <th><center><strong>Specifications</strong></center></th>
            <th><center><strong>Item Type</strong></center></th>
            <th><center><strong>Price</strong></center></th>
            <th><center><strong>Supplier</strong></center></th>
            <th><center><strong>Status</strong></center></th>
            <th><center><strong>Color</strong></center></th>
            <th><center><strong>Remarks</strong></center></th>
            

        </tr>
        </thead>

            <?php

                foreach ($inventory_read as $row) { ?>
                <tbody>    
                 <tr>
                    <td style="font-size:14px"><?php echo ($row->purchase_order_no); ?></td>
                    <td style="font-size:14px"><?php echo ($row->purchase_order_date); ?></td>
                    <td style="font-size:14px"><?php echo ($row->category); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->serial_number); ?></td>
                    <td style="font-size:14px"><?php echo ($row->name_sh); ?></td>
                    <td style="font-size:14px"><?php echo ($row->manufacturer); ?></td> 
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td style="font-size:14px"><?php echo ($row->assigned_to); ?></td>
                    <td style="font-size:14px"><?php echo ($row->specifications); ?></td>
                    <td style="font-size:14px"><?php echo ($row->item_type); ?></td>       
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->price); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->supplier); ?></td>
                    <td style="font-size:14px"><?php echo ($row->status); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->color); ?></td>
                    <td style="font-size:14px"><?php echo ($row->remarks); ?></td>

                </tr> </tbody>
                   

          <?php      

            } ?>   
    </table>
    <center><?php echo $links; ?></center>
</div>

</div>


 
 
