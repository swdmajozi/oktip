


<section  class="content" style="height:800px">
<!-- Small boxes (Stat box) -->

<!-- /.row -->




<p id="demddo" class="timeddr"></p>

<div class="row"><h4>Time Now: <?php echo date('H:i');?>   --------     Bidding Times: <span style="color: red;">09:30 AM</span>  and <span style="color: red;">18:00 PM</span> </h4>



<table id="table_id-bookingdetails"  width="80%"align="left">
  
                    
    <tr> 
                      <td style="display:noddne;">Select Bucks: </td>
                      <td> <select onchange="setAMount();" id="seller" name="seller" class="form-control form-control-alternative">  
                            
<?php 
$date = date('H:i');



if (($date > '09:30' && $date < '10:30') || ($date > '18:00' && $date < '19:30') ) {



foreach ($help as $group) {

// print_r( $help);
   // var_dump($group);
  $id = $group['id'];
echo  ' <option value="'.$id.'">Amount R'.$group['dueamount']. ' - '.$group['bankname'].'';
 echo '</option>';
    //echo  'me';
}


}else{

    echo ' <option value="0">--NO BUCKS TO BID AT THIS TIME--</option>  ';
}





?></select></td> 
             <td >    
                          <input  type="number" class="form-control form-control-alternative" id="amount" placeholder="Starting from R300" required="" name="phAmt" value="" min="300" max="5000"step="100">                  
 
 
</td>

           


                        </tr>     


                        
                         <tr style="display: d;"> 
                <td>Select Plan</td>
                <td ><select id="period"  class="form-control" >
  <option value="3" selected="selected">1st Plan - 3 Days</option>
  <option value="5" selected="selected">2nd Plan - 5 Days</option>
  <option value="8" selected="selected">3rd Plan - 8 Days</option>
 
  
</select></td>
             


                        </tr>
                          <tr> <br>
                <td><input  type="button" id="submitbtn" onclick="checkifexist();" value="BID NOW" class="btn btn-warning" ></td>
               
             


                        </tr>
                        <tr><p>Sponsor link <a href="<?php echo base_url();?>auth/register/?reflink=<?php echo @$username?>"><?php echo base_url();?>auth/register/?reflink=<?php echo @$username?></a></p></tr>

</table>


</div>


             <div class="row">
                
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><b>R<?php echo @$sum?></b></div>
                                        <div>Total Bought</div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><b>R<?php echo @$sell?></b></div>
                                        <div>Total Sells!</div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

   
                <!-- /.row -->

<style>
.timer  {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>


<script type="text/javascript"> 
// Ajax post


function checkifexist(){


 var amount=$('#amount').val();
  var seller=$('#seller').val();
//alert(seller);

if(seller == '0' && amount==""){

  alert("Please select bucks first and amount");

}else{
     var  url = "<?php echo base_url();?>";
     var amount = '400';
 
   $.post(url+'dashboard/checkifexist', {amount:amount},function(result) { 

//alert(result);
        if(result !=0){       
              
         var  url = "<?php echo base_url();?>";

    alert("Sorry, One PH Allowed At A Time");
   

      
         }else { 
    



    var amount=$('#amount').val();
  //  alert(amount);
    var period=$('#period').val();
   //  alert(period);
     var seller=$('#seller').val();
    //  alert(seller);



     if(seller != 0 && amount>= 150 && amount <= 5000){


jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "/dashboard/savedonation",
dataType: 'json',
data: {amount:amount, period:period, seller:seller},
success: function(res) {

  //  alert(res);
if (res != 1)
{
    alert("Donation Added Successfully!!!");
    

var url = '/dashboard/paymentsoutstanding';
 window.open(url) 
 window.location.href = url ;
    

}else{

       alert("Failed Please  try again");
}



}
});

}else{

  alert("Min Amount R150 - Max Amount R5000");

}

      
         }

    })
}
}
</script>

<!-- Morris.js charts -->


<style type="text/css">
    
td{
    padding: 10px !important;
}

</style>