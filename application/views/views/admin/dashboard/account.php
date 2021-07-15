               
         
    <div class="panel-body">
                                <div class="table-responsive">




                                   <table  style="width:100%" id="tabl"  class="table table-bordered table-hover table-striped">
                                       
<thead>


</thead>
<tbody>

    <tr><td>  
                                <a class="btn btn-success" href="<?php echo base_url();?>providehelp/givehelp">PROVIDE HELP</a>
                            </td>
     
       
    <td> 
                                <a class="btn btn-danger" href="<?php echo base_url();?>account/growth">GET HELP</a>


</table>


<h3>Orders</h3>
                                   <table id="tabl"  class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>First Name</th>

<th>Bank Name</th>
<th>Account#</th>
<th>Amount</th>
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($out)){


?>
<?php foreach ($out as $key) {?>

<?php 


$total = @$key['amount']- @$key['reserved_amount'];

if( $key['status'] =='Rerserved' || $key['status'] =='Comrpleted' ){}else{?>
    <tr>
        <td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['phone'];?></td>
        <td><?php echo $key['bank_namez'];?></td>
        <td><?php echo $key['account_numberz'];?></td>
        <td>R <?php echo $key['amount_donated'];?></td>
    <td> <a class="btn btn-danger" href="<?php echo base_url();?>gethelp/donatedfunds">View More</a></td>
    ><?php }}}else{?>
</tbody>
<?php echo "No Orders Found";}?>

</table>
<table>
                        <tr><p>Here is  your  referral link <a href="<?php echo base_url();?>auth/sign_up/?reflink=<?php echo $username?>"><?php echo base_url();?>auth/sign_up/?reflink=<?php echo $username?></a></p></tr>

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

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='https://v2.zopim.com/?5nTx9zKKoIo4EhjuCbtGY6eyxBacKTXJ';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zendesk Chat Script-->






































