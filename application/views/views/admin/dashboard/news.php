               
             <h1 class="page-header">
                           <small>Latest Updates</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">

<table id="table_id-bookingdetails" align="left">
  
       <?php  foreach ($news as $key) {?>  

<tr> 
                <td><div class="alert alert-info">
    <strong>Date:<?php echo $key['date']; ?></strong> <br>Message: <a href="#" class="alert-link"><?php echo $key['comments']; ?></a>.
  </div></td>
                <td><p> </p></td>
             


                        </tr>
                      
<?php } ?> 
  
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
//document.location.href = "/supplier"


        } else { 
         
         alert('Successfull');
//document.location.href = "/supplier"

      
         }

    })

}else{
alert("Amount  should  not  be  less  than  R500.00");

}
}
</script>

</body>

</html>

