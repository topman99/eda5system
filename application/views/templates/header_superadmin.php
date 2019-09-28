<!DOCTYPE html>
<html>
  <head>
      <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">


  </head>
    <body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
          </button>
                <div  class="navbar-brand">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                        <i class="fa fa-bars"></i>
                    </a>
            <a href="#">DA5 INVENTORY</a>
                </div>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url() ?>index.php/read">Users</a></li>
          <li><a href="<?php echo base_url() ?>index.php/supplier">Suppliers</a></li>
          <li><a href="<?php echo base_url() ?>index.php/purchase_order_view">Purchase Orders</a></li>
          <li><a href="<?php echo base_url() ?>index.php/purchase_order_search">PO Search</a></li>
          <li><a href="<?php echo base_url() ?>index.php/inventory_read">Inventory</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <nav id="spy">
            <ul class="sidebar-nav nav">
                <li class="sidebar-brand">
            
              <img alt="Avatar" src="<?php echo base_url('assets/images/userpicture.png'); ?>" style="width:100px;margin-left: 8%">
          
               <a href="#"><?php echo htmlspecialchars("$firstname $lastname"); ?></a>
               <a id="logout" name= "logout" href='<?php echo base_url() ?>index.php/home/logout'>Logout</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Page content -->
       <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">


      <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        //alert(1);
    });
      </script>
     
<br>
<br>
