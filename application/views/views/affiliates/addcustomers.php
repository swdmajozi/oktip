
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Personal Details</a></li>
    <li><a href="#tab2" data-toggle="tab">Checkout</a></li>
    <li><a href="#tab3" data-toggle="tab">Payment</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="tab1">



<?php $formid = array('class' => 'login-form', 'id' => 'myform');
 echo form_open("auth/create_user", $formid, );?>
    <div class="caption">
        <h5 class="box-title">ADD CUSTOMER</h5>
    </div>


<div class="form-box container " style="width: 75% !important;">
<div class="row">
      <div class="form-group has-feedback col-md-6">

            <?php echo form_input($first_name);?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback col-md-6">
            <?php echo form_input($last_name);?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      
    </div>

<div class="row">

    <div id="checkemail" style="color:red;"></div>
<div class="form-group has-feedback col-md-6">
            <?php echo form_input($email);?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

    </div>

  <div class="form-group has-feedback col-md-6">
            <?php echo form_input($phone);?>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>

        </div>
        </div>

        <div class="row">
      <div class="form-group has-feedback col-md-6">
            <?php echo form_input($idnumber);?>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>

    </div>
<div class="form-group has-feedback col-md-6">
            <?php echo form_input($address);?>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>

    </div>
    </div>

    <div class="row">
<div class="form-group has-feedback col-md-6">
            <?php echo form_input($city);?>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>

    </div>

    <div class="form-group has-feedback col-md-6">
            <?php echo form_input($code);?>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>

    </div>

    </div>
 
    
<div class="row">
     <div class="form-group has-feedback col-md-6">
            <?php

               $js = 'id="bank" onChange="appendPaymentMethod(); class="form-control-feedback style="width: 100% !important; padding:8px;"';
             echo form_dropdown('bank', $bank,'ABSA', $js);

            
             ?>

  
    </div>
 



<div class="form-group has-feedback col-md-6">
           
<select name="products" id="products"  class=" form-control-feedback=" style="width: 100% !important; padding:8px;">
<option value="CreditRepair">Credit Repair</option>
<option value="CreditCleanUp">Credit CleanUp</option>
<option value="CreditReport">Credit Report</option>
<option value="CreditAssessment">Credit Assessment</option>
</select>

  
    </div>          
        

    </div>

<div class="row">
<div class="form-group has-feedback col-md-6">
         <input type="text" id="packageAmount"   placeholder="Package Amount" value="250" name="packageAmount">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback col-md-6">
        <p>Please  select payment date below</p>
        <input type="date" id="billingdate" name="billingdate" required>
        </div>
 

</div>

  
<div class="form-group has-feedback ">
    <?php $id = "id='submit'";
     echo form_submit('submit', 'Create Customer', $id);?>
    </div>
    </div>
<?php echo form_close();?>


















        <a class="btn btn-primary btnNext">Next</a>
    </div>
    <div class="tab-pane" id="tab2">
        <a class="btn btn-primary btnNext">Next</a>
        <a class="btn btn-primary btnPrevious">Previous</a>
    </div>
    <div class="tab-pane" id="tab3">
        <a class="btn btn-primary btnPrevious">Previous</a>
    </div>
</div>

<div class="col-md-8 col-md-offset-4 text-center">
    <?php if(isset($message) || validation_errors() !== ''): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <?= isset($message)? $message: ''; ?>
        </div>
    <?php endif; ?>




 

 
</div>

<script type="text/javascript">

  
   


    $('#products').change(function(){
        var   productName =  $('#products').val();
     //   alert(productName);
    var amount1 =    $('#packageAmount').val("");
  
if(productName == "CreditRepair"){
      amount1 = 250;
      $('#packageAmount').val(amount1);

}else if(productName == "CreditCleanUp"){
    amount1 = 125;
    $('#packageAmount').val(amount1);

}else if(productName == "CreditReport"){
    amount1 = 62.50;
    $('#packageAmount').val(amount1);

}else{

    amount1 = 450;
    $('#packageAmount').val(amount1);

}
    });


// Ajax post
$(document).ready(function() {
$("#submit").click(function(event) {
event.preventDefault();

var   productName =  $('#products').val();
//check  fo  subscriotions  

if(productName == "CreditAssessment"){
     
     
      subscription_type = null;

}else{
    subscription_type = 1;

}


var first_name = $("input#first_name").val();
var last_name = $("input#last_name").val();
var email = $("input#email").val();
var bank = $("#bank").val();
var phone = $("input#phone").val();
var idnumber = $("input#idnumber").val();
var productId = $("input#productId").val();
var amount = $("input#packageAmount").val();
var billingdate = $("input#billingdate").val();
//var productName = $("input#products").val();
var code = $("input#code").val();
var address = $("input#address").val();
var street = $("input#street").val();
//alert(productName);
if(first_name == '' || last_name == '' || idnumber == '' || phone == '' ||email == '' ){

alert("Please Fill In All Fields!");


}else{

jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "/accounts/SaveCustomer",
dataType: 'json',
data: {first_name: first_name, last_name: last_name, email:email , bank:bank , phone:phone ,idnumber:idnumber ,billingdate:billingdate,subscription_type:subscription_type,amount:amount,code:code,address:address,street:street,productName:productName,productId:productId },
success: function(res) {

  //  alert(res);
if (res != 1)
{
    alert("Customer Added Successfully!!!");
    

var url = '/accounts/addcustomer';
 //window.open(url) 
 window.location.href = url ;
    

}else{

       alert("Failed Please  try again");
}
}
});



}



});
});




$("#email").bind("keyup change", function(){

  var email = $(this).val();
 // alert('I am  here');

  $.ajax({
    url:'CheckIfEmailExist',
    type: "POST",// <---- ADD this to mention that your ajax is post
    data:{ send:true, email:email },// <-- ADD email here as pram to be submitted
    success:function(data){
        if(data==1){
            $("#checkemail").text("User ALready  Exist!!!");
             $("#email").val("");
            check2=1;
        }else{
            $("#checkemail").text("*Email Available");
            check2=0;
        }
    }
  });

});

 $('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

</script>