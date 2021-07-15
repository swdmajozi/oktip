 


 <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>Latest News!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>account/news">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>Recieved Donations!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>/gethelp/recievedfunds">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">0</div>
                                        <div>New Donations</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>providehelp">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="mailto:support@bankmyway.co.za?subject=Member Enquiry">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
               
             <h1 class="page-header">
                           <small>Donations  To  Confirm</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>
<?php if(is_array($help)){?>
<th>Donation ID</th><th>Beneficiary ID</th><th>Email Address</th><th>Date</th><th>Amount Donated</th><th>Status</th><th>Action</th>
</thead>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['user_to'];?></td><td><?php echo $key['from_address'];?></td><td><?php echo $key['date'];?></td><td>R <?php echo $key['amount_donated'];?></td><td><?php echo $key['status'];?></td>
               <td><a href="/providehelp/confirmpaymentrecived/id/<?php echo $key['id'];?>/userid/<?php echo $key['user_to'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount_donated'];?>" class="btn btn-primary">Confirm Payment</a></td> <td><a href="/providehelp/canceldonation/id/<?php echo $key['id'];?>/userid/<?php echo $key['user_to'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount_donated'];?>" class="btn btn-primary">Cancel Payment</a></td></tr>

    
<?php }?>
</tbody>
<?php }else{

echo  "No Donations To  Confirm.";
}?>
</table>
                                </div>
                                <
                            </div>
             
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>















































































