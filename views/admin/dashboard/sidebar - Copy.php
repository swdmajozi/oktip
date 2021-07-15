<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WEALTH NETWORK CLUB</title>


    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris-data.js"></script>


<style>
td, th {
    padding: 4px;
}

html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    background-color: #82d270;
}


</style>

<script type="text/javascript">
    
$(document).ready(function() {
    $('#table').DataTable();
} );

</script>
</head>

<body>



    <div id="wrapdper">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span>WEALTH NETWORK CLUB</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li  class="btn btn-default">
                        <a href="<?php echo base_url();?>account"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    </li>

                       
   <li  class="btn btn-primary">
                        <a href="<?php echo base_url();?>account/changepassword"><i class="fa fa-fw fa-dashboard"></i>Change Password</a>
                    </li>

   <li  class="btn btn-success">
                        <a href="<?php echo base_url();?>account/getreferers"><i class="fa fa-fw fa-dashboard"></i>My Referrals</a>
                    </li>
                      
     
                         <li  class="btn btn-info">
                                <a href="<?php echo base_url();?>account/news"><i class="fa fa-fw fa-dashboard"></i>Updates</a>
                           </li>

                              <li  class="btn btn-info">
                                <a href="<?php echo base_url();?>account/testimonials"><i class="fa fa-fw fa-dashboard"></i>Testimonials</a>
                           </li>
   <li  class="btn btn-warning">
                            <a href="<?php echo base_url();?>/auth/getuserdetails"><i class="fa fa-fw fa-user"></i>Edit Profile</a>
                        </li>
                        

    <li class="divider"></li>
                    <li  class="btn btn-danger">
                            <a href="<?php echo base_url();?>/auth/logout"><i class="fa fa-fw fa-power-off"></i> SignOut</a>
                        </li>

                     

       
      <ul class="nav navbar-nav">
     
        <li class="dropdown btn btn-info">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ALL Donations<span class="caret"></span></a>
          <ul class="dropdown-menu">
          
                              <li>
                                <a href="<?php echo base_url();?>gethelp/donatedfunds"><i class="fa fa-fw fa-dashboard"></i>Paid</a>
                            </li>

                              <li>
                                <a href="<?php echo base_url();?>gethelp/sendconfirmations"><i class="fa fa-fw fa-dashboard"></i>Confirm</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>gethelp/recievedfunds"><i class="fa fa-fw fa-dashboard"></i>Received</a>
                           </li>
            <li role="separator" class="divider"></li>

             <li>
                        <a href="<?php echo base_url();?>account/growth"><i class="fa fa-fw fa-dashboard"></i>Growth</a>
                    </li>
                  

                    
                     <li class="btn btn-default">
                        <a href="<?php echo base_url();?>gethelp/getph"><i class="fa fa-fw fa-dashboard"></i>MY PH</a>
                    </li>
 


            

      
          </ul>
   

    
        <li class="dropdown btn btn-success">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Area<span class="caret"></span></a>
          <ul class="dropdown-menu">
          

                    

<?php $donaterid = $this->session->userdata('user_id'); if($donaterid == 33 ||$donaterid == 850 ){?>
      <p>Only Admin Will See This </p>
      <li>
                                <a class="btn btn-danger" href="<?php echo base_url();?>account/completedph"><i class="fa fa-fw fa-dashboard"></i>All Donation Paid</a>
                           </li>
  <li>
                            <a class="btn btn-success"  href="<?php echo base_url();?>/account/admin"><i class="fa fa-fw fa-user"></i>UnPaid Donations</a>
                        </li>

    <li class="divider"></li>
                        <li>
                            <a class="btn btn-primary"  href="<?php echo base_url();?>/account/admin"><i class="fa fa-fw fa-power-off"></i>Allocations/Block/GH</a>
                        </li>
                        
                           <li>
                            <a class="btn btn-default"  href="<?php echo base_url();?>/account/viewusers"><i class="fa fa-fw fa-power-off"></i>Manage  Users</a>
                        </li>

                            <li>
                            <a class="btn btn-warning"  href="<?php echo base_url();?>/allocations/getallkeptfunds"><i class="fa fa-fw fa-power-off"></i>All Kept FUnds</a>
                        </li>

<?php }?>

      
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div id="page-wrapper">

            <div class="container">
  <div class="jumbotron">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                    </div>
                </div>