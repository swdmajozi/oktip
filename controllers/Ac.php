<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ac extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation','smsportal'));
		$this->load->helper(array('url', 'language','file'));
      
        $this->load->library('grocery_CRUD');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	//	$this->load->model('htmltopdf_model');
		$this->load->library('pdf');
		$this->load->model('Customers_model');
	}





public function testpdf(){

             $this->data['admin'] = $this->ion_auth->user()->row();
            $this->data['content'] = 'customers/customers';
       //    $this->load->view('admin/login_template',$this->data);
            $this->data['view'] = 'customers/pdf';
            $this->_render_page('admin/layout', $this->data);

}



//check  if  email  exist  

public function TestPath(){

	$path = set_realpath('./images/');
     $file = 'ics_stop_order_form.pdf';

     echo  $path . $file;
}

public function CheckIfEmailExist(){



$email =  $this->input->post('email');
$result = $this->Customers_model->CheckIfEmailExist($email);
echo  $result;

}
	//insert  payment  DB

	// This function call from AJAX
public function SavePayment() {
	$data = array(
	'FirstName' => $this->input->post('first_name'),
	'LastName'=>$this->input->post('last_name'),
	'IdNumber' => $this->input->post('idnumber'),
	'Bank'=>$this->input->post('bank'),
	'Email' => $this->input->post('email'),
	'Phone'=>$this->input->post('phone'),
	'CreatedBy' => $this->session->userdata("user_id"),
	'CreatedDate'=> date('Y/m/d H:i:s'),
	'PaymentSatus'=> "Pending"
	);
	
	
	
	$first_name = $this->input->post('first_name');
	$last_name = $this->input->post('last_name');
	$email = $this->input->post('email');
	$phonenumbers = $this->input->post('phone');
	$productName= $this->input->post('phone');;
	
	$lastId = $this->Customers_model->SavePayment($data);
}
   function _example_output($output)
 
    {


          //print_r($output);
         

    	   $this->data['admin'] = $this->ion_auth->user()->row();
         //  $this->data['content'] = $view;
          //    $this->load->view('admin/login_template',$this->data);
    	 // 
          // $this->data['view'] = $this->load->view('our_template.php',$output);  
           $this->data['content'] = $this->load->view('our_template',$output);  
          $this->data['content'] = $view; 
           $this->_render_page('admin/layout2', $this->data);
      
     ///   $this->load->view('our_template.php',$output);    
    }
//get  all  customers  


	 public function getcustomers()
    {
       	$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('customers');
		//$crud->set_relation('officeCode','offices','city');
		//	$crud->display_as('officeCode','Office City');
		//	$crud->set_subject('Employee');

	//		$crud->required_fields('lastName');

	//		$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
    }

		public function AddCustomer()
	{

		if ($this->ion_auth->logged_in())
		{
	
			// display the create user form
	

			$this->data['first_name'] = array(
				'name' => 'first_name',
				'id' => 'first_name',
				'type' => 'text',
                'placeholder' => 'First Name',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name' => 'last_name',
				'id' => 'last_name',
				'type' => 'text',
                'placeholder' => 'Last Name',
                'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['identity'] = array(
				'name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['email'] = array(
				'name' => 'email',
				'id' => 'email',
				'type' => 'text',
                'placeholder' => 'Email',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['idnumber'] = array(
				'name' => 'idnumber',
				'id' => 'idnumber',
				'type' => 'text',
                'placeholder' => 'ID Number',
				'value' => $this->form_validation->set_value('company'),
			);
			$this->data['phone'] = array(
				'name' => 'phone',
				'id' => 'phone',
				'type' => 'text',
                'placeholder' => 'Cell Number#',
				'value' => $this->form_validation->set_value('phone'),
			);

			$this->data['address'] = array(
				'name' => 'address',
				'id' => 'address',
				'type' => 'text',
                'placeholder' => 'Address',
				'value' => $this->form_validation->set_value('address'),
			);

			$this->data['city'] = array(
				'name' => 'city',
				'id' => 'city',
				'type' => 'text',
                'placeholder' => 'City',
				'value' => $this->form_validation->set_value('city'),
			);

			$this->data['code'] = array(
				'name' => 'code',
				'id' => 'code',
				'type' => 'text',
                'placeholder' => 'Code',
				'value' => $this->form_validation->set_value('code'),
			);
			$this->data['bank'] = array(
				'FNB' => 'FNB',
				'ABSA' => 'ABSA',
				'NEDBANK' => 'NEDBANK',
                'STANDARDBANK' => 'STANDARD BANK',
                'CAPITEC' => 'CAPITEC',
			);

			$this->data['products'] = array(
				'CreditRepair' => 'Credit Repair',
				'CreditCleanUp' => 'Credit CleanUp',
				'CreditReport' => 'Credit Report',
				'CreditAssessment' => 'Credit Assessment',
			
			);
			$this->data['amount'] = array(
				'name' => 'amount',
				'id' => 'amount',
				'type' => 'text',
                'placeholder' => 'Product Amount',
				'value' => $this->form_validation->set_value('amount'),
			);
            $this->data['admin'] = $this->ion_auth->user()->row();
            $this->data['content'] = 'customers/customers';
       //    $this->load->view('admin/login_template',$this->data);
            $this->data['view'] = 'customers/customers';
            $this->_render_page('admin/layout', $this->data);
		//	$this->_render_page('auth/' . DIRECTORY_SEPARATOR . 'create_user', $this->data);
		}

}




// This function call from AJAX
public function SaveCustomer() {
$data = array(
'FirstName' => $this->input->post('first_name'),
'LastName'=>$this->input->post('last_name'),
'IdNumber' => $this->input->post('idnumber'),
'Bank'=>$this->input->post('bank'),
'Email' => $this->input->post('email'),
'Phone'=>$this->input->post('phone'),
'Product'=>$this->input->post('productName'),
'billing_date'=>$this->input->post('billingdate'),
'productAmount'=>$this->input->post('amount'),
'address'=>$this->input->post('address'),
'code'=>$this->input->post('code'),
'city'=>$this->input->post('city'),
'subscription_type'=>$this->input->post('subscription_type'),
'CreatedBy' => $this->session->userdata("user_id"),
'CreatedDate'=> date('Y/m/d H:i:s'),
'PaymentSatus'=> "Pending",
'cycles'=> 0,
'frequency'=> 3,
'paymentId'=> rand(5, 1000005),
);



$first_name = $this->input->post('first_name');
$last_name = $this->input->post('last_name');
$email = $this->input->post('email');
$phonenumbers = $this->input->post('phone');
$productName= $this->input->post('productName');
$banking = $this->input->post('bank');
$billingdate = $this->input->post('billingdate');
$amount = $this->input->post('amount');
$idnumber = $this->input->post('idnumber');
$lastId = $this->Customers_model->SaveCustomer($data);

if($banking != 'CAPITEC'){




if($lastId){

$url = base_url().'accounts/icssubscriptioncheckout/cusid/'.$lastId.'';
$html = '<a href= '.$url.'> LINK</a>'; 

 $test = new Smsportal();
 $message = 'Hi, Mr/Mrs '.$last_name.', Your Financial Freedom Awaits Simply Follow This '.$html.' Below And  Complete The Instructions To SUBSCRIBE your ICS '.$productName.'';
 $test->sendSms($phonenumbers, $message); //Send SMS


 $this->email->from('noreply@icswebserver.co.za','Interactive Credit Solutions Subscription');

  $toaddress = $email;
  $this->email->to($toaddress); 

  $this->email->subject('Interactive Credit Solutions Subscription');
   //$this->email->html($html);
  $this->email->message('Hi, Mr/Mrs '.$last_name.', Your Financial Freedom Awaits Simply Follow This '.$html.' Below And  Complete The Instructions To SUBSCRIBE your ICS '.$productName.'');

  $this->email->send();  
}    

}else{
	$url = base_url().'accounts/icssubscriptioncheckout/cusid/'.$lastId.'';

$html = '<!DOCTYPE html>
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

p{
	font-size:22px !important;
}
</style>
</head>
<body>

<img src="http://icswebserver.co.za/siyandamadjozi/assets/images/logobig.png" class="img-circle image-responsive logo" alt="ICS Logo" style="width: 50% !important;" >
<div class="row"align="right">
<p>65 Marshall Drive<br>
Unit 15, Mount Edgecombe Industrial Estate<br>
Mount Edgecombe, Durban, South Africa, 4302<br>
Tel: 087 021 0776<br>
Email: info@icscredit.co.za</p></br>
</br>
</div>
<div class="row">
<h7>PAYMENT NOTICE/ STOP ORDER</h7>
</div>
<hr>
<div class="row">
<p>Dear '.$last_name.'<br>
<b>RE: Payment Notification</b></p>

</div>
<div class="row">
<p>The above matter refers.<br>
Please take note that your monthly installment to be paid is R'.$amount.' on a monthly basis.
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
    <td>'.$idnumber.'</td>
   </tr>
</table>
</div>
<div class="row">
<p>
First Payment Due: '.$billingdate.'</p>
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

<div class="row">
<p>
Signed at Durban on this __ day of __ 2020</p>
</div>

</body>
</html>';


	//$this->pdf->loadHtml($output);
   // $this->pdf->render();

    $pdf = new Pdf();
    $pdf->load_html($html);
    $pdf->render();
    $output = $pdf->output();
    file_put_contents('stop_order.pdf', $output);
   // $this->pdf->stream("".$idnumber.".pdf", array("Attachment"=>0));






	$this->email->from('noreply@icswebserver.co.za','Interactive Credit Solutions Subscription');
   
	 $toaddress = $email;
	 $this->email->to($toaddress); 
   
	 $this->email->subject('Interactive Credit Solutions Subscription');
	 $this->email->message('Hello '.$this->input->post('first_name').' '.$this->input->post('first_name').'., Please  Find PDF attached  for  Debit Order To  accept  Terms  and  Conditions');
	
     $path = set_realpath('/');
     $file = 'stop_order.pdf';
	 $this->email->attach($file);
   
	 $this->email->send(); 


}
//Either you can print value or you can send value to database


echo json_encode($lastId);


}



public function  send_email($url, $first_name, $last_name){

   $this->email->from('noreply@icswebserver.co.za','ICS  Web APP');

   $toaddress = 'swdmajozi@gmail.com';
	$this->email->to($toaddress); 

	$this->email->subject('Payment Link');
	$this->email->message('Hello '.$first_name.' '.$last_name.'., Please  Follow  This Link <a href="'.$url.'">Link </a>  To  accept  Terms  and  Conditions');

	$this->email->send();     

}


public function success(){

	$this->load->view('customers/success');  

}

public function cancel(){

     $this->load->view('customers/cancel');  

}
public function sendsms(){

	$test = new Smsportal();
	$test->sendSms('0780704148','Test Message'); //Send SMS
	//$test->checkcredits(); //Check your credit balance

}

public function out(){

       $get = $this->uri->uri_to_assoc();
       $userid = $get['cd']; // value


       $cusdata['data'] =$this->Customers_model->GetCustomerDataById($userid);
	//print_r($cusdata);
       $this->load->view('customers/checkout', $cusdata);

}


           private function _render_page($view, $data = NULL, $returnhtml = FALSE)

//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}

	
    public function allcustomers(){
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('login', 'refresh');
        }
        else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }
        else
        {
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
			$this->data['users'] = $this->Customers_model->getAllCustomers();
			
		//	print_r($this->data['users']);
            $this->data['admin'] = $this->ion_auth->user()->row();
            $this->data['view'] = 'customers/index';
            $this->_render_page('admin/layout', $this->data);
        }

	}
	
		
    public function payments(){
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('login', 'refresh');
        }
        else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }
        else
        {
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
			$this->data['users'] = $this->Customers_model->getPayments();
			
		//	print_r($this->data['users']);
            $this->data['admin'] = $this->ion_auth->user()->row();
            $this->data['view'] = 'customers/payments';
            $this->_render_page('admin/layout', $this->data);
        }

    }
	


}


