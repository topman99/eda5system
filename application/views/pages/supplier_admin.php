


<title>Supplier</title>
<body>
<div class="container-fluid">
   <center> <h3 id="read_title">Suppliers</h3> </center>
    <?php if($this->session->has_userdata('success')){?>
    <div class="alert alert-success" role="alert">
    <?php
      echo $this->session->flashdata('success')?>
</div>
<?php }?>


<center><a href="<?php echo base_url() ?>index.php/supplier_add" id="a_add">Add Supplier</a></center>


       <!-- <div class="table-responsive"> this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-striped table-bordered">  
        <thead>  
    
        <tr>  
            <th><center><strong>Id</strong></center></th>
            <th><center><strong>Supplier</strong></center></th>
            <th><center><strong>Contact number</strong></center></th>
            <th><center><strong>Region</strong></center></th>
            <th><center><strong>Province</strong></center></th>
            <th><center><strong>City</strong></center></th>
            <th><center><strong>Address</strong></center></th>
            <th><center><strong>Status</strong></center></th>
            <th><center><strong>Options</strong></center></th>
        </tr>
        </thead>
  <tbody> 
            <?php if(is_array($supplier_list)) { 

                foreach ($supplier_list as $row) { ?>
                 
                 <tr>
                    <td><?php echo $row->id;?></td>  
                    <td><?php echo htmlspecialchars($row->supplier_name); ?></td>  
                    <td><?php echo htmlspecialchars($row->contact_no); ?></td>  
                    <td><?php echo htmlspecialchars($row->region); ?></td>
                    <td><?php echo htmlspecialchars($row->province); ?></td>
                    <td><?php echo htmlspecialchars($row->city); ?></td> 
                    <td><?php echo htmlspecialchars($row->address); ?></td>
                    <td><?php echo htmlspecialchars($row->status); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/edit_supplier_details/<?php echo $row->id ?>" id="a_upd" >EDIT</a><!-- |<a href="<?php echo base_url() ?>index.php/login/deletesupplier/?del=<?php echo $row->id ?>" id="a_del">DELETE</a> --></td>

                </tr> 
                   
          <?php      }

            } ?>    
    </table>
 
 
</div>
</div>
</div>