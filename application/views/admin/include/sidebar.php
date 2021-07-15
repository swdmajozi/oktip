<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);
?>  

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
   
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" style="display:ndone;">
       
         <li id="add_user" ><a  class="btn" href="<?php echo site_url('dashboard/donate'); ?>">
          <i class="fa fa-circle-o"></i>Start Bid Here</a></li>
         <li id="add_user" ><a  class="btn " href="<?php echo site_url('dashboard/editprofile'); ?>">
          <i class="fa fa-circle-o"></i>Edit Profile</a></li>
         <li id="add_user"  ><a class="btn" href="<?php echo site_url('dashboard/duetoyou'); ?>">
          <i class="fa fa-circle-o"></i>Due To you</a></li>
           <li id="add_user" ><a  class="btn" href="<?php echo site_url('dashboard/paymentsoutstanding'); ?>">
            <i class="fa fa-circle-o"></i>Outstanding</a></li>
           
             <li id="add_user"  ><a class="btn" href="<?php echo site_url('dashboard/bucksalert'); ?>">
              <i class="fa fa-circle-o"></i>Coins Alerts</a></li>
              <li id="add_user"  ><a class="btn" href="<?php echo site_url('dashboard/paymenthistory'); ?>">
              <i class="fa fa-circle-o"></i>Transaction History</a></li>
  <li id="add_user" ><a   class="btn" href="<?php echo site_url('dashboard/getreferrals'); ?>">
                <i class="fa fa-circle-o"></i>Bidding Bonuses</a></li>
 
             <li id="add_user"  ><a class="btn" href="<?php echo site_url('auth/change_password'); ?>">
              <i class="fa fa-circle-o"></i>Change Password</a></li>


 
 
      </ul>
<?php $userid= $this->session->userdata('user_id');

 if($userid == 72 ||$userid ==  1){?>
<p>Admin Panel only  admin  see  this</p>
 <ul class="sidebar-menu" style="display:nodne;">
       <li id="add_user"><a href="<?php echo site_url('dashboard/addcoins'); ?>"><i class="fa fa-circle-o"></i>Add Coins</li>

         <li id="add_user"><a href="<?php echo site_url('auth/user_list'); ?>"><i class="fa fa-circle-o"></i>Manage Users</a></li>
         <li id="add_user"><a href="<?php echo site_url('dashboard/adminpaymenthistory'); ?>"><i class="fa fa-circle-o"></i>Orders History</a></li>
           <li id="add_user"><a href="<?php echo site_url('dashboard/adminoutstandingorders'); ?>"><i class="fa fa-circle-o"></i>Pending Payments</a></li>

            <li id="add_user"><a href="<?php echo site_url('dashboard/bucksalertadmin'); ?>"><i class="fa fa-circle-o"></i>Coins Alert</a></li>

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
