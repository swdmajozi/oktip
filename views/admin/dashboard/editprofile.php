               
             <h1 class="page-header">
                           <small>Edit  Profile</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

                                  <form action="updatebankingdetailss"  method="post">
<?php foreach ($help as $key) {
  # code...
}?>
<table class="table_id-bookingdetails" align="center">
         
         <tr><td><h4>My Personal  Details</td></h4></tr>
                           <tr> 
                <td>First  Name: </td>
                <td><input  class="form-control"type="text" value="<?php echo $key['first_name']?>" name="first_name" id="first_name" ></td>
            
<input  type="hidden" value="<?php echo $key['id']?>" name="id" id="id">

                        </tr>
                            <tr> 
                <td>Last  Name:</td>
                <td><input class="form-control" type="text" value="<?php echo $key['last_name']?>" name="last_name" id="last_name" ></td>
             


                        </tr>
                                  <tr> 
                <td>Username: </td><td><input class="form-control"  name="username" id="username" type="text" value="<?php echo $key['username']?>" >


                        </tr>
                            <tr> 
                <td>Email Address: </td><td><input class="form-control"  type="text" value="<?php echo $key['email']?>" disabled>
             </td> 


                        </tr>
                            <tr> 
                <td>Phone  Number: </td><td><input class="form-control"type="text" value="<?php echo $key['phone']?>" name="phone" id="phone"  ></td>
             


                        </tr>
                 <tr><td><h4> My Banking Details</td></h4></tr>
                            <tr> 
                              <td>Bank Name</td>
<td><select class="form-control" name="bankname" id="bankname">
<option value="<?php echo $key['bankname']?>"  ><?php echo @$key['bankname']?> </option>
<option value="Standard Bank" >Standard Bank</option>
<option value="Absa Bank" >Absa Bank</option>
<option value="First National Bank" >First National Bank</option>
<option value="NedBank">NedBank</option>
<option value="Capitec">Capitec</option>
</select></td>


                        </tr>
                            <tr> 
                <td>Account  Number</td><td><input  class="form-control" type="text" value="<?php echo $key['bankaccount']?>" name="bankaccount" id="bankaccount" ></td>
             
 
             

                        </tr> 
            <tr> 
                <td>Account Type</td><td><input class="form-control" id="type" type="text" value="<?php echo @$key['accounttype']?>" name="accounttype" id="accounttype" ></td>
             


                        </tr>

   <tr> 
                <td>Branch Code</td>
                <td><input  class="form-control" class="form-control" type="text" value="<?php echo @$key['bankcode']?>"   name="bankcode" id="bankcode"></td>
             


                        </tr>

                        

  <tr><td><h4>Add Referral Username</td></h4></tr>
                            <tr> 
           <td>Referer Username: </td><td><input  class="form-control" type="text" value="<?php echo @$key['referer']?>" name="referer" id="referer" ></td> 
             


                        </tr>
                           




                          <tr> <br>
                <td><input  type="submit" value="Save Profile" class="btn btn-success" ></td><td><input  type="button" value="Cancel" class="btn btn-danger"></td>
             


                        </tr>

  
</table>

     </form>                           </div>
                             
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


function submitreplsy(){

   ///submit  code  here S

if($('#amount').val() !="" && $('#amount').val() >= 500){
     var  url = "<?php echo base_url();?>";

    // alert(url);
   var id=$('#id').val();
    var amount=$('#amount').val();
    var ref=$('#ref').val();
    var wantedamount=$('#wantedamount').val();

    $.post(url+'dashboard/updatebankingdetailss', {id:id,first_name:first_name,last_name:last_name,bank_name:bank_name},function(result) { 
        if(result==1){       
              
          alert('Successfull');
//document.location.href = "/supplier"


        } else { 
         
         alert('Successfull');
//document.location.href = "/supplier"wantedamount

      
         }

    })

}else{
//alert("Amount  To  Donate  Shouldn't  be  less  than  R500.00");

}
}
</script>

</body>

</html>

