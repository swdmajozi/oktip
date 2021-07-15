 
 
               
             <h1 class="page-header">
                           <small>Allocations</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>
<?php if(is_array($help)){?>
<th>Ref#</th><th>Name</th><th>Bank</th><th>Bank-Acc#</th><th>Mobile#</th><th>Email</th><th>Date</th><th>Amount</th><th>Status</th>
</thead>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref_no'];?></td>
    <td><?php echo $key['first_name'];?></td>
    <td><?php echo $key['bank_namez'];?></td>
    <td><?php echo $key['account_numberz'];?></td>
    <td><?php echo $key['phone'];?></td>
    <td><?php echo $key['email'];?></td>
    <td><?php echo $key['date'];?></td>
    <td>R <?php echo $key['amount_donated'];?></td>
<td><?php echo $key['status'];?></td><?php if($key['status'] == 'Paid' || $key['status'] == 'Cancelled' || $key['status'] == 'Completed'){}else{?>
           <?php }?><!--<td><a href="/providehelp/canceldonation/id/<?php// echo $key['id'];?>/userid/<?php //echo $key['user_to'];?>/<?php //echo $key['ref_no'];?>/<?php //echo $key['amount_donated'];?>" class="btn btn-primary">Cancel Donation</a></td>--></tr>

    
<?php }?>
</tbody>
<?php }else{

echo  "Nothing Found";
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








































