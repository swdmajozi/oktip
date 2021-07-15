             
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

                                  <form action="updatebankingdetailss"  method="post">

<table class="table_id-bookingdetails" align="center">
         
         <tr><td><h4>Add Coin</td></h4></tr>
       
                            <tr> 
                <td>Username: </td>
                <td><input class="form-control"  type="text"  name="username" id="username">
             </td> 


              
           
                            <tr> 
                <td>Amount</td><td><input  class="form-control" type="text"  name="amount" id="amount" ></td>
             
 
             

                        </tr>                     




                          <tr> <br>
                <td><input  type="button" onclick="submitreply();" value="Save Coins" class="btn btn-success" ></td>
               
             


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
   
<script>


function submitreply(){

   ///submit  code  here S

     var  url = "<?php echo base_url();?>";

    // alert(url);
   var username=$('#username').val();
    var amount=$('#amount').val();
  

    $.post(url+'dashboard/savecoins', {username:username,amount:amount},function(result) { 
        if(result==1){       
              
          alert('Successfull');
//document.location.href = "/supplier"


        } else { 
         
         alert('Successfull');
//document.location.href = "/supplier"wantedamount

      
         }

    })

}

</script>

</body>

</html>

