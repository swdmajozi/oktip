 
             <h1 class="page-header">
                           <small>All Of Your PH.</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
            <table id="tabl" class="table table-responsive table-borded">
                                       
<thead>



<th>PH Period(Days)</th>
<th>PH Amount</th>
<th>Total GH</th>
<th>Status</th>
<th>Date Created</th>
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){
//calculate  $total 


?>
<?php foreach ($help as $key) {

  if($key['period'] == 10){

$total = $key['amount']+$key['amount']*0.50;
   
  }elseif ($key['period'] == 15) {
 $total = $key['amount']+$key['amount']*0.75;
  }else{

$total = $key['amount']+$key['amount']*1;

  }

  ?>


    <tr>
   
   
    <td><?php echo $key['period'];?></td>
      <td><?php echo $key['amount'];?></td>
    <td>R <?php echo $total;?></td>
     <td><?php echo $key['status'];?> Allocation</td>
      <td><?php echo $key['datetime'];?></td>
       <?php if($key['status'] == 'Completed' || $key['status'] == 'Reserved' || $key['status'] == 'Waitings'  ){}else{?> 
           <td> 

<a href="/providehelp/deleteph/refno/<?php echo $key['ref_no'];?>"onclick="return confirm('Are you sure you want to Cancel This PH?')" class="btn btn-danger">Cancel PH</a></td>
      <td> 


<?php }?>
        </tr>

    
<?php }}else{?>
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















































































