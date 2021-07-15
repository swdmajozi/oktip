               
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
                <td><input  type="text" value="<?php echo $ref?>" disabled></td> </tr> <tr>
                <td>Amount  To  Donate: </td>
                <td>R<input  type="text" value="<?php echo $wantedamount?>" disabled></td>
            
      
            
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
                <td>Username: </td><td><input  type="text" value="<?php echo $key['username']?>" disabled></td>
             


                        </tr>
                            <tr> 
                <td>Phone  Number: </td><td><input  type="text" value="<?php echo $key['phone']?>" disabled></td>
             


                        </tr>

<tr><td>&nbsp;</td></tr>
              
                 
                            <tr> 
                <td>Bank  Name</td><td><input  type="text" value="<?php echo $key['bank_namez']?>" disabled></td>
             


                        </tr>
                            <tr> 
                <td>Account  Number</td><td><input  id="oldltotal"type="text" value="<?php echo $key['account_numberz']?>" disabled></td>
             


                        </tr>   
          <tr> 
                <td>Account  Type</td><td><input  id="oldltotal"type="text" value="<?php echo $key['account_typez']?>" disabled></td>
             


                        </tr> 

 <tr> 
                <td>Branch Code</td>
                <td><input  type="text" value="<?php echo $key['codez']?>" disabled></td>
            
<img src="<?php echo base_url();?>uploads/<?php echo $ref?>.jpg" alt="Please  Upload  Proof  Of  Payment" />

                        </tr>
                        <tr><td>
<?php echo @$error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />
<input  type="hidden" value="<?php echo $ref?>" name="ref" id="ref">

<br /><br />

<input name="submit" type="submit" value="upload" />

</form>
                         </td> </tr> <br>
              
             


                        </tr>

  
</table>

                                </div>
                                <div class="text-right">
                                    <a href="#">View All Donations <i class="fa fa-arrow-circle-right"></i></a>
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

   ///submit  code  here S

if($('#amount').val() !="" && $('#amount').val() >= 500){
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

    $.post(url+'providehelp/submitdonation', {id:id,amount:amount,ref:ref,wantedamount:wantedamount},function(result) { 
        if(result==1){       
              
          alert('Successful');
document.location.href = "/account/"


        } else { 
         
         alert('Successful');
document.location.href = "/account/"

      
         }

    })

}else{
alert("Amount  To  Donate  Shouldn't  be  less  than  R500.00");

}
}
</script>

</body>

</html>

