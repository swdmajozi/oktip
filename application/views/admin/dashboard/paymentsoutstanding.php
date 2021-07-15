               
             <h1 class="page-header">
                           <small>Outstanding Payments</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Donation ID</th>
<th>Name</th>

<th>Phone</th>
<th>Date</th>
<th>Bank</th>
<th>Bank Account</th>
<th>Outstanding Amount</th>
<th>Status</th>
</thead>

<?php if(is_array($help)){?>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref'];?></td>
    	<td><?php echo $key['first_name'];?></td>
    	<td><?php echo $key['phone'];?></td>
    	<td><?php echo $key['created_date'];?></td>
    	<td><?php echo $key['bankname'];?></td>
    	<td><?php echo $key['bankaccount'];?></td>
    	<td><?php echo $key['amount'];?></td>
        <td><?php echo $key['status']?></td>
 

    </tr>

    
<?php }?>
</tbody>

<?php }else{

echo "You  Have  No  Donations  Yet.";
}?>
</table>
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