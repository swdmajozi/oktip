<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="payment.css">
  
 <style>

.row {
    display: flow-root !important;
    display: -ms-flexbox !important;
    /* display: flex; */
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    /* margin-right: -15px; */
    /* margin-left: -15px; */
    text-align: center;
}

H7 {
font-weight: 900;
 	}
p{

	font-size:20px;
	font-weight: 900;
}
 	.form-group {
    margin-bottom: 1rem;
    padding-right: 15px !important;
}
 .payment-form{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.payment-form.dark{
	background-color: #ffff;
}

.payment-form .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.payment-form .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.payment-form .block-heading p{
	text-align: center;
	max-width: 720px;
	margin: auto;
	opacity:0.7;
}

.payment-form.dark .block-heading p{
	opacity:0.8;
}

.payment-form .block-heading h1,
.payment-form .block-heading h2,
.payment-form .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.payment-form form{
	border-top: 2px solid #5ea4f3;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.payment-form .title{
	font-size: 1em;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}

.payment-form .products{
	background-color: #f7fbff;
    padding: 25px;
}

.payment-form .products .item{
	margin-bottom:1em;
}

.payment-form .products .item-name{
	font-weight:600;
	font-size: 0.9em;
}

.payment-form .products .item-description{
	font-size:0.8em;
	opacity:0.6;
}

.payment-form .products .item p{
	margin-bottom:0.2em;
}

.payment-form .products .price{
	float: right;
	font-weight: 600;
	font-size: 0.9em;
}

.payment-form .products .total{
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	margin-top: 10px;
	padding-top: 19px;
	font-weight: 600;
	line-height: 1;
}

.payment-form .card-details{
	padding: 25px 25px 15px;
}

.payment-form .card-details label{
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.payment-form .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.payment-form .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (min-width: 576px) {
	.payment-form .title {
		font-size: 1.2em; 
	}

	.payment-form .products {
		padding: 40px; 
  	}

	.payment-form .products .item-name {
		font-size: 1em; 
	}

	.payment-form .products .price {
    	font-size: 1em; 
	}

  	.payment-form .card-details {
    	padding: 40px 40px 30px; 
    }

  	.payment-form .card-details button {
    	margin-top: 2em; 
    } 

	.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
	width:100% !important;
}

.logo img {
    vertical-align: middle;
    border-style: none;
    width: 100% !important;
}

.fffmydiv{

	background-color: #3D9970;
  width: 100%;
  
  position: absolute;
  left: 50%;
  margin-left: -50px;
}


.headings{

    border-top: 2px solid #5ea4f3;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    background-color: #66b3ce;
    padding: 0;
    max-width: 600px;
    margin: auto;
}

</style>
</head>
<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
<?php foreach($data as  $cus){



?>
		<img src="<?php echo base_url();?>/assets/images/logobig.png" class="img-circle image-responsive logo" alt="ICS Logo" style="width: 100% !important;" >
        <p>Hello,  MR/MRS <?php echo @$cus->LastName; ?></br><span style="color: red; font-weight: 900;"> CONGRATULATIONS!!!</span> ON  TAKING A SMART STEP TO  GET FINANCIAL FREEDOM.
        </div>
           <div class="products"style="text-align:center;">
            <div class="headings">
            <h3 class="title">My Profile Summary</h3>
			<h6 class="title">Tell Us About Yourself</h6>
		</div>
<div class="mydiv">
			<div class="row " style="text-align: center !important;">
			<div class="form-group col-md-06">
			<h7>Your Name: </h7>
				<span><?php echo @$cus->FirstName;?></span>
			</div>
			
			<div class="form-group col-md-06">
			<h7>Your Surname: </h7>
             	<span><?php echo @$cus->LastName;?></span>
			 </div>
</div>
			 <div class="row">
			<div class="form-group col-md-06">
			<h7>Physical Address: </h7>
			<span><?php echo @$cus->address;?></span>
			</div>

				</div>
 <div class="headings">
			 <h6 class="title">Contact Details</h6>
</div>
			 <div class="row">
	<div class="form-group col-md-06">
			<h7>Your Email: </h7>
        	<span><?php echo @$cus->Email;?></span>
			</div>
			<div class="form-group col-md-06">
			<h7>Your Cell#: </h7>
           	<span><?php echo @$cus->Phone;?></span>
			</div>

			</div>
            <div class="item">
            	 <div class="headings">
              <span class="price"></span>
              <h3 class="title">Package You Chose:</h3>
                </div>
              <p class="item-description">1. <?php echo $cus->Product;?></p>
            </div>
          
<div class="headings">
             <p class="">Your Payments</p>
</div>
            <h7> Your review / Setup Fee of:<b> R <?php echo  $cus->productAmount;?></b> will be charged on the <u><?php echo  @$cus->billing_date;?></u> that you have provided.</br>
Your intial monthly fee of : R <?php echo  $cus->productAmount;?> will be charged on the <u><?php  $futuredate = strtotime("+30 days", strtotime($cus->billing_date));
echo date("Y-m-d", $futuredate);
?> </u></h7>
</div>

<br>  <br> <br>     
     <?php $cus->Phone;?>
  <form action="https://www.payfast.co.za/eng/process" method="post" onsubmit="return checkForm(this);">
    <input id="merchant_id" name="merchant_id" value="11418196" type="hidden">
    <input id="merchant_key" name="merchant_key" value="i1hioxoxqklp8" type="hidden">
    <input id="return_url" name="return_url" value="<?echo base_url();?>" type="hidden">
    <input id="cancel_url" name="cancel_url" value="<?echo base_url();?>" type="hidden">
    <input id="notify_url" name="notify_url" value="<?echo base_url();?>/payfast/itn" type="hidden">
    <input id="name_first" name="name_first" value="<?php @echo $cus->FirstName;?>" type="hidden">
    <input id="name_last" name="name_last" value="<?php @echo $cus->LastName;?>" type="hidden">
    <input id="email_address" name="email_address" value="<?php @echo  $cus->Email;?>" type="hidden">
	<input id="email_address" name="cell_number" value="<?php @echo $cus->Phone;?>" type="hidden">
    <input id="m_payment_id" name="m_payment_id" value="<?php @echo $cus->paymentId;?>" type="hidden">
    <input id="amount" name="amount" value="5" type="hidden">
    <input id="item_name" name="item_name" value="<?php @echo $cus->Product;?>" type="hidden">
    <input id="item_description" name="item_description" value="package description" type="hidden">
	<input type="hidden" name="payment_method" value="cc">
	<input type="hidden" name="email_confirmation" value="1">
    <input type="hidden" name="confirmation_address" value="<?$cus->Email;?>">
	<input type="hidden" name="subscription_type" value="<?php echo @$cus->subscription_type;?>">
    <input type="hidden" name="billing_date" value="<?php echo  @$cus->billing_date;?>">
    <input type="hidden" name="recurring_amount" value="<?php echo  $cus->productAmount;?>">
    <input type="hidden" name="frequency" value="3">
    <input type="hidden" name="cycles" value="0">


    
    <p style="text-align:center;"><a href="<?php echo base_url()?>docs/Terms and Conditions and Privacy of INTERACTVE CREDIT SOLUTIONS PRODUCTS AND SERVICE DEC2019.pdf" target="_blank"> Terms and Conditions</a></p>
	<p><input type="checkbox" name="terms" required > I accept the Terms and Conditions</p>


    <input type="submit" class="btn btn-success" value="Continue...">
     <p>Next step is billing.</p>


             
           
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

<?php }?>
</body>

<script>


function checkForm(form)
  {
    ...
    if(!form.terms.checked) {
      alert("Please indicate that you accept the Terms and Conditions");
      form.terms.focus();
      return false;
    }
    return true;
  }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>




