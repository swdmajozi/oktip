               
             <h1 class="page-header">
                           <small>My Successful Bids</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Bid ID</th>
<th>Name</th>
<th>Period</th>
<th>Date Created</th>
<th>Maturity Date</th>
<th>Amount</th>
<th>Profit</th>
<th>Time Remaining</th>
<th>Action</th>
</thead>

<?php if(is_array($help)){?>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref'];?></td>
    	<td><?php echo $key['first_name'];?></td>
    	<td><?php echo $key['period'];?></td>
    	<td><?php echo $key['created_date'];?></td>
        <td><?php echo $key['due_date'];?></td>
        <td><?php echo $key['amount'];?></td>
        <td><?php echo $key['amountdue'];?></td>
       <?php $re= $key['due_date'];?>
     <td> <?php    $date = new DateTime($re);
    $now = new DateTime();
            echo $date->diff($now)->format("%d days, %h hours and %i minutes"); 

      //    echo  $date->diff($now);



   ?>
</td>


         <td>
<?php if($date >  $now){

  echo "Not Matured Yet"; 

} else if($key['withdrawal'] != 1){ ?>


            <a href="<?php echo base_url();?>/dashboard/sellbucks/<?php echo $key['ref'];?>/<?php echo $key['amountdue'];?>/<?php echo $key['period'];?>" class="btn btn-primary" >Sell</a></td>

<?php }else{

}?>

 

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

