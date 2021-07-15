 

               
             <h1 class="page-header">
                           <small>Donations You Have Received</small>
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
              </tr>

    
<?php }?>
</tbody>
<?php }else{

echo  "No Recieved  Funds  Yet.";
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








































