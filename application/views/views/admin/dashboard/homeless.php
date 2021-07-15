               
             <h1 class="page-header" >
                          
                        </h1>      
                        <div class="panel panel-default">

                        <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tabl"  class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Ref#</th>
<th>Name</th>
<th>Bank</th>
<th>Date</th>
<th>Investment Period</th>
<th>Amount(R)</th>
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

<?php 

if($key['status'] =='Reserved' || $key['status'] =='Completed' || $key['status'] =='Waiting' ){}else{?>
    <tr><td>#<?php echo $key['ref_no'];?></td>
    <td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['bank_namez'];?></td>
        <td><?php echo $key['datetime'];?></td>
        <td> <?php echo $key['period'];?> Days</td>
        <td>R <?php echo $key['amount'];?></td>
   
<td>
       <a href="<?php echo base_url();?>gethelp/getorder/<?php echo $key['ref_no'];?>"onclick="return confirm('Are You Sure You Want  To Get This Order???')" class="btn btn-success">Get Order</a>
    </td>
      
    
<?php }}}else{?>
</tbody>
<?php echo "Nothing Found";}?>

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






































