<?php
class Htmltopdf_model extends CI_Model{
function __construct() {
parent::__construct();
}
	function GetDetails()
	{
		$this->db->order_by('CustomerID', 'DESC');
		return $this->db->get('tbl_customer');
	}


	function fetch_single_details($customer_id)
	{
		$this->db->where('CustomerID', $customer_id);
		$data = $this->db->get('tbl_customer');
			$output = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>ICS Stop Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

.table td, .table th {
    padding: .05rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>
</head>
<body>

<h3></h3>

<div class="row"align="right">
<p>65 Marshall Drive<br>
Unit 15, Mount Edgecombe Industrial Estate<br>
Mount Edgecombe, Durban, South Africa, 4302<br>
Tel: 087 021 0776<br>
Email: info@icscredit.co.za</p></br>
</br></br></br></br></br></br></br></br>
</div>
<div class="row">
<h4>PAYMENT NOTICE/ STOP ORDER</h4>
</div>
<hr>
<div class="row">
<p>Dear Sir/Madam<br>
<b>RE: Payment Notification</b></p>

</div>
<div class="row">
<p>The above matter refers.<br>
Please take note that your monthly installment to be paid is R_ _ _ on a monthly basis.
</p>
</div>
<div class="row">
<p>
Kindly take note that your above-mentioned installment must be paid EVERY MONTH. Should you fail to pay the specified amount, your case may be terminated, and you will no longer enjoy the benefits of our credit repair services.</p>
</div>

<div class="row">
<p>
Your installment must be deposited into the account as specified below:</p>
</div>
<div class="row">

<table style="width:100%;" class="table table-bordered">
  <tr>
    <td>Account Name</td>
    <td>Interactive Credit Solutions (PTY) LTD</td>
   </tr>
   <tr>
    <td>Bank</td>
    <td>First National Bank</td>
   </tr>
    <tr>
    <td>Branch No</td>
    <td>250655</td>
   </tr>
    <tr>
    <td>Account No</td>
    <td>62836072786</td>
   </tr>

     <tr>
    <td>Reference</td>
    <td>“Clients I.D Number”</td>
   </tr>
</table>
</div>
<div class="row">
<p>
First Payment Due: __ __ 2020</p>
</div>

<div class="row">
<p>
Please take note that the above banking details are those of Interactive Credit Solutions. The account is a dedicated Account for payments made by clients of Interactive Credit Solutions for Stop Order Payments.</p>
</div>
<div class="row">
<p>
I trust you will find the above in order,<br>
Yours faithfully</p>
</div>

</body>
</html>';


	
		return $output;
	}
}

?>