
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
    <!-- jQuery -->

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
<script>


$(document).ready(function(){
    $('.tabled').DataTable();
});

</script>  


             <h1 class="page-header">
                           <small>All Users</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                              
            <table id="tabled" class="table table-hover table-striped">
                                       
<thead>

<th>Username</th>
<th>First Name</th>
<th>Last Name</th>
<th>EMail</th>  
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

    <tr>
    <td><?php echo $key['username'];?></td>
    <td><?php echo $key['first_name'];?></td>
    <td><?php echo $key['last_name'];?></td>
     <td><?php echo $key['email'];?></td>
     <td> 
  <?php  if( $key['active'] != 1){?>
<a href="/account/activateuser/userid/<?php echo $key['id'];?>"onclick="return confirm('Are you sure you want to activate this user?')" class="btn btn-primary">Activate</a><?php }else{?><a href="/account/deactivateuser/userid/<?php echo $key['id'];?>"onclick="return confirm('Are you sure you want to deactivate this user?')" class="btn btn-primary">Deactivate</a><?php }?>||
<a href="/account/deleteuser/userid/<?php echo $key['id'];?>"onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-primary">Delete User</a></td>

  


        </tr>

    
<?php }}else{?>
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

</html>















































































