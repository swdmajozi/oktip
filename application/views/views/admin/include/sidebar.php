<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);
?>  

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image"></br>
          <img src="<?= base_url() ?>public/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo "Hi, ". $admin->first_name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="display:nsone;">
       
         <li id="add_user" ><a  class="btn btn-danger" href="<?php echo site_url('dashboard/donate'); ?>">
          <i class="fa fa-circle-o"></i>Start Bid Here</a></li>
         <li id="add_user" ><a  class="btn btn-success" href="<?php echo site_url('dashboard/editprofile'); ?>">
          <i class="fa fa-circle-o"></i>Edit Profile</a></li>
         <li id="add_user"  ><a class="btn btn-warning" href="<?php echo site_url('dashboard/duetoyou'); ?>">
          <i class="fa fa-circle-o"></i>Due To you</a></li>
           <li id="add_user" ><a  class="btn btn-danger" href="<?php echo site_url('dashboard/paymentsoutstanding'); ?>">
            <i class="fa fa-circle-o"></i>Outstanding</a></li>
           
             <li id="add_user"  ><a class="btn btn-success" href="<?php echo site_url('dashboard/bucksalert'); ?>">
              <i class="fa fa-circle-o"></i>Bucks Alerts</a></li>
              <li id="add_user"  ><a class="btn btn-primary" href="<?php echo site_url('dashboard/paymenthistory'); ?>">
              <i class="fa fa-circle-o"></i>Transaction History</a></li>
  <li id="add_user" ><a   class="btn btn-danger" href="<?php echo site_url('dashboard/getreferrals'); ?>">
                <i class="fa fa-circle-o"></i>Bidding Bonuses</a></li>
 
             <li id="add_user"  ><a class="btn btn-success" href="<?php echo site_url('auth/change_password'); ?>">
              <i class="fa fa-circle-o"></i>Change Password</a></li>


 
 
      </ul>
<?php $userid= $this->session->userdata('user_id');

 if($userid == 72 ||$userid ==  34 ||$userid ==  1){?>
<p style="color:#fff !important; font-size: 12px;">Admin Panel </p>
 <ul class="sidebar-menu" style="display:nodne;">
       <li id="add_user"><a href="<?php echo site_url('dashboard/addcoins'); ?>"><i class="fa fa-circle-o"></i>Add Bucks</li>

         <li id="add_user"><a href="<?php echo site_url('auth/user_list'); ?>"><i class="fa fa-circle-o"></i>Manage Users</a></li>
         <li id="add_user"><a href="<?php echo site_url('dashboard/adminpaymenthistory'); ?>"><i class="fa fa-circle-o"></i>Orders History</a></li>
           <li id="add_user"><a href="<?php echo site_url('dashboard/adminoutstandingorders'); ?>"><i class="fa fa-circle-o"></i>Pending Payments</a></li>

            <li id="add_user"><a href="<?php echo site_url('dashboard/bucksalertadmin'); ?>"><i class="fa fa-circle-o"></i>Buck Alert</a></li>

                   <li id="add_user"><a href="<?php echo site_url('dashboard/adminconfirm'); ?>"><i class="fa fa-circle-o"></i>Confirm Payments</a></li>


 
 
      </ul>
   
<?php }?>


         <!-- Logout    -->
        <ul class="sidebar-menu">
          <li>

              <a href="<?php echo site_url('auth/logout'); ?>">

                  <i class="fa fa-sign-out"></i> <span>Logout</span>

              </a>

          </li>

      </ul>


        </ul>


    </section>
    <!-- /.sidebar -->
  </aside>

  
<script>
  $("#<?= $cur_tab; ?>").addClass('active');
</script>

<style type="text/css">
  

body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    text-transform: uppercase !important;
    background-color: #fff;
}

.skin-blue .main-header .navbar .nav>li>a {
    color: #fff;
    display: none !important;
}

</style>>
