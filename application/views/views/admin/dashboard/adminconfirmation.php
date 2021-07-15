 
             <h1 class="page-header">
                           <small>All Confirmation For Received.</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table style="width: 100%;" class="table table-responsive table-bordered table-hover table-striped">
                                       
<thead>
<?php if(is_array($help)){?>
<th>Ref#</th>

<th>Action</th>
<th>Email</th>
<th>Phone</th>
<th>Date</th>
<th>Amount </th>
<th>Status</th>

</thead>
<tbody>
<?php foreach ($help as $key) {?>
<div id="pageone" data-role="main" class="ui-content">

    <tr>
 <?php if($key['status'] == 'Completed'|| $key['status'] == 'Cancelled'){}else{ ?>
 <td><a href="<?php echo base_url();?>/providehelp/confirmpaymentrecived/id/<?php echo $key['id'];?>/userid/<?php echo $key['userfromid'];?>/<?php echo $key['ref_no'];?>/<?php echo $key['amount_donated'];?>/<?php echo $key['period'];?>" class="btn btn-primary">Confirm</a></td>
        <td>#<?php echo $key['ref_no'];?></td>
       <td><?php echo $key['from_address'];?>
        <td><?php echo $key['from_phone'];?></td>
        <td><?php echo $key['date'];?></td>
        <td>R <?php echo $key['amount_donated'];?></td>
        <td><?php echo $key['status'];?></td>

        

               <?php }?></tr>

   
  

<?php }?>
</tbody>
<?php }else{

echo  "No Nothing.";
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















































































