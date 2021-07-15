<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// only login users can access Account controller
		$this->verify_login();
		$this->load->model('Main_model');
		$this->load->model('User_model');
		$this->load->database();
$this->load->helper('url');
/* ------------------ */ 
 
$this->load->library('grocery_CRUD');

	}

	public function viewusers(){

//print_r($this->session->all_userdata());
         $user = $this->session->userdata('user_id');
         $result['help']= $this->User_model->viewusers($user);

         $this->load->view('sidebar',$result );
		$this->load->view('viewusers',$result );
	//echo $res;

	}
	


public function viewuserscrud()
{
$crud = new grocery_CRUD();

//$crud->set_theme('datatables');
//$crud->set_theme('datatables');
$crud->set_subject('Users');
$crud->set_table('users');
$crud->columns('username', 'email', 'first_name', 'last_name', 'active');
//$this->unset_crud_fields('ip_address', 'last_login');
$output = $crud->render();
 
$this->_view_output($output);        
}



public function viewph()
{
$crud = new grocery_CRUD();

//$crud->set_theme('datatables');
$crud->set_table('transactions');
$output = $crud->render();
 
$this->_view_output($output);        
}
 
function _view_output($output = null)
 
{
         $userfromid = $this->session->userdata('user_id');
         $res = $this->User_model->getuserdetails($userfromid);
         $res['first_name'] = $res[0]['first_name'];
         $res['last_name']  = $res[0]['last_name'];  

	     $this->load->view('sidebar',$res );
         $this->load->view('example.php',$output);    
}



	public function deactivateuser(){
     // $donaterid = $this->session->userdata('user_id');
         $userid = $this->uri->segment(4);
      $amount = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
	//echo  $userid;
		$res = $this->User_model->deactivateuser($userid);
		redirect('account/viewusers','refresh');
	

	}
	public function activateuser(){
     // $donaterid = $this->session->userdata('user_id');
         $userid = $this->uri->segment(4);
      $amount = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
	//echo  $userid;
		$res = $this->User_model->activateuser($userid);
		redirect('account/viewusers','refresh');
	

	}

public  function testimonials(){

         $userfromid = $this->session->userdata('user_id');
         $res = $this->User_model->getuserdetails($userfromid);
         $res['first_name'] = $res[0]['first_name'];
         $res['last_name']  = $res[0]['last_name'];     
        // $res['test'] = $this->Main_model->gettestimonials();

		//print_r($res);
       $this->load->view('sidebar',$res );
       $this->load->view('testimonials',$res);

}
		public function keptfunds(){


         $user = $this->session->userdata('user_id');
         $result['help']= $this->Main_model->getkeptfunds($user);

         $this->load->view('sidebar',$result );
		$this->load->view('keptfunds',$result );
	
	}



  public function send()
    {
        // load library
        $this->load->library('nexmo');
        // set response format: xml or json, default json
        $this->nexmo->set_format('json');

        $from = '00000000';
        $to = '27625781575';
        $message = array(
            'text' => 'Hello, you have been  allocated  on Perfect Scarlet(http://perfectscarlet.co.za) Please Login to check.',
        );
	$response = $this->nexmo->send_message($from, $to, $message);
        echo "<h1>Text Message</h1>";
        $this->nexmo->d_print($response);
        echo "<h3>Response Code: ".$this->nexmo->get_http_status()."</h3>";

	}

//delete  user 

	public function deleteuser(){
      $donaterid = $this->session->userdata('user_id');
         $ref = $this->uri->segment(4);
      $amount = $this->uri->segment(8);
		//$userid =$this->uri->segment(6);
		//echo  $userid;
		$res = $this->User_model->deleteuser($ref);
		redirect('account/viewusers','refresh');
	

	}

	
	public function viewusersz(){

//print_r($this->session->all_userdata());
         $user = $this->session->userdata('user_id');
         $result['help']= $this->User_model->viewusers($user);

         $this->load->view('sidebar',$result );
		$this->load->view('viewusers',$result );
	//echo $res;

	}
	
	public function completedph(){

//print_r($this->session->all_userdata());
         $user = $this->session->userdata('user_id');
         $result['help']= $this->User_model->completedph($user);

         $this->load->view('sidebar',$result );
		$this->load->view('completedph',$result );
	//echo $res;

	}

	//checkifexist

	public function checkifexist(){

//print_r($this->session->all_userdata());
         $user = $this->session->userdata('user_id');
         $res= $this->Main_model->checkifexist($user);
//print_r($res['help']);
//redirect('account/getuserdetails');
    //   $res['first_name'] = $res['help'][0]['first_name'];
      $re  = $res[0]['count'];
	echo $re;

	//print_r($res);
      //       $this->load->view('sidebar',$res );
	//$this->load->view('editprofile',$res );
		//$this->load->view('_partials/sidemenu');

	}

//check  if  it  has  expired
	public  function checkifexpired(){

$from=date_create(date('Y-m-d'));
$to=date_create($key['datetime']);
$diff=date_diff($to,$from);

		
	}

//get user  details  using  ID  
	public function changepassword(){

//print_r($this->session->all_userdata());
        $userfromid = $this->session->userdata('user_id');
        $res = $this->User_model->getuserdetails($userfromid);

        $ress['first_name'] = $res[0]['first_name'];
        $ress['last_name']  = $res[0]['last_name'];
	    $ress['help'] = $this->User_model->getuserdetails($userfromid);

		//print_r($res);
        $this->load->view('sidebar',$ress );
		$this->load->view('changepassword',$ress );
		//$this->load->view('_partials/sidemenu');

	}
public function updatepassword(){


	      $user = $this->session->userdata('user_id');
        // $res['help'] = $this->User_model->getuserdetails($user);
$password = $this->hash_password($this->input->post('password'));
//$salt       = $this->store_salt ? $this->salt() : FALSE;
		//$password   = $this->hash_password($password, $salt);
echo $password;

$results = $this->User_model->updatepassword($user,$password);

echo $results;
//redirect('account/getuserdetails','refresh');


}

public function updatebankingdetailss(){


	      $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->getuserdetails($user);

        $banking_data = array(
        	    'first_name'	=> $this->input->post('first_name'),
				'last_name'		=> $this->input->post('last_name'),
                    'phone'		=> $this->input->post('phone'),
				'bank_namez'	=> $this->input->post('bank_namez'),
				'account_numberz'=> $this->input->post('account_numberz'),
				'account_typez'	=> $this->input->post('account_typez'),
				'codez'		=> $this->input->post('codez'),
				'referer'	=> $this->input->post('referer'),
				'bitcoin'	=> $this->input->post('bitcoin'),
				
			);
$this->User_model->updateBankingDetails($user,$banking_data);
//echo $this->db->last_query();

redirect('account/getuserdetails','refresh');
}
	public function getuserdetails(){

//print_r($this->session->all_userdata());
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->getuserdetails($user);

//redirect('account/getuserdetails');
       $res['first_name'] = $res['help'][0]['first_name'];
        $res['last_name']  = $res['help'][0]['last_name'];
	

		//print_r($res);
             $this->load->view('sidebar',$res );
		$this->load->view('editprofile',$res );
		//$this->load->view('_partials/sidemenu');

	}

public  function news(){

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		//$this->load->model('Main_model');
		//$res['help'] = $this->Main_model->getprovidehelp();
$res['news'] = $this->User_model->selectnews();

		//print_r($res);
$this->load->view('sidebar',$res );
$this->load->view('news',$res);

}
		public function index()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;
$email = $this->session->userdata('email');
          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
        $res['username']  = $res[0]['username'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		      $kept= $this->Main_model->getamountonthesystem($userfromid);

      $res['kept']  = $kept[0]['amount'];

      echo  $res['kept'] ;


		$this->load->model('Main_model');
		//$resz['help'] = $this->Main_model->getprovidehelp();
      $resz['remain'] = $this->Main_model->remain($userfromid);
 $resz['out'] = $this->Main_model->outstanding($userfromid);

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('account',$resz );
		//$this->load->view('_partials/sidemenu');

	}
		public function admin()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$resz['help'] = $this->Main_model->getprovidehelpv11();
		$resz['block'] = $this->User_model->blockrelocate($userfromid);
		$resz['withdraw'] = $this->Main_model->adminwithdrawals($userfromid);

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('admin',$resz );
		//$this->load->view('_partials/sidemenu');

	}
public function refadmin()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$resz['help'] = $this->Main_model->getprovidehelp();

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('refadmin',$resz );
		//$this->load->view('_partials/sidemenu');

	}


		public function growth()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$resz['help'] = $this->Main_model->getgrowth($userfromid);

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('growth',$resz );
		//$this->load->view('_partials/sidemenu');

	}



	public function getreferers()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');
$session_data = $this->session->all_userdata();

//echo '<pre>';
//print_r($session_data);
     $userfromid = $this->session->userdata('user_id');
      $email = $this->session->userdata('username');
         // echo $userfromid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
                $username = $res[0]['username'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$resz['help'] = $this->Main_model->getreferers($username);
$resz['all'] = $this->Main_model->getreferersall($username);

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('referers',$resz );
		//$this->load->view('_partials/sidemenu');

	}
//alocate  admins  only  
public function allocate()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$resz['help'] = $this->Main_model->getprovidehelp();

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('allocate',$resz );
		//$this->load->view('_partials/sidemenu');

	}
//allocate  all  members
		public function allocatev1()	{
		//$this->mViewData['user'] = $this->mUser;
		//$this->render('account');

     $userfromid = $this->session->userdata('user_id');
        //  echo $donaterid;

          $res = $this->User_model->getuserdetails($userfromid);

        //  print_r($res);

         // $res['user_name']= $res[0]['username'];
         $res['first_name'] = $res[0]['first_name'];
        $res['last_name']  = $res[0]['last_name'];
//print_r($this->session->all_userdata());
		//echo  "Thank  God  am  here";

		$this->load->model('Main_model');
		$resz['help'] = $this->Main_model->getprovidehelpv1();

		//print_r($res);
$this->load->view('sidebar',$res );
		$this->load->view('allocate',$resz );
		//$this->load->view('_partials/sidemenu');

	}
}