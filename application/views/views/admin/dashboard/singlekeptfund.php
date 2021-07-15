               
             <h1 class="page-header">
                          
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

<table id="table_id-bookingdetails" align="left">
  
                    
         

<tr> 
                      <td> Amount(R) To Invest: </td>
                <td><input type="text" id="amount" name="amount" class="form-control"></td>
             


                        </tr>
                        
                         <tr> 
                <td> Period</td>
                <td ><select id="period" disabled class="form-control">
  <option value="30">30 Days</option>
  



  
</select></td>
             


                        </tr>
                          <tr> <br>
                <td><input  type="button" value="Submit" onclick="submitreply();" class="btn btn-success" ></td>
                <td><input  type="button" value="Cancel" class="btn btn-danger"></td>
             


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




if($('#amount').val() !="" && ($('#amount').val() >= 200 && $('#amount').val() <= 50000)){
     var  url = "<?php echo base_url();?>";

    // alert(url);
   //var id=$('#id').val();
    var amount=$('#amount').val();
    var period=$('#period').val();


    $.post(url+'gethelp/submitph', {amount:amount,period:period},function(result) { 


    // alert(result);
        if(result==1){       
              
          alert('PH Successfully');
         document.location.href = "/account"


        } else { 
         
         alert(result);
      document.location.href = "/account"

      
         }

    })

}else{
alert("Min  Amount  R200.00 Max Amount R50000");

}
}
</script>

<script>


function checkifexist(){

   ///submit  code  here S

///alert("Min  Amount  R500.00 Max Amount R10 000");

     var  url = "<?php echo base_url();?>";
     var amount = '400';
 
   $.post(url+'account/checkifexist', {amount:amount},function(result) { 

  //alert(result);
        if(result==1){       
              
         var  url = "<?php echo base_url();?>";

    alert("You  Have  ALready Provided  Help");
   

      
         }else { 
   submitreply(); 
         //alert('Failed');
    //  document.location.href = "/account"

      
         }

    })


}
</script>

</body>

</html>

