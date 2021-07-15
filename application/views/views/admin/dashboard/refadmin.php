               
             <h1 class="page-header" >
                          Only  Admin Will Be  able to see  this.
                        </h1>      
                        <div class="panel panel-default">

                        <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="tabl"  class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Ref Number </th><th>Beneficiary Name</th><th>Bank</th><th>Date</th><th>Investment  Period</th><th>Amount(R)</th><th>Bonus(R)</th><th>Maturity Days Left</th>
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

<?php 

$favcolor = $key['period'];

switch ($favcolor) {
    case "30":
        $total = $key['amount'] * 200/100;
        break;
    case "60":
        $total = $key['amount'] * 320/100;
        break;
    case "120":
        $total = $key['amount'] * 1060/100;
        break;
         case "180":
        $total = $key['amount'] * 1390/100;
        break;
         case "270":
        $total = $key['amount'] * 2810/100;
        break;
         case "360":
        $total = $key['amount'] * 3450/100;
        break;
    default:
     //$total = $key['amount'] + 16.6667;
}

//$total = $key['amount'] + 16.6667 * $key['period'] ;
if($key['status'] =='Reserved' || $key['status'] =='Completed' ){}else{?>
    <tr><td>#<?php echo $key['ref_no'];?></td><td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['bank_namez'];?></td><td><?php echo $key['datetime'];?></td>
        <td> <?php echo $key['period'];?> Days</td>
        <td>R <?php echo $key['amount'];?></td>
        <td>R<?php echo $key['amount']*10/100;?></td>
       <td> <?php $from=date_create(date('Y-m-d'));
$to=date_create($key['datetime']);
$diff=date_diff($to,$from);
//print_r($diff);
echo $key['period'] - $diff->format('%R%a Days');?> Days </td>
           
        
        <td><a href="<?php echo base_url();?>providehelp/getrefdetails/id/<?php echo $key['id'];?>/userid/<?php echo $key['userid'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount']*10/100;?>" class="btn btn-primary">Allocate</a></td></tr>

    
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






































