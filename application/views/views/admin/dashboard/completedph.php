 
             <h1 class="page-header">
                           <small>All Completed PH.</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table style="width: 100%;" class="table table-responsive table-bordered table-hover table-striped">
                                       
<thead>
<?php if(is_array($help)){?>
<th>Ref#</th>

<th>First Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date</th>
<th>Amount </th>
</thead>
<tbody>
<?php foreach ($help as $key) {?>
<div id="pageone" data-role="main" class="ui-content">

    <tr>
        <td>#<?php echo @$key['ref_no'];?></td>
       <td><?php echo @$key['first_name'];?>
        <td><?php echo @$key['email'];?></td>
            <td><?php echo @$key['phone'];?></td>
        <td><?php echo @$key['datetime'];?></td>
        <td>R <?php echo @$key['amount'];?></td>
        
         <?php $re= $key['remaining'];?>
     <td> <?php    $date = new DateTime($re);
$now = new DateTime();

echo $date->diff($now)->format("%d days, %h hours and %i minutes");    ?></td>
   

        
 </tr>

   
  

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















































































