<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin Panel management, includes: 
 * 	- Admin Users CRUD
 * 	- Admin User Groups CRUD
 * 	- Admin User Reset Password
 * 	- Account Settings (for login user)
 */
class Gethelp extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->mTitle = 'Admin Panel - ';
		$this->load->model('Main_model');
		$this->load->model('User_model');
	}




public function adminconfirmation(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->getfundstoconfirmadmin($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('adminconfirmation',$ress);

  }

    public function deleteallocation(){
$donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(3);
        // echo $ref;
      $userto = $this->uri->segment(4);
     // echo $userto;
      $fromid =$this->uri->segment(5);
      $amount=$this->uri->segment(6);

       $random = $this->User_model->selectuser($userto );
       $status = 'Homeless';
  

  ///$this->User_model->UpdateStatusAdd($ref,$amount,$status);  //reversing  the  money  
 // $this->User_model->UpdateTransactionStatus($ref);  //change  transaction  status back  to  waiting
$res = $this->User_model->deleteallocation($ref);    //deleting  and  blocking  the  donation  
  
//$this->User_model->deactivateuser($fromid);
//echo $res;
  redirect('account/admin','refresh');
  

  }

public function submitphlevel3(){

        $userid = $this->session->userdata('user_id');
        $res = $this->User_model->getuserdetails($userid );
        $ref = rand(100,99999);
        $from_address= $res[0]['email'];
        $from_phone= $res[0]['phone'];
        $date = date('Y-m-d H:i:s');
		//$period = $this->input->post('period');
		$amount = $this->input->post('amount');
		$random = $this->User_model->selectallocation($amount);
        $randomuser= $random[0]['phone'];  
        $period = 6;
        $level = 3;


		$resuslt= $this->User_model->submitrequest3($userid ,$amount ,$from_address,$ref,$date,$period,$level);
  	           echo $resuslt;

	

	}
public function submitphlevel2(){

        $userid = $this->session->userdata('user_id');
        $res = $this->User_model->getuserdetails($userid );
        $ref = rand(100,99999);
        $from_address= $res[0]['email'];
        $from_phone= $res[0]['phone'];
        $date = date('Y-m-d H:i:s');
		//$period = $this->input->post('period');
		$amount = $this->input->post('amount');
		$random = $this->User_model->selectallocation($amount);
        $randomuser= $random[0]['phone'];  

   $period = 4;
        $level = 2;
		$resuslt= $this->User_model->submitrequest2($userid ,$amount ,$from_address,$ref,$date,$period,$level);
  	           echo $resuslt;

	

	}

public function getorder(){

        $userid = $this->session->userdata('user_id');
        $res = $this->User_model->getuserdetails($userid );
        $ref = $this->uri->segment(3);
        $from_address= $res[0]['email'];
        $from_phone= $res[0]['phone'];
        $date = date('Y-m-d H:i:s');    
        $amount = $this->input->post('amount');

        $count= $this->Main_model->checkifexist($userid);

     if($count[0]['count'] == 3){


 $resuslt = "You cant provide help  more  than  thrice!!!";

        }else{
    
//echo "fail!!!";
    $resuslt= $this->User_model->getorderupdate($userid,$from_address,$ref,$date);
       // $resuslt= $this->User_model->submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userfromid,$ref,$status,$remaining);
    
}
//echo $resuslt;
redirect('account','refresh');

}
		//get  homeless PH's
	public function homeless(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->gethomeless($userfromid);
//print_r($ress['help']);

                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('homeless',$ress);

	}
//get all  user  PH 
public function getph(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->getph($userfromid);
//print_r($ress['help']);

                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('ph',$ress);

	}
//addd  updates


//addd  updates


	public function submitnews(){

      $userid = $this->session->userdata('user_id');       

          $res = $this->User_model->getuserdetails($userid );

       
          $date = date('Y-m-d H:i:s');
		
          	$news = $this->input->post('news');
		
		//echo  $userid;
		$resuslt= $this->User_model->submitnews($userid,$news,$date);
      

		echo $resuslt;

	}
//submit  the  withdrawal admin
	public function submitwithdrawalv1(){

        // $userid = $this->session->userdata('user_id');       
$userid = $this->input->post('id');
          $res = $this->User_model->getuserdetails($userid );       
          $ref = $this->input->post('ref');
          $from_address= $res[0]['email'];
          $from_phone= $res[0]['phone'];
          $user_from = $res[0]['first_name'];
          $user_name= $res[0]['username'];
          $from_name= $res[0]['last_name'];
          $from_address= $res[0]['email'];
          $status = 'Reserved';
         
          $remaining = date("Y-m-d H:i:s", strtotime('+1 days'));
		      $date = date("Y-m-d H:i:s");
		
          $amount = $this->input->post('amount');

         // $amount = $originalamount * 1;
         // $amount2 = $originalamount * 0.2;

          		  $period = $this->input->post('period');



//$this->User_model->submitrecommit($userid ,$amount2,$ref);
	
		$this->User_model->submitwithdrawal($userid ,$amount ,$from_address,$ref,$date,$period);



		//change  tran sactions withdrawal  statement...
       $resuslt= $this->User_model->changewithdrawal($ref);
	  

		echo $resuslt;

	//$this->load->view('userdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}
//withdraw  admin 

	public function withdrawv1(){
	// $userfromid = $this->session->userdata('user_id');
	$amount = $this->uri->segment(5);
	 	$period = $this->uri->segment(4);
	 $ref= $this->uri->segment(4);
	 $userfromid = $this->uri->segment(3);
         $res = $this->User_model->getuserdetails($userfromid);
$res['amount'] = $amount;
$res['ref_no']  = $ref;
$res['period']  = 2;
        $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
        $res['userid']  = $res[0]['id'];
        $res['email']  = $res[0]['email'];
   $this->load->view('sidebar',$res );
		$this->load->view('withdraw',$res );
	}




//submit  the  withdrawal 
	public function submitwithdrawal(){

         $userid = $this->session->userdata('user_id');       

          $res = $this->User_model->getuserdetails($userid );       
          $ref = $this->input->post('ref');
          $from_address= $res[0]['email'];
          $from_phone= $res[0]['phone'];
          $user_from = $res[0]['first_name'];
          $user_name= $res[0]['username'];
          $from_name= $res[0]['last_name'];
          $from_address= $res[0]['email'];
          $status = 'Reserved';
         
          $remaining = date("Y-m-d H:i:s", strtotime('+1 days'));
		  $date = date("Y-m-d H:i:s");
		
          $period = $this->input->post('period');
		  $amount = $this->input->post('amount');

	
		$resuslt= $this->User_model->submitwithdrawal($userid ,$amount ,$from_address,$ref,$date,$period);
       // $resuslt= $this->User_model->submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userid,$ref,$status,$remaining);
	  

		echo $resuslt;

	//$this->load->view('userdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}



	public function withdraw(){
	 $userfromid = $this->session->userdata('user_id');
    	$amount = $this->uri->segment(3);
	 	 $period = $this->uri->segment(5);
	   $ref= $this->uri->segment(4);
	// $res = $this->uri->segment(3);
         $res = $this->User_model->getuserdetails($userfromid);
$res['amount'] = $amount;
$res['ref_no']  = $ref;
$res['period']  = $period;
        $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
        $res['userid']  = $res[0]['id'];
        $res['email']  = $res[0]['email'];
  $this->load->view('sidebar',$res );
	  	$this->load->view('withdraw',$res );
	}

    public function block(){
$donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(3);
        // echo $ref;
      $userto = $this->uri->segment(4);
     // echo $userto;
      $fromid =$this->uri->segment(5);
      $amount=$this->uri->segment(6);

       $random = $this->User_model->selectuser($userto );
       $status = 'Homeless';
  

  $this->User_model->UpdateStatusAdd($ref,$amount,$status);  //reversing  the  money  
  $this->User_model->UpdateTransactionStatus($ref);  //change  transaction  status back  to  waiting
  //$res = $this->User_model->deletedonation($ref,$fromid);    //deleting  and  blocking  the  donation  
  
$this->User_model->deactivateuser($fromid);

    redirect('account/admin','refresh');
  

  }
//get people  who are  out  of  time  and  block
public function blockrelocate(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->blockrelocate($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('block',$ress);

	}

//get funds  to  confirm  
public function listpeople(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->listpeople($userfromid);
//print_r($ress['help']);

                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('listpeople',$ress);

	}

//get  donated   funds
public function donatedfunds(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->donatedfunds($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('donatedfunds',$ress);

	}

//get  confirmed  funds
public function confirmedfunds(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->confirmedfunds($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('confirmedfunds',$ress);

	}

//get funds  to  confirm  
public function sendconfirmations(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->getfundstoconfirm($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('sendconfirmation',$ress);

	}

function  test(){
$data = date('Y-m-d H:m:s', strtotime('+1 week'));
echo $data;
}


//get  recieved  funds
public function recievedfunds(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['help'] = $this->User_model->recievedfunds($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('recievedfunds',$ress);

	}

//submit  request 
	public function submitrequestv1(){
   $userfromid = $this->session->userdata('user_id');


	}

  
  public  function  just(){
   $res= $this->Main_model->checkifexist($user);
//print_r($res['help']);
//redirect('account/getuserdetails');
    //   $res['first_name'] = $res['help'][0]['first_name'];
     $count  = $res[0]['count'];
     $total  = $res[0]['total'];

     echo $count;


}

public function submitph(){

$userid = $this->session->userdata('user_id');
     
        $amount = $this->input->post('amount');

   

        
        $res = $this->User_model->getuserdetails($userid );
        $ref = rand(100,99999);
        $from_address= $res[0]['email'];
        $from_phone= $res[0]['phone'];
        $date = date('Y-m-d H:i:s');  
        $period = $this->input->post('period');
        $level = '0';
        
        
if($period == 10){
     $allocation_date = date("Y-m-d H:i:s", strtotime('+10 days'));
    
}elseif ($period == 15) {
$allocation_date = date("Y-m-d H:i:s", strtotime('+15 days'));
}else{
$allocation_date = date("Y-m-d H:i:s", strtotime('+30 days'));
}
       
  
    


    


       $rrrrr= $this->User_model->submitrequest($userid ,$amount ,$from_address,$ref,$date,$period,$level,$allocation_date);

   

       
               echo $rrrrr;

  

  }
public function submitrequestv111(){

      $userid = $this->session->userdata('user_id');       

          $res = $this->User_model->getuserdetails($userid );



       
          $ref = rand(100,99999);
          $from_address= $res[0]['email'];
          $from_phone= $res[0]['phone'];
          $user_from = $res[0]['first_name'];
          $user_name= $res[0]['username'];
          $from_name= $res[0]['last_name'];
          $from_address= $res[0]['email'];
          $status = 'Reserved';
         // $from_phone= $res[0]['phone'];
          //$from_phone= $res[0]['phone'];
          //$from_phone= $res[0]['phone'];
         // $date = date('Y-m-d H:i:s');
		//$user_to =$this->uri->segment(4);
                $remaining = date("Y-m-d H:i:s", strtotime('+1 days'));
		   $date = date("Y-m-d H:i:s");
		
          	$period = $this->input->post('period');
		$amount = $this->input->post('amount');

		$random = $this->User_model->selectallocation($userid);
        //  print_r($res);
           $user_to= $random[0]['id'];
		
		$resuslt= $this->User_model->submitrequest($userid ,$amount ,$from_address,$ref,$date,$period);
        $resuslt= $this->User_model->submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userid,$ref,$status,$remaining);
	  

		echo $resuslt;

	//$this->load->view('userdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}

//get user  details  using  ID  
	public function getuserdetails(){

print_r($this->session->all_userdata());

		//echo  "Thank  God  am  here";

		$userid =$this->uri->segment(4);
		//echo  $userid;
		$res['help'] = $this->User_model->getuserdetails($userid);

		print_r($res);

		$this->load->view('userdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}

//load users  that  need  help




	public function myrequests(){

  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);
$ress['requests'] = $this->User_model->myrequests($userfromid);


                $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('mydonations',$ress);

	}




	public function index(){
//echo  "WHat Do You  Want With  This  Link?????????";
  $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
        $this->load->view('sidebar', $ress);
$this->load->view('helpform',$ress);

	}
	// Admin Users CRUD
	public function admin_user()
	{
		$crud = $this->generate_crud('admin_users');
		$crud->columns('groups', 'username', 'first_name', 'last_name', 'active');
		$this->unset_crud_fields('ip_address', 'last_login');

		// cannot change Admin User groups once created
		if ($crud->getState()=='list')
		{
			$crud->set_relation_n_n('groups', 'admin_users_groups', 'admin_groups', 'user_id', 'group_id', 'name');
		}

		// only webmaster can reset Admin User password
		if ( $this->ion_auth->in_group(array('webmaster', 'admin')) )
		{
			$crud->add_action('Reset Password', '', 'admin/panel/admin_user_reset_password', 'fa fa-repeat');
		}
		
		// disable direct create / delete Admin User
		$crud->unset_add();
		$crud->unset_delete();

		$this->mTitle.= 'Admin Users';
		$this->render_crud();
	}

	// Create Admin User
	public function admin_user_create()
	{
		// (optional) only top-level admin user groups can create Admin User
		//$this->verify_auth(array('webmaster'));

		$form = $this->form_builder->create_form();

		if ($form->validate())
		{
			// passed validation
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$additional_data = array(
				'first_name'	=> $this->input->post('first_name'),
				'last_name'		=> $this->input->post('last_name'),
			);
			$groups = $this->input->post('groups');

			// create user (default group as "members")
			$user = $this->ion_auth->register($username, $password, $email, $additional_data, $groups);
			if ($user)
			{
				// success
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
			}
			else
			{
				// failed
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		$groups = $this->ion_auth->groups()->result();
		unset($groups[0]);	// disable creation of "webmaster" account
		$this->mViewData['groups'] = $groups;
		$this->mTitle.= 'Create Admin User';

		$this->mViewData['form'] = $form;
		$this->render('panel/admin_user_create');
	}

	// Admin User Groups CRUD
	public function admin_user_group()
	{
		$crud = $this->generate_crud('admin_groups');
		$this->mTitle.= 'Admin User Groups';
		$this->render_crud();
	}

	// Admin User Reset password
	public function admin_user_reset_password($user_id)
	{
		// only top-level users can reset Admin User passwords
		$this->verify_auth(array('webmaster'));

		$form = $this->form_builder->create_form();
		if ($form->validate())
		{
			// pass validation
			$data = array('password' => $this->input->post('new_password'));
			if ($this->ion_auth->update($user_id, $data))
			{
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
			}
			else
			{
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		$this->load->model('admin_user_model', 'admin_users');
		$target = $this->admin_users->get($user_id);
		$this->mViewData['target'] = $target;

		$this->mViewData['form'] = $form;
		$this->mTitle.= 'Reset Admin User Password';
		$this->render('panel/admin_user_reset_password');
	}

	// Account Settings
	public function account()
	{
		// Update Info form
		$form1 = $this->form_builder->create_form('admin/panel/account_update_info');
		$form1->set_rule_group('panel/account_update_info');
		$this->mViewData['form1'] = $form1;

		// Change Password form
		$form2 = $this->form_builder->create_form('admin/panel/account_change_password');
		$form1->set_rule_group('panel/account_change_password');
		$this->mViewData['form2'] = $form2;

		$this->mTitle = "Account Settings";
		$this->render('panel/account');
	}

	// Submission of Update Info form
	public function account_update_info()
	{
		$data = $this->input->post();
		if ($this->ion_auth->update($this->mUser->id, $data))
		{
			$messages = $this->ion_auth->messages();
			$this->system_message->set_success($messages);
		}
		else
		{
			$errors = $this->ion_auth->errors();
			$this->system_message->set_error($errors);
		}

		redirect('admin/panel/account');
	}

	// Submission of Change Password form
	public function account_change_password()
	{
		$data = array('password' => $this->input->post('new_password'));
		if ($this->ion_auth->update($this->mUser->id, $data))
		{
			$messages = $this->ion_auth->messages();
			$this->system_message->set_success($messages);
		}
		else
		{
			$errors = $this->ion_auth->errors();
			$this->system_message->set_error($errors);
		}

		redirect('admin/panel/account');
	}
	
	/**
	 * Logout user
	 */
	public function logout()
	{
		$this->ion_auth->logout();
		redirect('admin/login');
	}
}
