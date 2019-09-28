<title>User</title>
<body>
<div class="container-fluid">
    <center><h3 id="read_title">Users</h3></center>
        <?php if($this->session->has_userdata('success')){?>
    <div class="alert alert-success" role="alert">
    <?php
      echo $this->session->flashdata('success')?>
</div>
<?php }?>

<div class="form-group">
<center><a href="<?php echo base_url() ?>index.php/create" id="a_add">Create User</a><center>
</div>

     <!--   <div class="table-responsive"> this is used for responsive display in mobile and other devices-->  
  
    <table class="table table-striped table-bordered" >  
        <thead>  
    
        <tr>  
            <th><center><strong>Id</strong></center></th>
            <th><center><strong>Firstname</strong></center></th>
            <th><center><strong>Lastname</strong></center></th>
            <th><center><strong>Middlename</strong></center></th>
            <th><center><strong>Type</strong></center></th>
            <th><center><strong>Department</strong></center></th>
            <th><center><strong>Username</strong></center></th>
            <th><center><strong>Email</strong></center></th>
            <th><center><strong>Date Registered</strong></center></th>
            <th><center><strong>Options</strong></center></th>
           
        </tr>
        </thead>

            <?php if(is_array($user_list)) { 

                foreach ($user_list as $row) { ?>
                <tbody>    
                 <tr>
                    <td><?php echo $row->id;?></td>  
                    <td><?php echo htmlspecialchars($row->firstname); ?></td>  
                    <td><?php echo htmlspecialchars($row->lastname); ?></td>  
                    <td><?php echo htmlspecialchars($row->middlename); ?></td>
                    <td><?php echo $row->type; ?></td>
                    <td><?php echo $row->department; ?></td> 
                    <td><?php echo htmlspecialchars($row->username); ?></td>
                    <td><?php echo htmlspecialchars($row->email); ?></td>
                    <td><?php echo htmlspecialchars($row->dateregistered); ?></td>
 <?php
        
              echo form_open('login/delete','class="myclass"');
              ?>
                    <td><a href="<?php echo base_url() ?>index.php/login/update/<?php echo $row->id ?>" id="a_upd">UPDATE</a></td>

<?php echo form_close() ?>

                </tr></tbody> 
                   

          <?php      }

            } ?>    
    </table>
 
</div> 