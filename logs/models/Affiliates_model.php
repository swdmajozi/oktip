<?php
class Affiliates_model extends CI_Model{
function __construct() {
parent::__construct();
}

//check if  customer  

function CheckIfEmailExist($email){

	$this->db->select('Email');
	$this->db->from('customers')->where('Email', $email)->limit(1);
	
	$query = $this->db->get();

	//print_r($query);
	if($query->num_rows() == 1){
		return 1;
	}else{
	return 0;
}
}


function SavePayment($data){
	// Inserting in Table(students) of Database(college)
	$this->db->insert('payments_payfast', $data);
	
	$insert_id = $this->db->insert_id();
	
	   return  $insert_id;
	}

function SaveCustomer($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('customers', $data);

$insert_id = $this->db->insert_id();

   return  $insert_id;
}


function GetCustomerDataById($id){


   $query = $this->db->select('*')->from('customers')
		                  ->where('CustomerId', $id)
		                 // ->join('payments_payfast', 'customers.id = payments_id.cid')
		                  ->limit(1)
		                  ->get();
 return $query->result();
}

//get  all  customers
function getAllCustomers(){

	$this->db->select('*');
	$this->db->from('customers');
///	$this->db->join('comments', 'comments.id = articles.id','left');
	
	$query = $this->db->get();
	return $query->result();
}


//get  payments

function getPayments(){

	$this->db->select('*');
	$this->db->from('payments_payfast');
///	$this->db->join('comments', 'comments.id = articles.id','left');
	
	$query = $this->db->get();
	return $query->result();
}

}
?>