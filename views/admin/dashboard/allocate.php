
               
             <h1 class="page-header" >
                          
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tabl" class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Ref#</th><th>Name</th><th>Bank</th><th>Date</th><th>Amount</th><th>Amount Outstanding</th><th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

<?php 


$total = $key['amount']- $key['reserved_amount'];

if($total == 0 || $key['status'] =='Reserved' || $key['status'] =='Completed' ){}else{?>
    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['first_name'];?></td><td><?php echo $key['bank_namez'];?></td><td><?php echo $key['datetime'];?></td><td>R <?php echo $key['amount'];?></td><td>R<?php echo $total;?></td>
        
        <td><a href="<?php echo base_url();?>/providehelp/getuserdetails/id/<?php echo $key['id'];?>/userid/<?php echo $key['userid'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount'];?>" class="btn btn-primary">Donate</a></td></tr>

    
<?php }}}else{?>
</tbody>
<?php echo "No  Listings  Yet";}?>

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
<script>

$(document).ready( function () {
    $('#tabkkl').DataTable();
} );
</script>

</html>






































