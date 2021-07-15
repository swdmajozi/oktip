
               
             <h1 class="page-header">
                           <small>Get  Help</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

<table id="table_id-bookingdetails" align="left">
  
         

<tr> 
                <td>Enter  Amount You Need: </td>
                <td><input  type="text" value=""  name ="amount" id="amount" ></td>
             


                        </tr>
                          <tr> <br>
                <td><input  type="button" value="Submit" onclick="submitreply();" class="btn btn-success" ></td><td><input  type="button" value="Cancel" class="btn btn-danger"></td>
             


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

if($('#amount').val() !="" && $('#amount').val() >= 500){
     var  url = "<?php echo base_url();?>";

    // alert(url);
   //var id=$('#id').val();
    var amount=$('#amount').val();
//alert(id);
//alert(amount);

    // var reply=$('#reply').val();
//var hotelnames=$('#hotelnames').val();
     //  var total=$('#newtotal').val();
     // var deposit=$('#newdeposit').val();
      // var userid=$('#userid').val();
       //var deposit=$('#newdeposit').val();

    $.post(url+'gethelp/submitrequest', {amount:amount},function(result) { 
        if(result==1){       
              
          alert('Successfull');
document.location.href = "/account"


        } else { 
         
         alert('Successfull');
document.location.href = "/account"

      
         }

    })

}else{
alert("Amount  should  not  be  less  than  R500.00");

}
}
</script>

</body>

</html>

