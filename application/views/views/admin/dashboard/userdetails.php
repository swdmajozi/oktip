               
             <h1 class="page-header">
                           <small>Beneficiary  Details</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">
<?php foreach ($help as $key) {
  # code...
}?>
<table id="table_id-bookingdetails" align="left">
           <tr> 
                <td>Donation Ref#: </td>
                <td><input  type="hidden" value="<?php echo $ref?>"   disabled></td> </tr> <tr>
               <input  type="hidden" value="<?php echo $wantedamount?>" disabled></td>
            
      
<input  type="hidden" value="<?php echo $period?>" name="period" id="period">            
<input  type="hidden" value="<?php echo $ref?>" name="ref" id="ref">
<input  type="hidden" value="<?php echo $wantedamount?>" name="wantedamount" id="wantedamount">

                     
                        </tr>
         
                           <tr> 
                <td>First  Name: </td>
                <td><input  type="text" value="<?php echo $key['first_name']?>" disabled></td>
            
<input  type="hidden" value="<?php echo $key['id']?>" name="id" id="id">

                        </tr>
                            <tr> 
                <td>Last  Name:</td>
                <td><input  type="text" value="<?php echo $key['last_name']?>" disabled></td>
             


                        </tr>
                            <tr> 
                <td><input  type="hidden" value="<?php echo $key['email']?>" disabled></td>
             


                        </tr>
                            <tr> 
                <td><input  type="hidden" value="<?php echo $key['phone']?>" disabled></td>
             


                        </tr>

          
 
<tr> 
                <td>Amount Donated: </td>
                <td><input  type="text" value="<?php echo $wantedamount?>" name ="amount" id="amount"></td>
              <td>Choose A  Member: </td>
                
<td> <select id="allocate" name="allocate">           
<?php 

foreach ($users    as $group) {
   // var_dump($group);
    $id = $group['id'];
  echo  ' <option value="'.$id.'">'.$group['first_name'].''.$group['last_name'].'('.$group['amount'].')';
  echo '</option>';
    //echo  'me';
}


?></select></td>

                        </tr>
                          <tr> <br>
                <td><input  type="button" value="Allocate" onclick="checkifdonatedalready();" class="btn btn-success" ></td>
                <td><a href="/providehelp" class="btn btn-danger">Cancel</a></td>
             


                        </tr>

  
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

<script>

function submitreply(){


var one  = $('#wantedamount').val();
var two = $('#amount').val(); 
//alert(one);
//alert(two);

var  res = one-two;
//alert(res);
if( res >= 0){

submitreply111();

}else{

alert("Money  To  Donate  Cannot  Be  greater  than  amount  needed!!!");

}


}

function submitreply111(){

   ///submit  code  here S

if($('#amount').val() !="" && $('#amount').val() >= 100){
     var  url = "<?php echo base_url();?>";

    // alert(url);
   var id=$('#id').val();
    var amount=$('#amount').val();
    var period=$('#period').val();
    var ref=$('#ref').val();
    var wantedamount=$('#wantedamount').val();
   


    var one  = $('#wantedamount').val();
   var two = $('#amount').val(); 
//alert(one);
//alert(two);

var  leftamount = one-two;

//alert(leftamount);

var allocate=$('#allocate').val();




    $.post(url+'providehelp/submitdonationv1', {id:id,amount:amount,ref:ref,wantedamount:wantedamount,allocate:allocate,period:period, leftamount:leftamount},function(result) { 


//alert(result);
        if(result==1){       
              
          alert('Successful');
document.location.href = "/account/admin"


        } else { 
         
         alert('Successful');
document.location.href = "/account/admin"

      
         }

    })

}else{
alert("1. Amount  To  Donate  Shouldn't  be  less  than  R500.00<br> 2. And It Cannot be  greater  than  the  amount  needed.");

}
}


function checkifdonatedalready(){

   ///submit  code  here S


     var  url = "<?php echo base_url();?>";

    // alert(url);
   var id=$('#id').val();
    var amount=$('#amount').val();
    var ref=$('#ref').val();
    var wantedamount=$('#wantedamount').val();
//alert(id);
//alert(amount);

    // var reply=$('#reply').val();
//var hotelnames=$('#hotelnames').val();
     //  var total=$('#newtotal').val();
     // var deposit=$('#newdeposit').val();
      // var userid=$('#userid').val();
       //var deposit=$('#newdeposit').val();

    $.post(url+'providehelp/checkifreserved', {ref:ref},function(result) { 
        if(result==1){       
              
          alert('This  User Has  Already  Been Donated  To!!! You  Will  Be  Redirected');
document.location.href = "/account/"


        } else { 
         submitreply();
        // alert('Succehhhhhhssful');
//document.location.href = "/account/"

      
         }

    })

}
</script>

</body>

</html>

