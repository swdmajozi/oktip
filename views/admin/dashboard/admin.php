


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
    <!-- jQuery -->

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
<script>


$(document).ready(function(){
    $('#table').DataTable();
});
$(document).ready(function(){
    $('#table1').DataTable();
});
$(document).ready(function(){
    $('#table2').DataTable();
});
</script>               
             <h3 class="page-header" >
                          Admin Will Be  able to see  this.
                        </h1>      
                        <div class="panel panel-default">

                        <div class="panel-body">

                             <h3>Allocate Members</h3>
                                <div class="table-responsive">
                                    <table id="table"  class="table table-hover table-striped">
                                       
<thead>

<th>cell#</th>
<th>Name</th>
<th>Bank</th>
<th>Date</th>
<th>Investment  Period</th>
<th>Amount(R)</th>
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

<?php 

$favcolor = $key['period'];


$total = @$key['amount']- @$key['reserved_amount'];
//echo $total;
//$total = $key['amount'] + 16.6667 * $key['period'] ;
if(  $key['first_name'] == 'henry' ||  $key['status'] == 'Completed' || $key['status'] == 'Reserved' || $key['status'] == 'Waitings' || $key['status'] == 'Homeless' ){}else{?>
    <tr><td><?php echo $key['phone'];?></td>
    <td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['bank_namez'];?></td>
        <td><?php echo $key['datetime'];?></td>
        <td> <?php echo $key['period'];?> Days</td>
        <td>R <?php echo $key['amount'];?></td>
              

        
        <td><a href="/providehelp/deleteph/refno/<?php echo $key['ref_no'];?>"onclick="return confirm('Are you sure you want to delete PH?')" class="btn btn-primary">Cancel PH</a>||<a href="<?php echo base_url();?>providehelp/getuserdetails/id/<?php echo $key['id'];?>/userid/<?php echo $key['userid'];?>/<?php echo $key['ref_no'];?>/<?php echo $total;?>/<?php echo $key['period'];?>" class="btn btn-primary">Allocate</a></td></tr>

  
<?php }}}else{?>
</tbody>
<?php echo "None";}?>

</table>
                                </div>



                                <h3>Block and  Re-Allocate</h3>
                                     <div class="table-responsive">
                                    <table id="table1" class="table  table-hover table-striped">
                                       
<thead>

<th>Email Address</th><th>Full Name</th><th>Cell#</th><th>Date</th><th>Amount</th><th>Action</th><th>Remaining Time</th>
</thead>
<tbody>

<?php if(is_array($block)){


?>
<?php foreach ($block as $key) {?>

<?php 


$total = @$key['amount']- @$key['reserved_amount'];

if( $key['status'] =='Rerserved' || $key['first_name'] =='' ){}else{?>
    <tr><td><?php echo $key['email'];?></td>
        <td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['phone'];?></td>
        <td><?php echo $key['date'];?></td>
        <td>R <?php echo $key['amount_donated'];?></td>
    <td><a class="btn btn-warning" href="<?php echo base_url();?>gethelp/deleteallocation/<?php echo $key['ref_no'];?>/<?php echo $key['user_to'];?>/<?php echo $key['userfromid'];?>/<?php echo $key['amount_donated'];?>">Re-Allocate</a></td>
        
      <?php $re= $key['remaining'];?>
     <td> <?php    $date = new DateTime($re);
$now = new DateTime();

echo $date->diff($now)->format("%d days, %h hours and %i minutes");    ?>
<?php }}}else{?></td>
</tbody>
<?php echo "Nothing Found";}?>

</table>

 <h3>Withdraw For Members</h3>
             <table id="table2"  class="table table-hover table-striped">
                                       
<thead>

<th>Email </th>
<th>Beneficiary Name</th>
<th>Bank</th>
<th>Date</th>
<th>Investment  Period</th>
<th>Amount(R)</th>
<th>Total(R)</th>
<th>Maturity Days Left</th>
<th>Action</th>
</thead>
<tbody>

<?php if(is_array($withdraw)){

//print_r($withdraw);
?>
<?php foreach ($withdraw as $key) {

 
  if($key['period'] == 10){

$total = $key['amount']+$key['amount']*0.50;
   
  }elseif ($key['period'] == 15) {
 $total = $key['amount']+$key['amount']*0.75;
  }else{

$total = $key['amount']+$key['amount']*1;

  }

  ?>





    <tr>
        <td>#<?php echo $key['email'];?></td>
    <td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['bank_namez'];?></td>
        <td><?php echo $key['datetime'];?></td>
        <td> <?php echo $key['period'];?> Days</td>
        <td>R <?php echo $key['amount'];?></td>
        <td>R<?php echo @$total;?></td>
       <td> <?php $from=date_create(date('Y-m-d'));
$to=date_create($key['datetime']);
$diff=date_diff($to,$from);
//print_r($diff);
echo $key['period'] - $diff->format('%R%a Days');?> Days </td>
        
        <td><a href="<?php echo base_url();?>gethelp/withdrawv1/<?php echo $key['userid'];?>/<?php echo $key['ref_no'];?>/<?php echo $total;?>" class="btn btn-primary">Withdraw 4 Member</a></td>
        </tr>

    
<?php }}else{?>
</tbody>
<?php echo "No  Listings  Yet";}?>
<tfoot></tfoot>
</table>    
                               
                                   
                    </div>
             
                <!-- /.row -->
</div>
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

               
             <h1 class="page-header">
                          
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">


                                </div>
                               
                            </div>
             
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  

<script>


function submitreply(){

   ///submit  code  here S

if($('#news').val() !="" ){
     var  url = "<?php echo base_url();?>";

    // alert(url);
   //var id=$('#id').val();
    var news=$('#news').val();
   // var period=$('#period').val();
//alert(id);
//alert(amount);

    // var reply=$('#reply').val();
//var hotelnames=$('#hotelnames').val();
     //  var total=$('#newtotal').val();
     // var deposit=$('#newdeposit').val();
      // var userid=$('#userid').val();
       //var deposit=$('#newdeposit').val();

    $.post(url+'gethelp/submitnews', {news:news},function(result) { 
        if(result==1){       
              
          alert('Updates Successfull');
document.location.href = "/account/news"


        } else { 
         
         alert('Updates Failed');
document.location.href = "/account/news"

      
         }

    })

}else{
alert("Updates Field  Is  empty");

}
}
</script>

</body>

</html>






































