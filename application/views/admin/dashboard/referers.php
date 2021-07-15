               
             <h1 class="page-header" >
                          
                        </h1>      
                        <div class="panel panel-default">

                        <div class="panel-body" style="height: 800px;">

                            <div id="comfrimedrefs">
                                <h2>My Bonuses</h2>
                                <div class="table-responsive">
                                    <table id="tabl"  class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Name</th>
<th>Phone</th>
<th>Amount</th>
<th>%</th>
<th>Bonuses</th>

</thead>
<tbody>

<?php if(is_array($all)){





?>
<?php foreach ($all as $key) {?>


    <tr><td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['phone'];?></td>     

        <td>R <?php echo $key['amount'];?></td>
          <td>5%</td>
          <td>R <?php echo $key['amount'] * 0.05;?></td>
        

   <?php  
 $totalzz ='';
foreach ($help as $row) {
   // echo $row['amount'];
    @$totalzz += $row['amount'];
};

    ?>
<?php }}else{?>
</tbody>

<?php echo "No  Listings  Yet";}?>

</table>
 <table><tr><td>Total: R <?php echo @$totalzz*0.05;?></td>

 </tr></table>    


                            </div>
                               
                            </div>
             
                <!-- /.row -->









<div id="all"  style="display: none;" >
<h2>All</h2>
<div class="table-responsive">
                                    <table id="tabl" class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Name</th><th>Last Name</th><th>Phone</th><th>Email</th><th>%</th>

</thead>
<tbody>

<?php if(is_array($all)){


?>
<?php foreach ($all as $key) {?>


    <tr><td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['last_name'];?></td>
        <td><?php echo $key['phone'];?></td>
        <td><?php echo $key['email'];?></td><td>5%</td>
       


<?php }}else{?>
</tbody>

<?php echo "No  Listings  Yet";}?>

</table>
                              </div>
                               
                            </div>
    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>



</body>
<script>

$(document).ready( function () {
    $('#tabkkl').DataTable();
} );
</script>

</html>






































