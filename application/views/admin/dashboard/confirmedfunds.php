

 
 
             <h1 class="page-header">
                           <small>Needed Donations</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>
<?php if(is_array($help)){?>
<th>ID</th><th>User ID</th><th>Email Address</th><th>Date</th><th>Amount Needed</th><th>Status</th><th>Outstanding Amount</th><th>Action</th>
</thead>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['userid'];?></td><td><?php echo $key['email'];?></td><td><?php echo $key['datetime'];?></td><td>R <?php echo $key['amount'];?></td><td><?php echo $key['status'];?></td>
        <td>R <?php echo $key['amount']- $key['reserved_amount'];?></td>
        <td><a href="/providehelp/getuserdetails/id/<?php echo $key['id'];?>/userid/<?php echo $key['userid'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount'];?>" class="btn btn-primary">Pledge</a></td></tr>

    
<?php }?>
</tbody>
<?php }else{

echo  "Nothing Found.";
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


</body>

</html>








































