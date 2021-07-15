 
 
               
             <h1 class="page-header">
                           <small>All Kept Funds</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                       
<thead>
<?php if(is_array($help)){?>
<th>Ref#</th><th>Name</th><th>Bank</th><th>Bank-Acc#</th><th>Mobile#</th><th>Email</th><th>Amount</th>
</thead>
<tbody>
<?php foreach ($help as $key) {?>


    <tr><td>#<?php echo $key['ref_no'];?></td>
    <td><?php echo $key['first_name'];?></td>
    <td><?php echo $key['bank_namez'];?></td>
    <td><?php echo $key['account_numberz'];?></td>
    <td><?php echo $key['phone'];?></td>
    <td><?php echo $key['email'];?></td>
    <td>R <?php echo $key['amount'];?></td>
<td><a href="/providehelp/makeph/id/<?php echo @$key['reid'];?>/userid/<?php echo @$key['userid'];?>" class="btn btn-primary">Add To Allocation</a></td>--></tr>

    
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








































