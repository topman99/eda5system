
<title>Purchase Orders</title>
<body>
    <div class="container-fluid">
    <h3 id="read_title"><center>Purchase Orders</center></h3> 
     <?php if($this->session->has_userdata('success')){?>
                     <div class="alert alert-success" role="alert">
                     <?php
                        echo $this->session->flashdata('success')?>
                      </div>
              <?php }?>
   <center> <a href="<?php echo base_url() ?>index.php/purchase_order" id="a_add">Create New Purchase Order</a></center>
<table class="table table-striped table-bordered" >

        <thead>  
    
        <tr>  
            <th><center><strong>PO no.</strong></center></th>
            <th><center><strong>PO Order Date</strong></center></th>
            <th><center><strong>Category</strong></center></th>
            <th><center><strong>Supplier</strong></center></th>
           <!--  <th>Name/Model</th> -->
            <th><center><strong>Quantity</strong></center></th>
            <th><center><strong>Item Type</strong></center></th>
            <th><center><strong>Price</strong></center></th>
            <th><center><strong>Remarks</strong></center></th>
            <th><center><strong>Options</strong></center></th>
            

        </tr>
        </thead>
        <tbody>

            <?php if(is_array($purchase_order_list)) { 

                foreach ($purchase_order_list as $row) { ?>
                    
                 <tr> 
                    <td><?php echo htmlspecialchars($row->purchase_order_no); ?></td> 
                    <td><?php echo htmlspecialchars($row->purchase_order_date); ?></td>
                    <td><?php echo htmlspecialchars($row->category); ?></td>
                    <td><?php echo htmlspecialchars($row->supplier); ?></td>
                    <!--<td><?php echo htmlspecialchars($row->name_sh); ?></td> -->
                    <td><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td><?php echo htmlspecialchars($row->item_type); ?></td>
                    <td><?php echo htmlspecialchars($row->price); ?></td>
                    <td><?php echo htmlspecialchars($row->remarks); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/edit_purchase_order_details/<?php echo $row->id ?>" id="a_upd">EDIT</a>
                        | <a href="<?php echo base_url() ?>index.php/login/deletepurchaseorder/?del=<?php echo $row->id ?>" id="a_del">DELETE</a></td>
                </tr> 
                   

          <?php      }

            } ?>
            </tbody>   
    </table>



</div>