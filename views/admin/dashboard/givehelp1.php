               
             <h1 class="page-header">
                          
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

<table id="table_id-bookingdetails" align="left">
  
         
<tr> 
                      <td>Total Money On  The System: </td>
                <td><input type="text" id="amount2" name="amount2" value="<?php echo $amount; ?>"disabled></td>
             


                        </tr>
<tr> 
                      <td>Level 2: Enter Amount(R) To Invest: </td>
                <td><input type="text" id="amount1" name="amount1"></td>
             


                        </tr>
                        
                         <tr style="display:none;"> 
                <td> Select Level: </td>
                <td ><select id="period">
  <option value="5">5 Days</option>
  



  
</select></td>
             


                        </tr>
                          <tr> <br>
                <td><input  type="button" value="Submit" onclick="submitreply();" class="btn btn-warning" ></td>
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

     var amount1=$('#amount1').val();
     var amount2=$('#amount2').val();
      var amount= amount1 + amount2;

alert(amount);
if( amount !="" && (amount >= 2000 && amount < 4001)){
     var  url = "<?php echo base_url();?>";



      alert(amount);
    var period=$('#period').val();


    $.post(url+'gethelp/submitphlevel2', {amount:amount,period:period},function(result) { 


    //  alert(result);
        if(result==1){       
              
          alert('PH Successfull');
         document.location.href = "/account"


        } else { 
         
         alert(result);
      document.location.href = "/account"

      
         }

    })

}else{
alert("Min  Amount  R2000.00 Max Amount R4000 LEVEL2");

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

    alert("You  Have  Already Provided  Help");
   

      
         }else { 
   submitreply(); 
         //alert('Failed');
      document.location.href = "/account"

      
         }

    })


}
</script>

</body>

</html>

