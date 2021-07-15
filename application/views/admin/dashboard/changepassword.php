               
             <h1 class="page-header">
                           <small>Change Password</small>
                        </h1>      
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="table-responsive">


                                  <form action="/account/updatepassword" method="post">
<?php foreach ($help as $key) {
  # code...
}?>
<table id="table_id-bookingdetails" align="left">
                  
                           <tr> 
                <td>First  Name: </td>
                <td><input  type="text" value="<?php echo $key['first_name']?>" disabled></td>
            
<input  type="hidden" value="<?php echo $key['id']?>" name="id" id="id">

                        </tr>
                            <tr> 
                <td>Last  Name:</td>
                <td><input  type="text" value="<?php echo $key['last_name']?>" disabled></td>
             




<tr> 
                <td>Old Password: </td>
                <td><input  type="password" value="<?php echo $key['password']?>"  name ="oldpassword" id="oldpassword" ></td>
             


                        </tr>
         <tr> 
                <td>New Password: </td>
                <td><input  type="password" value=""  name ="password" id="password" ></td>
             


                        </tr>

                        <tr> 
                <td>Confirm Password: </td>
                <td><input  type="password" value=""  name ="confirmpassword" id="confirmpassword" ></td>
             


                        </tr>
                          <tr> <br>
                <td><input  type="button" value="Update Password" onclick="submitreply();" class="btn btn-success" ></td><td><a href="/providehelp" class="btn btn-danger">Cancel</a></td>
             


                        </tr>

  
</table>
</form>
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

if($('#password').val() == $('#confirmpassword').val()){
     var  url = "<?php echo base_url();?>";

    // alert(url);
 //  var id=$('#id').val();
    var password=$('#password').val();
   // var ref=$('#ref').val();
    //var wantedamount=$('#wantedamount').val();
//alert(id);
//alert(amount);

    // var reply=$('#reply').val();
//var hotelnames=$('#hotelnames').val();
     //  var total=$('#newtotal').val();
     // var deposit=$('#newdeposit').val();
      // var userid=$('#userid').val();
       //var deposit=$('#newdeposit').val();

    $.post(url+'providehelp/account_change_password', {password:password},function(result) { 
        if(result==1){       
              
          alert('Successfull');
document.location.href = "/account/"


        } else { 
         
         alert('Successfull');
document.location.href = "/account/"

      
         }

    })

}else{
alert("Passwords  Does Not  Match!!!");

}
}
</script>

</body>

</html>

