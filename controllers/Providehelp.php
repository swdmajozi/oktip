<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin Panel management, includes: 
 * 	- Admin Users CRUD
 * 	- Admin User Groups CRUD
 * 	- Admin User Reset Password
 * 	- Account Settings (for login user)
 */
class Providehelp extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
		$this->mTitle = 'Admin Panel - ';
		$this->load->model('Main_model');
		$this->load->model('User_model');
	}
  public function do_upload()
        {
                $config['upload_path']          = './';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
echo "success";
                        $this->load->view('account', $data);
                }
        }

public function deleteph(){
$donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(4);
      $amount = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->deleteph($ref);
		redirect('gethelp/getph','refresh');
	

	}
	public function givehelp(){
	 $userfromid = $this->session->userdata('user_id');

         $res = $this->User_model->getuserdetails($userfromid);


        $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
	 $level = $this->User_model->checklevel($userfromid);
	$levels = $level[0]['level'];
//echo $levels;
///	$recommitamount = $this->Main_model->getamountonthesystem($userfromid);
	//  $res['amount'] = $recommitamount[0]['amount'];
//echo $res['amount'];


$this->load->view('sidebar',$res );
		$this->load->view('givehelp',$res );


        
	}
	public function changestatustranslist(){
$donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(4);
      $amount = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->changestatuslist($ref);
		redirect('gethelp/listpeople','refresh');
	

	}

		public function checkifreserved(){
//$donaterid = $this->session->userdata('user_id');
       //  $ref = $this->uri->segment(7);
          $ref = $this->input->post('ref');
      //  $res['wantedamount'] = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->getpeoplealeadyreserved($ref);
//redirect('gethelp/donatedfunds','refresh');
	echo $res;

	}
	public function cancel(){
$donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(7);
      $amount = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->cancel($ref,$donaterid,$amount);
		redirect('gethelp/donatedfunds','refresh');
	

	}
//view  user to  donate  to  details
	public function viewdetails(){

//print_r($this->session->all_userdata());
  $userfromid = $this->session->userdata('user_id');
         $res = $this->User_model->getuserdetails($userfromid);

        $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
		//echo  "Thank  God  am  here";
        $res['ref'] = $this->uri->segment(7);
        $res['wantedamount'] = $this->uri->segment(8);
		$userid =$this->uri->segment(6);
		//echo  $userid;
		$res['help'] = $this->User_model->getuserdetails($userid);

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('viewdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}
//donopr  confirms  that  they  have  paid  
public function testa(){

	$date = date("Y-m-d", strtotime('+5 days'));

	echo $date;

	$new = 1000;
	$neww = $new + ($new * 0.5);
	echo $neww;
}
	public function confirmpaymentrecived(){
         $userid= $this->session->userdata('user_id');
         $ref = $this->uri->segment(7);
         $donorid = $this->uri->segment(6);
         $amountdonated = $this->uri->segment(8);
         $id = $this->uri->segment(4);
         $period = $this->uri->segment(9);

	     $new = $amountdonated;
	     $keeper = $new + ($new *0);
	     $bonus = $new * 0.1;

 
         $date = date("Y-m-d H:i:s", strtotime('+3 days'));
    


         $res = $this->User_model->getuserdetails($donorid);

          $ref_no = rand(100,99999);
          $from_address= $res[0]['email'];
          $from_address= $res[0]['referer'];
          $from_phone= $res[0]['phone'];
         // $date = date('Y-m-d H:i:s');
		 // $amount = $this->input->post('amount');	
		
//	$resuslt= $this->User_model->submitrequestv1($donorid,$newamount ,$from_address,$ref_no,$date, $scheduled_paymentdate);


// $this->User_model->submitrecommit($userid ,floor($keeper),$ref);

//add  bonu8s  to  the  usretrs  table 
    //  $res = $this->User_model->addbonus($user,$email,$bonus);
		$res = $this->User_model->confirmdonationrecieved($ref,$userid,$date,$id); //send  confirmation  donation  table 
                $res = $this->User_model->changestatustrans($ref,$date); //send  confirmation  transaction table 
          redirect('gethelp/sendconfirmations','refresh');
	

	}


//donopr  confirms  that  they  have  paid  

	public function confirmpaid(){
$donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(7);
      //  $res['wantedamount'] = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->confirmpaid($ref,$donaterid );
redirect('gethelp/donatedfunds','refresh');
	

	}
function test(){

 $donaterid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($donaterid);



$user_name= $res[0]['username'];

echo $user_name;
          $user_from= $res[0]['first_name'];
          $from_name= $res[0]['last_name'];
          $from_address= $res[0]['email'];
          $from_phone= $res[0]['phone'];
echo $user_from;
echo $from_name;

}





//get user  details  using  ID  
	public function confirmdonation(){

         $ref = $this->uri->segment(7);
      //  $res['wantedamount'] = $this->uri->segment(8);
		$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->confirmdonation($ref);

	

	}

	//submit  donation 
		public function submitdonationv1(){
  // load library
        $this->load->library('nexmo');
        // set response format: xml or json, default json
        $this->nexmo->set_format('json');

      //$userfromid = $this->session->userdata('user_id');
		 $userfromid = $this->input->post('id');
         $user_to = $this->input->post('allocate');
         $res = $this->User_model->getuserdetails($userfromid);
         $amount = $this->input->post('amount');
         $period = $this->input->post('period');
         $leftamount = $this->input->post('leftamount');
       $random = $this->User_model->selectuser($user_to, $amount);

        //  print_r($res);
          $ref_no= $random[0]['ref_no'];
          $user_name= $res[0]['username'];
          $user_from= $res[0]['first_name'];
          $from_name= $res[0]['last_name'];
          $from_address= $res[0]['email'];
          $from_phone= $res[0]['phone'];
          $date = date('Y-m-d H:i:s');
          $remaining = date("Y-m-d H:i:s", strtotime('+1 days'));
	
	   
	     $wantedamount = $this->input->post('wantedamount');
//
       //     $random = $this->User_model->checkrefnumber($ref);


if( $leftamount == 0){


   $ref = $this->input->post('ref');
$this->email->from('support@imbewuinvestors.co.za', 'Imbewu Investors
');
	$this->email->to($from_address); 

	$this->email->subject('Allocation Notification');
	$this->email->message('Hello, Your Order  Is Out on Imbewu Investors
(http://imbewuinvestors.co.za) Please Login to check.');

	$this->email->send(); 
   
	     	$status = 'Reserved';
	    
 $this->User_model->UpdateStatus($ref_no,$amount,$status);
	$resuslt=  $this->User_model->submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userfromid,$ref,$status,$remaining,$period);
	  



}else{

 $ref = $this->input->post('ref');


	$this->email->from('support@imbewuinvestors.co.za', 'Imbewu Investors
');
	$this->email->to($from_address);

	$this->email->subject('Allocation Notification');
	$this->email->message('Hello, Your Order  Is Out on Imbewu Investors
(http://imbewuinvestors.co.za) Please Login to check.');

	$this->email->send();
	  
   
	     	$status = 'Reserved';
	    
 $this->User_model->UpdateStatus($ref,$amount,$status);
$resuslt=  $this->User_model->submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userfromid,$ref,$status,$remaining,$period);
	  
//generate  ne reference  number  

 $allocation_date = date("Y-m-d H:i:s", strtotime('+3 days'));
 $newref = rand(100,99999);
 $level = 1;
 $this->User_model->submitrequest($userfromid ,$leftamount ,$from_address,$newref,$date,$period,$level,$allocation_date);




}
	     
	     	
	  

     
echo $resuslt;


	}


//submit  donation 
		public function submitdonation(){


      //$userfromid = $this->session->userdata('user_id');
		$userfromid = $this->input->post('id');
        // $user_to = $this->input->post('allocate');
          $res = $this->User_model->getuserdetails($userfromid);
           $amount = $this->input->post('amount');
          $random = $this->User_model->selectallocation();

        //  print_r($res);
$user_to= $random[0]['id'];
          $user_name= $res[0]['username'];
          $user_from= $res[0]['first_name'];
          $from_name= $res[0]['last_name'];
          $from_address= $res[0]['email'];
          $from_phone= $res[0]['phone'];
          $date = date('Y-m-d H:i:s');
          $remaining = date("Y-m-d H:i:s", strtotime('+1 days'));
		//$user_to =$this->uri->segment(4);
		
		 
		//  $userfromid = $this->input->post('allocate');
	     $ref = $this->input->post('ref');
	     $wantedamount = $this->input->post('wantedamount');
   
	     	$status = 'Reserved';
	    
//$this->User_model->UpdateStatus($ref,$amount,$status);
	  $resuslt= $this->User_model->submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userfromid,$ref,$status,$remaining);
	  
//redirect('/provide','refresh');
	//  if($resuslt == 1)
	 //  {
              //   $this->User_model->UpdateStatus($ref,$amount,$status);
//
	 //  }
     
echo $resuslt;


	}


//get user  details  using  ID  
	public function getuserdetails(){

//print_r($this->session->all_userdata());
        $userfromid = $this->session->userdata('user_id');
        $res = $this->User_model->getuserdetails($userfromid);

        $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
		//echo  "Thank  God  am  here";
        $res['ref'] = $this->uri->segment(7);
        $res['wantedamount'] = $this->uri->segment(8);
		$userid =$this->uri->segment(6);
		$res['period'] =$this->uri->segment(9);
		//echo  $res['period'];
		$res['help'] = $this->User_model->getuserdetails($userid);
        $res['users'] = $this->Main_model->getprovidehelpv21111();
		//print_r($res);
       $this->load->view('sidebar',$res );
		$this->load->view('userdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}

//load users  that  need  help
//get refer details  using  ID  
	public function getrefdetails(){

//print_r($this->session->all_userdata());
  $userfromid = $this->session->userdata('user_id');
         $res = $this->User_model->getuserdetails($userfromid);

        $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
		//echo  "Thank  God  am  here";
        $res['ref'] = $this->uri->segment(7);
        $res['wantedamount'] = $this->uri->segment(8);
		$userid =$this->uri->segment(6);
		//echo  $userid;
		$res['help'] = $this->User_model->getuserdetails($userid);
$res['users'] = $this->Main_model->getprovidehelpv1();
		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('userdetails',$res );
		//$this->load->view('_partials/sidemenu');

	}

//load users  that  need  help

	public function index(){

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$ress['help'] = $this->Main_model->getprovidehelp();


        $this->load->view('sidebar',$ress );
		$this->load->view('account',$ress );
		//$this->load->view('_partials/sidemenu');

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
		$data = array('password' => $this->input->post('password'));
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
