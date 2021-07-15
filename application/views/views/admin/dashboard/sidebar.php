<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>IMBEWU INVESTORS</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
      <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sb-admin-charts.min.js"></script>

    <style type="text/css">
     .admin {width: 100%;}


#mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
    background: #1b204c;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
    color: #fff;

}

.bg-dark {
    background-color: #1b204c !important;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
    color: #fff !important;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
    color: #fff !important;
}
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    background-color: #f5f5f5;
    display: none !important;
}

body, button, span.date_label, .timeline_items li h3 span, input[type="submit"], input[type="reset"], input[type="button"], input[type="text"], input[type="password"], input[type="tel"], input[type="email"], textarea, select, .offer_li .title h3 {
    font-family: "Poppins", Arial, Tahoma, sans-serif;

    font-size: 12px;
    text-transform: uppercase;
}


#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    background: #fcd800;
}
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
 <h4>
IMBEWU "THE SEED" INVESTORS
 </h4>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url();?>account">
            <br>
    
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">IMBEWU INVESTORS- Dashboard</span>

          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url();?>account/changepassword">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url();?>auth/getuserdetails">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url();?>account/getreferers">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">My Sponsors</span>
          </a>
        </li>

      <!--    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php //echo base_url();?>gethelp/homeless">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Homeless PH</span>
          </a>
        </li>-->

     
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">All My Donations</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
                                <a href="<?php echo base_url();?>gethelp/donatedfunds"><i class="fa fa-fw fa-dashboard"></i>All Donated Funds</a>
                            </li>

                              <li>
                                <a href="<?php echo base_url();?>gethelp/sendconfirmations"><i class="fa fa-fw fa-dashboard"></i>Confirm Recieved Funds</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>gethelp/recievedfunds"><i class="fa fa-fw fa-dashboard"></i>All Received</a>
                           </li>
            <li role="separator" class="divider"></li>

             <li>
                        <a href="<?php echo base_url();?>account/growth"><i class="fa fa-fw fa-dashboard"></i>Growths</a>
                    </li>
                  

                    
                     <li>
                        <a href="<?php echo base_url();?>gethelp/getph"><i class="fa fa-fw fa-dashboard"></i>All My PH</a>
                    </li>
 

          </ul>
        </li>


<?php $donaterid = $this->session->userdata('user_id'); if($donaterid == 442 ||$donaterid ==  1 ||$donaterid == 303){?>
      <p style="color:#fff;">Only Admin Will See This </p>
      <li>

                                <a class="btn admin btn-danger" href="<?php echo base_url();?>account/completedph"><i class="fa fa-fw fa-dashboard"></i>All Donation Paid</a>
                           </li>
  <li>
                            <a class="btn admin btn-success"  href="<?php echo base_url();?>/gethelp/adminconfirmation"><i class="fa fa-fw fa-user"></i>Confirm 4 Users</a>
                        </li>

    <li class="divider"></li>
                        <li>
                            <a class="btn admin btn-primary"  href="<?php echo base_url();?>/account/admin"><i class="fa fa-fw fa-power-off"></i>Allocations</a>
                        </li>
                        
                           <li>
                            <a class="btn admin btn-success"  href="<?php echo base_url();?>/account/viewusers"><i class="fa fa-fw fa-power-off"></i>Acivate/Deactivate<</a>
                        </li>

                            <li>
                            <a class="btn admin btn-warning"  href="<?php echo base_url();?>/account/getunpaidorders"><i class="fa fa-fw fa-power-off"></i>Confirm Orders</a>
                        </li>

                               <li>
                            <a class="btn admin btn-success"  href="<?php echo base_url();?>/account/viewuserscrud"><i class="fa fa-fw fa-power-off"></i>Manage  Users</a>
                        </li>



<?php }?>




      </ul>
  
    <ul class="navbar-nav ml-auto">
   <li>
 <a class="navbar-brand" href="index.html"><p>Hi :) , <?php echo @$first_name?></p></a></li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>/auth/logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
    