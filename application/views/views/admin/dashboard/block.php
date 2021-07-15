<h3>Outstanding Withdrawals</h3>
                                    <table id="tabl"  class="table table-bordered table-hover table-striped">
                                       
<thead>

<th>Ref#</th><th>Full Name</th><th>Bank</th><th>Date</th><th>Amount</th><th>Action</th><th>Time Left</th>
</thead>
<tbody>

<?php if(is_array($help)){


?>
<?php foreach ($help as $key) {?>

<?php 


$total = @$key['amount']- @$key['reserved_amount'];

if( $key['status'] =='Rerserved' || $key['status'] =='Comrpleted' ){}else{?>
    <tr><td>#<?php echo $key['ref_no'];?></td>
        <td><?php echo $key['first_name'];?></td>
        <td><?php echo $key['bank_namez'];?></td>
        <td><?php echo $key['date'];?></td>
        <td>R <?php echo $key['amount_donated'];?></td>
    <td> <a href="<?php echo base_url();?>gethelp/block/<?php echo $key['ref_no'];?>/<?php echo $key['user_to'];?>/<?php echo $key['userfromid'];?>">Re-Allocate And Block </a></td>
        
      <?php $re= $key['remaining'];?>
     <td> <?php    $date = new DateTime($re);
$now = new DateTime();

echo $date->diff($now)->format("%d days, %h hours and %i minutes");    ?>
<?php }}}else{?></td>
</tbody>
<?php echo "Nothing Found";}?>

</table>