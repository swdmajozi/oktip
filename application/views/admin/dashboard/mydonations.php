 
               
             <h1 class="page-header">
                           <small>Donations Needed</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Donation ID</th><th>User ID</th><th>Email Address</th><th>Date</th><th>Amount Requested</th><th>Status</th><th>Outstanding Amount</th><th>Action</th>
</thead>

<?php if(is_array($requests)){?>
<tbody>
<?php foreach ($requests as $key) {?>


    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['userid'];?></td><td><?php echo $key['email'];?></td><td><?php echo $key['datetime'];?></td><td>R <?php echo $key['amount'];?></td><td><?php echo $key['status'];?></td>
        <td>R <?php echo $key['amount']- $key['reserved_amount'];?></td>
      <!--  <td><a href="/providehelp/confirmdonation/id/<?php //echo $key['id'];?>/userid/<?php// echo $key['userid'];?>/<?php //echo $key['ref_no'];?>/<?php //echo $key['amount'];?>" class="btn btn-primary">Confirm</a></td>
<td><a href="/providehelp/cancelrequest/id/<?php //echo $key['id'];?>/userid/<?php //echo $key['userid'];?>/<?php //echo $key['ref_no'];?>/<?php //echo $key['amount'];?>" class="btn btn-primary">Cancel</a></td>
-->
    </tr>

    
<?php }?>
</tbody>

<?php }else{

echo "You  Have  No  Donations  Yet.";
}?>
</table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Donations <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
             
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>

Success!