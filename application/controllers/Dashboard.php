<?php	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller {
		public function __construct()
        {
            parent::__construct();



          
        //    $this->load->model('Main_model');
		  $this->load->model('User_model');
            if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
                        

        }




        public function  savecoins(){

        $senderid = $this->session->userdata('user_id'); 
        $ref = rand(100,99999);       
        $date = date('Y-m-d H:i:s');       
        $amount = $this->input->post('amount');   
        $username = $this->input->post('username');  

        $res['help']=$this->User_model->GetUserDetailsByUsername($username); 
        $receiverid = $res['help'][0]['id'];
//echo $receiverid; 
      //  print_r($res['help']);  
if($receiverid){
         $data = array(
'receiver'=>$receiverid,
'amount' => $amount,
'dueamount'=>$amount,
'ref'=>$ref,
'status'=>'Pending',
);
$lastid = $this->User_model->SaveCoin($data);

       // $lastid= $this->User_model->SaveDonation($data);
             echo $lastid;


}

      

        }
                 public function addcoins(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/addcoins';
      $this->load->view('admin/layout', $res);
        }



       public function cancelcoins(){
         $userid= $this->session->userdata('user_id');
         $ref = $this->uri->segment(3);
         $dueamount = $this->uri->segment(4);
     
      
     
        $res = $this->User_model->UpdateSellers($ref,$dueamount); //send  confirmation  donation  table 
      

     // $res = $this->User_model->CancelCoins($userid,$ref,$dueamount); //send  confirmation  transaction table 
      redirect('dashboard/adminoutstandingorders','refresh');
    

    }



           public function sellbucks(){
         $userid= $this->session->userdata('user_id');
         $ref = $this->uri->segment(3);
         $dueamount = $this->uri->segment(4);
     
      
     
        $res = $this->User_model->UpdateWithdrawals($ref); //send  confirmation  donation  table 
      

       $res = $this->User_model->SaveToSellersWithdrawal($userid,$ref,$dueamount); //send  confirmation  transaction table 
      redirect('dashboard/bucksalert','refresh');
    

    }


//confirm on received 
            public function confirmpaymentreceived(){
         $userid= $this->session->userdata('user_id');
         $ref = $this->uri->segment(7);
       //  echo "Ref ".$ref; 
         $donorid = $this->uri->segment(6);
      //   echo "donorid ".$donorid; 
         $amountdonated = $this->uri->segment(8);
       //  echo "amountdonated ".$amountdonated; 
         $senderid = $this->uri->segment(4);
         $period = $this->uri->segment(9);
      //    echo "period ".$period;
         $new = $amountdonated;

         if($period == 4){

           $dueamount = $amountdonated + $amountdonated * 1;
         }elseif ($period == 5) {

           $dueamount = $amountdonated + $amountdonated *1.2 ; 

         }else{

          $dueamount = $amountdonated + $amountdonated * 1.6; 
         }
       
         $duedate = date("Y-m-d H:i:s", strtotime('+'.$period.' days'));
         echo "duedate ".$duedate; 
     
        $res = $this->User_model->ConfirmOnReceived($ref, $duedate,$dueamount); //send  confirmation  donation  table 
      // $res = $this->User_model->SaveToSellers($senderid,$ref,$duedate,$dueamount,$amountdonated); //send  confirmation  transaction table 
      redirect('dashboard/duetoyou','refresh');
    

    }

//admin

               public function adminpaymenthistory(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->AdminPaymentHistory($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/adminpaymenthistory';
      $this->load->view('admin/layout', $res);
        }



//referaals



//bluck alerts 


public function bucksalert(){
   $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->BucksAlert($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/bucksalert';
      $this->load->view('admin/layout', $res);
  }

  public function bucksalertadmin(){
   $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->BucksAlertAdmin($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/bucksalert';
      $this->load->view('admin/layout', $res);
  }
                     public function getreferrals(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
          $res['details'] = $this->User_model->GetLoggedUserDetails($user);

        
            $res['username']  = $res['details'][0]['username'];  
    
        $res['all'] = $this->User_model->GetReferralsAll($user);      
     //  print_r( $res['all']);
          $res['help'] = $this->User_model->GetReferrals($user);      
      ///  print_r( $res['help']);
        
     $res['admin']= $admin;
 $res['view'] = 'admin/dashboard/referers';
    $this->load->view('admin/layout', $res);
        }
//paymenthistory

               public function paymenthistory(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->PaymentHistory($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/paymenthistory';
      $this->load->view('admin/layout', $res);
        }

                  public function adminoutstandingorders(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->AdminOutstandingOrders($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/adminoutstandingorders';
      $this->load->view('admin/layout', $res);
        }
   
   


//duetoyou

          public function duetoyou(){
      $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->DueToYou($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/duetoyou';
      $this->load->view('admin/layout', $res);
        }



          public function adminconfirm(){
      $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->AdminConfirm($user);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
      $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/adminconfirm';
      $this->load->view('admin/layout', $res);
        }





        //payments paid  
  public function paymentsoutstanding(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
       //  $res['help'] = $this->User_model->GetOutstandingPayments($user);
       $res['help'] = $this->User_model->GetOutstandingPayments($user);

      // print_r( $res['help']);
         $res['first_name'] = $res['help'][0]['first_name'];
         $res['last_name']  = $res['help'][0]['last_name'];  
    
        
     $res['admin']= $admin;
      $res['view'] = 'admin/dashboard/paymentsoutstanding';
      $this->load->view('admin/layout', $res);
        }


        //submit  donation 

public function savedonation(){

        $senderid = $this->session->userdata('user_id'); 
        $ref = rand(100,99999);       
        $date = date('Y-m-d H:i:s');       
        $amount = $this->input->post('amount');   
        $period = $this->input->post('period');   
        $receiver = $this->input->post('seller'); 



         $data = array(
'senderid' => $senderid,
'receiver'=>$receiver,
'amount' => $amount,
'created_date'=>$date,
'ref'=>$ref,
'period'=>$period,
'status'=>'Pending',
);
$this->User_model->UpdateStatusSellers($receiver, $amount);

        $lastid= $this->User_model->SaveDonation($data);
               echo $lastid;

    

    }

    public function checkifexist(){

//print_r($this->session->all_userdata());
         $user = $this->session->userdata('user_id');
         $res= $this->User_model->checkifexist($user);
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


        public function updatebankingdetailss(){


          $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->getuserdetails($user);

        $banking_data = array(
                'first_name'    => $this->input->post('first_name'),
                'last_name'     => $this->input->post('last_name'),
                    'phone'     => $this->input->post('phone'),
                'bankname'    => $this->input->post('bankname'),
                'bankaccount'=> $this->input->post('bankaccount'),
                'accounttype' => $this->input->post('accounttype'),
                'bankcode'     => $this->input->post('bankcode'),
                'referer'   => $this->input->post('referer'),
         'username'   => $this->input->post('username'),
                
                
            );
$this->User_model->updateBankingDetails($user,$banking_data);
//echo $this->db->last_query();

redirect('dashboard/editprofile','refresh');
}
        



//


        public function editprofile(){
        $admin = $this->ion_auth->user()->row();         
         $user = $this->session->userdata('user_id');
         $res['help'] = $this->User_model->getuserdetails($user);
       $res['first_name'] = $res['help'][0]['first_name'];
        $res['last_name']  = $res['help'][0]['last_name'];	
    
		
            $res['admin']= $admin;
            $res['view'] = 'admin/dashboard/editprofile';
            $this->load->view('admin/layout', $res);
		}



//donate

            public function donate(){
            $admin = $this->ion_auth->user()->row();
              $user = $this->session->userdata('user_id');
           $res['details'] = $this->User_model->GetLoggedUserDetails($user);
              $res['sum'] = $this->User_model->CountTotalPaid($user);
$res['sell'] = $this->User_model->CountTotalSell($user); 

       //   print_r( $res['details']);
            $data['username']  = $res['details'][0]['username'];  
              $data['sum']  = $res['sum'][0]['total'];  
                  $data['sell']  = $res['sell'][0]['totalseller']; 
            $data['help'] = $this->User_model->GetSellerList();

//print_r( $data['sum']);
         $data['admin']= $admin;
             $data['view'] = 'admin/dashboard/donate';
  $this->load->view('admin/layout', $data);
        }
		public function index(){

        $user = $this->session->userdata('user_id');
           $res['details'] = $this->User_model->GetLoggedUserDetails($user);

       //   print_r( $res['details']);
            $data['username']  = $res['details'][0]['username'];  
            $admin = $this->ion_auth->user()->row();
            $data['admin']= $admin;
            $data['view'] = 'admin/dashboard/donate';
            $this->load->view('admin/layout', $data);
		}

		public function index2(){
            $admin = $this->ion_auth->user()->row();
            $data['admin']= $admin;
			$data['view'] = 'admin/dashboard/index2';
			$this->load->view('admin/layout', $data);
		}
        function profile()
        {

            $admin = $this->ion_auth->user()->row();
            $data['admin']= $admin;
            $data['title'] = 'User Profile';
            $data['view'] = "profile";
            $this->load->view('admin/layout', $data);


        }

        function profile_pic(){

            $config['upload_path']          = './admin/uploads/images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 500;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['file_name']            = rand(100,10000).'profile_pic'.$this->ion_auth->user()->row()->id;
            $config['overwrite'] 			= TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('profile_pic') && $this->ion_auth->is_admin()){
                $data['error'] = array('error' => $this->upload->display_errors('<p class="text-red">', '</p>'));
                $admin = $this->ion_auth->user()->row();
                $data['admin']= $admin;
                $data['view'] = "profile";
                $this->load->view('admin/layout', $data);

            }else{
                //successfully uploaded image
                $data = array('upload_data' => $this->upload->data());

                $upload_data = $data['upload_data'];
                $file_name = $upload_data['file_name'];

                $admin = $this->ion_auth->user()->row();
                //update database
                $update_data['profile_pic'] = $file_name;
                $this->_updatePic($admin->id, $update_data);

                redirect('profile', 'refresh');

            }
        }

        private function _updatePic($id, $data)
        {
            $this->load->model("User_model");
            $this->User_model->_update($id, $data);
        }


    }

?>	