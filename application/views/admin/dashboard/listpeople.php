 
             <h1 class="page-header">
                           <small>Send  Confirmation When  You  Have  Received Funds.</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
            <table id="tabl" class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Ref#</th><th>Name</th><th>Email</th><th>Bank</th><th>Date</th><th>Scheduled Payment Date</th><th>Amount Needed</th><th>Amount Outstanding</th><th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

<?php 


$total = $key['amount']- $key['reserved_amount'];

if($total == 0 || $key['status'] =='Reserved' || $key['status'] =='Completed' ){}else{?>
    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['first_name'];?><?php echo $key['last_name'];?></td><td><?php echo $key['email'];?></td><td><?php echo $key['bank_namez'];?></td><td><?php echo $key['datetime'];?></td><td><?php echo $key['scheduled_paymentdate'];?></td><td>R <?php echo $key['amount'];?></td><td>R<?php echo $total;?></td>
        
        <td><a href="/providehelp/changestatustranslist/refno/<?php echo $key['ref_no'];?>" class="btn btn-primary">list</a></td></tr>

    
<?php }}}else{?>
</tbody>
<?php echo "No  Listings  Yet";}?>

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















































































