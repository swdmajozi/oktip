<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allocations extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	$this->verify_login();
		// CI Bootstrap libraries
		$this->load->library('form_builder');
		$this->load->library('system_message');
		$this->load->library('email_client');
		$this->load->model('User_model');

		$this->push_breadcrumb('Auth');

		$this->load->model('Main_model');
		$this->load->model('Allocations_model');
	}

	
	public function index()
	{
		         $this->load->view('sidebar',$result );

	}



//get  selected  id  by  id   
			public function getkeptfund(){
		
		   $id =$this->uri->segment(3);
         $res= $this->Allocations_model->getkeptfund($id);
		 $result['amount'] = $res[0]['amount'];
		 $result['userid']= $res[0]['userid'];
		 $result['id']=  $id;


         $this->load->view('sidebar',$result );
	     $this->load->view('keptfunds/singlekeptfund',$result );
	
	}


//getting  list  of  all  kept  funds  
			public function getallkeptfunds(){

         $user = $this->session->userdata('user_id');
         $result['help']= $this->Allocations_model->getallkeptfunds();
         $this->load->view('sidebar',$result );
	     $this->load->view('keptfunds/allkeptfunds',$result );
	
	}


//function  to  add kept funds  to  PH  list 

	public function addkeptfunds(){
         
          $amount = $this->input->post('amount');
          $userid = $this->input->post('userid');
          $period = $this->input->post('period');  
          $id = $this->input->post('id');      
		  $res = $this->User_model->getuserdetails($userid);
          $ref_no = rand(100,99999);
          $from_address= $res[0]['email'];
        //  $from_address= $res[0]['referer'];
          $from_phone= $res[0]['phone'];
          $date = date('Y-m-d H:i:s');

	
		  $this->Allocations_model->changewithdrawal($id);
		  $result= $this->Allocations_model->addkeptfunds($userid,$amount,$from_address,$ref_no,$date,$period);



		  echo  $result;

		  //$this->Allocations_model->addkeptfunds();
	//	redirect('account/viewusers','refresh');
	

	}


	

}
