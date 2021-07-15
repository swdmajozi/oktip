               
             <h1 class="page-header">
                             <small>Withdraw Money</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

<table id="table_id-bookingdetails" align="left">
  

<tr> 
                <td>Amount You  Can  Withdraw: </td>
                <td><input  type="text" value="<?php echo $amount;?>"  name ="amount" id="amount"  disabled>
                    <input  type="hidden" value="<?php echo $email;?>"  name ="email" id="email" >
                    <input  type="hidden" value="<?php echo $ref_no;?>"  name ="ref" id="ref" >
                    <input  type="hidden" value="<?php echo $userid;?>"  name ="id" id="id" >
                    <input  type="hidden" value="<?php echo $period;?>"  name ="period" id="period" >

                </td></tr>
                <tr> 
           
             


                        </tr>
                          <tr> <br>
                <td><input  type="button" value="Submit" onclick="submitreply();" class="btn btn-warning" ></td><td><input  type="button" value="Cancel" class="btn btn-danger"></td>
             


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

  

<script>


function submitreply(){

   ///submit  code  here S


     var  url = "<?php echo base_url();?>";

     //alert(url);
   //var id=$('#id').val();
    var amount=$('#amount').val();
    var period=$('#period').val();
      var ref=$('#ref').val();
      
      alert(ref);
        var email=$('#email').val();
          var id=$('#id').val();

    $.post(url+'gethelp/submitwithdrawalv1', {amount:amount,period:period,id:id,ref:ref,email:email},function(result) { 
        


if(result==1){       
              
        alert("Withdrawn Successful");
document.location.href = "/account"


        } else { 
         
                 
      alert("Failed try  Again");
document.location.href = "/account"

      
         }

    })


}
</script>

</body>

</html>

