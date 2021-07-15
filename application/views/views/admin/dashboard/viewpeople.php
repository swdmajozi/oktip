          <style>.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    background-color: black;
}</style>         
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
                           <small>Donations Needed</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table style="color:white;"class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Donation ID</th><th>User ID</th><th>Email Address</th><th>Date</th><th>Amount Requested</th><th>Status</th><th>Outstanding Amount</th><th>Action</th>
</thead>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['userid'];?></td><td><?php echo $key['email'];?></td><td><?php echo $key['datetime'];?></td><td>R <?php echo $key['amount'];?></td><td><?php echo $key['status'];?></td>
        <td>R <?php echo $key['amount']- $key['reserved_amount'];?></td>
        <td><a href="/providehelp/getuserdetails/id/<?php echo $key['id'];?>/userid/<?php echo $key['userid'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount'];?>" class="btn btn-primary">Donate</a></td></tr>

    
<?php }?>
</tbody>
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

<style>.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    color: #fff;
}</style>




































