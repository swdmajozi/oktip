  <?php 

  class User_model extends CI_Model {

     function __construct() {
  // Call the Model constructor
          parent :: __construct();
         // $this->load->model('admin/emails_model');
      }





  function UpdateSellers($ref, $dueamount)
    {

   $sqll =("UPDATE `sellers` 
      SET  `dueamount` = `dueamount`+ '$dueamount'
      WHERE `ref` = '$ref'
    ");

   $this->db->query($sqll);

  }



  function CancelCoins($ref)
    {

   $sqll =("DELETE * FROM `buyers`      
      WHERE `ref` = '$ref'
    ");

   $this->db->query($sqll);

  }

///save  withdrawal  seller 


       function  SaveToSellersWithdrawal($receiver,$ref,$dueamount){

     $sql =("INSERT INTO `sellers`(`receiver`, `ref`,`dueamount`,`status`) 
   VALUES ('$receiver', '$ref', '$dueamount','Pending')
    
    ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }

         //update  status  sellers  to 
  function UpdateWithdrawals($ref)
    {

   $sqll =("UPDATE `buyers` 
      SET  `withdrawal` = '1'
      WHERE `ref` = '$ref'
    ");

   $this->db->query($sqll);

  }

//PaymentHistory
   function BucksAlert($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.receiver 
 WHERE  `buyers`.senderid  = $buyer_id AND `buyers`.status = 'Paid' 
  
     ");

    //   echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

  //PaymentHistory
   function BucksAlertAdmin($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.senderid 
WHERE `buyers`.status = 'Paid' 
  
     ");

    //    echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
 
 

    function CountTotalSell($seller)

 {
            $sql =("
              SELECT SUM(amount) as totalseller 
              FROM `sellers` 
              WHERE `sellers`.receiver = $seller AND `sellers`.status = 'Pending'
  
     ");

    //    echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
//PaymentHistory
   function CountTotalPaid($buyer_id)

 {
            $sql =("
SELECT SUM(amount) as total FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.receiver 
 WHERE  `buyers`.senderid  = $buyer_id AND `buyers`.status = 'Paid' 
  
     ");

     //   echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
 

//get  outstanding  payments   for  buyer



   function GetUserDetailsByUsername($username)

 {
            $sql =("
SELECT * FROM `users`
WHERE `username` = '$username'
  ");

      echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

   function GetLoggedUserDetails($userid)

 {
            $sql =("
SELECT * FROM `users`
WHERE `id` = '$userid'
  ");

      //   echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

   function checkifexist($userid){

           $sql =("
SELECT count(senderid) as count FROM `buyers` 
WHERE  `buyers`.status = 'Pending' AND `buyers`.senderid = '$userid'
 
  ");

          
    $results = $this->db->query($sql);
  //echo $this->db->last_query();

    if($results->num_rows() > 0)
    {
      return $results->result_array();
    }

    else
    {
      return 0;
    }

  }

   function GetReferralsAll($username)

 {
            $sql =("
              SELECT *
              FROM `buyers` 
              JOIN `users` ON `users`.id  = `buyers`.senderid
              WHERE `buyers`.senderid = $username AND `buyers`.status = 'Paid'

     ");

    //     echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

   function GetReferrals($username)

 {
            $sql =("
              SELECT *
              FROM `buyers` 
              JOIN `users` ON `users`.id  = `buyers`.senderid
              WHERE `buyers`.senderid = $username AND `buyers`.status = 'Paid'

     ");

    //     echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }



         //update  status  sellers  to 
  function UpdateStatusSellers($receiver, $amount)
    {



   $sqll =("UPDATE `sellers` 
      SET  `dueamount` = `dueamount`-'$amount'
      WHERE `receiver` = '$receiver'
    ");

            // echo $this->db->last_query();
    $this->db->query($sqll);



     /* $sql =("UPDATE `sellers` 
      SET  `status` = 'Reserved'
    WHERE `receiver` = '$receiver'
    ");

            // echo $this->db->last_query();
      $this->db->query($sql);*/


  }



         //delete  donation admin  view 
  function UpdateUsers($id)
    {


      $sql =("UPDATE `users` 
      SET  `active` = '1'
      WHERE `id` = '$id'
    ");

            // echo $this->db->last_query();
      $this->db->query($sql);


  }
//confirm on  sellers table

  function  SaveToSellers($receiver,$ref,$duedate, $dueamount, $amountdonated){

     $sql =("INSERT INTO `sellers`(`receiver`, `ref`, `duedate`,`dueamount`,`status`,`amount`) 
   VALUES ('$receiver', '$ref', '$duedate', '$dueamount','Waiting','$amountdonated')
    
    ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }


//confirm on buyers table
  function  ConfirmOnReceived($ref,$duedate, $amountdue){

     $sql =("UPDATE `buyers` 
      SET  `status` = 'Paid',  `due_date` = '$duedate',  `amountdue` = '$amountdue'
      WHERE `ref` = '$ref'
    
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }


//get sellers list 

function SaveDonation($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('buyers', $data);

$insert_id = $this->db->insert_id();

   return  $insert_id;
}
function SaveCoin($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('sellers', $data);

$insert_id = $this->db->insert_id();

   return  $insert_id;
}





//AdminPaymentHistory
  function AdminOutstandingOrders($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.receiver 
 WHERE `status` = 'Pending'

  
     ");

      //   echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

//AdminPaymentHistory
  function AdminPaymentHistory($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.receiver 

  
     ");

      //   echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

//PaymentHistory
   function PaymentHistory($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.receiver 
 WHERE  `buyers`.senderid  = $buyer_id
  
     ");

       //  echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
 


//due  to  you  


   function DueToYou($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.senderid 
 WHERE `buyers`.status = 'Pending' AND  `buyers`.receiver = $buyer_id
  
     ");

      //   echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }



   function AdminConfirm($buyer_id)

 {
            $sql =("
SELECT * FROM `buyers`
 JOIN `users` ON `users`.id = `buyers`.senderid 
 WHERE `buyers`.status = 'Pending' 
  
     ");

      echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

//get  outstanding  payments   for  buyer


   function GetOutstandingPayments($buyer_id)

 {
            $sql =("
            SELECT * FROM `buyers`
            JOIN `users` ON `users`.id = `buyers`.receiver 
            WHERE `buyers`.status = 'Pending'  AND `buyers`.senderid  = $buyer_id
  
     ");

    //     echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
       function GetSellerList()

 {
            $sql =("

                SELECT * 
  FROM  `sellers` 
  JOIN  `users` ON  `users`.id =  `sellers`.receiver
  WHERE `status` = 'Pending' AND `dueamount` >= 150
  
     ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
//admin  confirmation  for  users  
 function getfundstoconfirmadmin($userfromid)

 {
            $sql =("
    SELECT * FROM `donations` WHERE  `status` = 'Reserved' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }


     function deleteallocation($ref){
      


     $sql =("UPDATE `transactions` 
      SET  `status` = 'Waiting'
       WHERE `ref_no` = '$ref'
    ");

     $this->db->query($sql);
echo $this->db->last_query();

       $query = (" DELETE from  `donations`
      
    where  `ref_no`='$ref'
    ");

     if($this->db->query($query)){

      echo $this->db->last_query();
      return 1;
     } else {
      return 0;
     }

   }

//check  if  reference  number  exist 
function checkrefnumber($ref){

            $sql =("
    SELECT * FROM `transactions` WHERE  `ref_no` = '$ref'  ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return 1;
      }

      else
      {
        return false;
      }



  }

         //change withdrawal status 
      function  deactivateuser($userid){

     $sql =("UPDATE `users` 
      SET  `active` = NULL
       WHERE `id` = '$userid'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }

   //change withdrawal status 
      function  activateuser($userid){

     $sql =("UPDATE `users` 
      SET  `active` = '1'
      WHERE `id` = '$userid'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }


//delete  user


      function deleteuser($userid){
       $query = (" DELETE from  `users`
      
    where  `id`='$userid'
    ");

     if($this->db->query($query)){
      return 1;
     } else {
      return 0;
     }

   }

  //get  users and  levles  
    function viewusers($userfromid){

             $sql =("SELECT * FROM `users` ");
            
      $results = $this->db->query($sql);
  // echo $this->db->last_query(); 
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }

    }
      //submit PH level 2
  function submitrequest3($userid ,$amount ,$from_address,$ref,$date,$period,$level){
   $query = " INSERT INTO `transactions`(`userid`, `email`, `amount`,`status`, `ref_no`,`datetime`,`period`,`level`) 
   VALUES ('$userid', '$from_address', '$amount', 'Waiting','$ref','$date','$period','$level') ";
     if($this->db->query($query)){
    //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }
  //submit PH level 2
  function submitrequest2($userid ,$amount ,$from_address,$ref,$date,$period,$level){
   $query = " INSERT INTO `transactions`(`userid`, `email`, `amount`,`status`, `ref_no`,`datetime`,`period`,`level`) 
   VALUES ('$userid', '$from_address', '$amount', 'Waiting','$ref','$date','$period','$level') ";
     if($this->db->query($query)){
//echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }



  //submit  referers 
   function submitrecommit($userid ,$amount2,$ref){
   $query = " INSERT INTO `recommit`(`userid`, `amount`, `ref_no`) 
   VALUES ('$userid' ,'$amount2' ,'$ref') ";
     if($this->db->query($query)){
    //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }

  //get  users and  levles  
    function checklevel($userfromid){

             $sql =("SELECT * FROM `transactions` WHERE `userid` = '$userfromid'
              AND `status` = 'Completed'
             ORDER BY `id` DESC LIMIT 1  ");
            
      $results = $this->db->query($sql);
  // echo $this->db->last_query(); 
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }

    }

  //change withdrawal status 
      function  changewithdrawal($ref){

     $sql =("UPDATE `transactions` 
      SET  `statuslist` = '1'
      WHERE `ref_no` = '$ref'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }

    //get  users confirmed
    function completedph(){

             $sql =("
  SELECT * 
  FROM  `transactions` 
  JOIN  `users` ON  `users`.id =  `transactions`.userid
  WHERE `status` = 'Completed'
   
    ");
            
      $results = $this->db->query($sql);
    
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }

    }

      //update  status  to withdrawal 
      function  updatewithdrawal($ref){

     $sql =("UPDATE `transactions` SET `statuswithdrawal` = '1'
     WHERE `ref_no` = '$ref'

     
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }
  //wget  order  update
      //change  astatus  put  users  on  the  list
      function  getorderupdate($userid,$from_address,$ref,$date){

     $sql =("UPDATE `transactions` 
      SET  `status` = 'Reserved',`email` = '$from_address',`userid` = '$userid' ,`datetime` = '$date' 
      WHERE `ref_no` = '$ref'
     
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);


       $sql1 =("UPDATE `donations` 
      SET  `status` = 'Reserved',`userfromid` = '$userid' ,`date` = '$date' 
      WHERE `ref_no` = '$ref'
     
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql1);
echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }

    //get  users  to  withdraw  for  
    function gethomeless(){

             $sql =("
    SELECT * 
  FROM  `transactions` 
  JOIN  `users` ON  `users`.id =  `transactions`.userid
  WHERE `status` = 'Homeless'
   
    ");

            
      $results = $this->db->query($sql);
      //echo $this->db->last_query();

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }

    }
  //Deleted  PH

      function deletePh($ref_no){
       $query = (" DELETE from  `transactions`
      
    where  `ref_no`='$ref_no'
    ");

     if($this->db->query($query)){
      return 1;
     } else {
      return 0;
     }

   }

  //Get all PH  completed  and not  completed 
   function getph($userfromid){

            $sql =("
  SELECT * FROM `transactions` 
  JOIN  `users` ON  `users`.id =  `transactions`.userid
   WHERE `userid` = '$userfromid'AND `status`!='Waitings' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }


   function selectnews(){

            $sql =("
  SELECT * FROM `news` ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }
  //addd  news  
       function submitnews($userid,$news,$date){
   $query = " INSERT INTO `news`(`user`, `comments`, `date`) 
   VALUES ('$userid', '$news', '$date') ";
     if($this->db->query($query)){
    //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }

       //select  alllocation m user  to  update  amount
   function selectuser($user_to, $amount_donated){

            $sql =("
  SELECT `ref_no` FROM `transactions1` 
  WHERE `userid` = '$user_to' 
  ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

         //delete  donation admin  view 
  function deletedonation($ref_no,$fromid)
    {


      $sql =("UPDATE `users` 
      SET  `active` = NULL
      WHERE `id` = '$fromid'
    ");

            // echo $this->db->last_query();
      $this->db->query($sql);


   $query = (" DELETE from  `donations`
    where  `ref_no`='$ref_no';
    ");

     if($this->db->query($query)){
      return 1;
     } else {
      return 0;
     }
  }
  //submit  withdrawal  
       function submitwithdrawal($userid ,$amount ,$from_address,$ref,$date,$period){
   $query = " INSERT INTO `transactions1`(`userid`, `email`, `amount`,`status`, `ref_no`,`datetime`,`period`) 
   VALUES ('$userid', '$from_address', '$amount', 'Waiting','$ref','$date','$period') ";
     if($this->db->query($query)){
   // echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }
      //delete  donation
  function deleteuserfrom($id)
    {
   $query = "
    delete from  [ims2].[dbo].[ls_disposal_reasons]
    where [reason_id]='$id';
    ";

     if($this->db->query($query)){
      return 1;
     } else {
      return 0;
     }
  }

  //select  from  donations to  block 
      function blockrelocate($amount){

            $sql =("
  SELECT * FROM `donations` 
  JOIN  `users` ON  `users`.id =  `donations`.userfromid
  Where `status` != 'Completed' 
   ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

      //select  random  allocation  auto any  user  
   function selectallocation($amountdonated){

            $sql =("
  SELECT * FROM `transactions1` 
  WHERE `amount` <='$amountdonated' AND `amount` != '0' AND `amount` > '0'
  Order By  Rand()
  Limit 1 ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

  //select  random  allocation  auto  using  amount
   function selectallocationv1($amount){

            $sql =("
  SELECT * FROM `transactions` WHERE `amount`= '$amount' ");
            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }


      //change  astatus  put  users  on  the  list
      function  addbonus($user,$email,$amount){
     $sql =("UPDATE `users` 
      SET  `account_numberz` = `account_numberz`+'$amount'
      WHERE `ref_no` = '$ref'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }

  //submit  referers 
   function submitref($email ,$bonuses ,$userfrom,$ref,$date){
   $query = " INSERT INTO `referers`(`email`, `bonuses`, `userfrom`, `ref`,`date`) VALUES ('$email' ,'$bonuses' ,'$userfrom','$ref','$date') ";
     if($this->db->query($query)){
    echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }
  ///check  if  the  user has  referer  
    function checkref($userfromid){

            $sql =("
    SELECT * FROM `users` WHERE  `id` = 'userfromid' AND `referer` != 'NULL' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

  //change  astatus  put  users  on  the  list
      function  changestatuslist($ref){

     $sql =("UPDATE `transactions` 
      SET  `status` = 'Waiting'
      WHERE `ref_no` = '$ref'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }


  //get  people  to  be  on  the  list  make  list
      function listpeople(){

             $sql =("
  SELECT * 
  FROM  `transactions` 
  JOIN  `users` ON  `users`.id =  `transactions`.userid
  WHERE  `transactions`.status =  'Waitings'

   
    ");

            
      $results = $this->db->query($sql);
     // echo $this->db->last_query();

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }

    }



  //get  people  already  reserved
  function getpeoplealeadyreserved($ref){

            $sql =("
    SELECT * FROM `transactions` WHERE  `ref_no` = '$ref' AND `status` = 'Reserved'  ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return 1;
      }

      else
      {
        return 0;
      }



  }

  function  cancel($ref,$donaterid,$amount){


   $sqll =("UPDATE `transactions` 
      SET  `status` = 'Waiting', `reserved_amount` = `reserved_amount`-'$amount'
      WHERE `ref_no` = '$ref'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sqll);
  //echo $this->db->last_query();
     $sql =("UPDATE `donations` 
      SET  `status` = 'Cancelled'
      WHERE `ref_no` = '$ref' AND `userfromid` = '$donaterid'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }

  //confirm  donation  reciever  donationtable 


  function  confirmdonationrecieved($ref,$userid,$date,$id){

     $sql =("UPDATE `donations` 
      SET  `status` = 'Completed',`scheduled_paymentdate` = '$date'
      WHERE `ref_no` = '$ref' AND `user_to`='$userid' AND `id`='$id'
    
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }
   //confirm  donation  recieved reciever
  //confirm  donation  donor  


  function  changestatustrans($ref,$date){

     $sql =("UPDATE `transactions` 
      SET  `status` = 'Completed',`scheduled_paymentdate` = '$date'
      WHERE `ref_no` = '$ref'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }
   
  //confirm  donation paid donor  


  function  confirmpaid($ref,$donaterid){

     $sql =("UPDATE `donations` 
      SET  `status` = 'Paid'
      WHERE `ref_no` = '$ref' AND `userfromid` = '$donaterid'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results)
      {
        return true;
      }

      else
      {
        return false;
      }


  }
   
  function getfundstoconfirm($userfromid){

            $sql =("
    SELECT * FROM `donations` WHERE  `user_to` = '$userfromid' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }





   
  function recievedfunds($userfromid){

            $sql =("
    SELECT * FROM `donations` WHERE  `user_to` = '$userfromid' AND  `status` ='Completed' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }



   function donatedfunds($userfromid){

            $sql =("
    SELECT * FROM `donations`
    JOIN  `users` ON  `users`.id =  `donations`.user_to

   WHERE  `donations`.`userfromid` = '$userfromid' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }


    function confirmedfunds($userfromid){

            $sql =("
    SELECT * FROM `donations` WHERE  `user_from` = '$userfromid' AND  `status` = 'Completed' ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }



  function  confirmdonation($ref){

     $sql =("UPDATE `transactions` 
      SET  `status` = 'Completed'
      WHERE `ref_no` = '$ref'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }


  }


    function myrequests($userfromid){

            $sql =("
    SELECT * FROM `transactions` WHERE  `userid` = '$userfromid'  ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }

  //submit  request  of  donor  on  completion
   function submitrequestv1($donorid,$newamount ,$from_address,$ref_no,$date, $scheduled_paymentdate){
   $query = " INSERT INTO `transactions`(`userid`, `email`, `amount`,`status`, `ref_no`,`datetime`,`scheduled_paymentdate`) 
   VALUES ('$donorid', '$from_address', '$newamount', 'Waitings','$ref_no','$date','$scheduled_paymentdate') ";
     if($this->db->query($query)){
    //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }
   function submitrequest($userid ,$amount ,$from_address,$ref,$date,$period,$level,$allocation_date){
   $query = " INSERT INTO `transactions`(`userid`, `email`, `amount`,`status`, `ref_no`,`datetime`,`period`,`level`,`allocation_date`,`statuslist`) 
   VALUES ('$userid', '$from_address', '$amount', 'Waiting','$ref','$date','$period','$level','$allocation_date','0') ";
     if($this->db->query($query)){
 //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }

   function submitdonation($user_to,$user_from,$user_name,$from_name,$from_address,$from_phone,$date,$amount,$userfromid,$ref,$status,$remaining,$period){

  $sqll =("UPDATE `transactions` 
      SET `status` = '$status'
      WHERE `ref_no` = '$ref'
    ");
  $this->db->query($sqll);


   $sql= "INSERT INTO `donations`(`user_to`, `user_from`, `user_name`, `from_name`, `from_address`, `from_phone`, `date`,`amount_donated`,`userfromid`,`ref_no`,`status`,`remaining`,`period`) 
   VALUES ('$user_to','$user_from','$user_name','$from_name','$from_address','$from_phone','$date','$amount','$userfromid','$ref','Reserved','$remaining','$period') ";
    if($this->db->query($sql)){
    //echo $this->db->last_query


          return 1;
     } else {
      return 0;

      
     }
  }


  function  UpdateStatus($ref,$amount,$status){


     $sql =("UPDATE `transactions1` 
      SET `amount` = `amount`-'$amount'
      WHERE `ref_no` = '$ref'
    ");
  //$this->db->query($sql);
           // echo $this->db->last_query();
    if($this->db->query($sql)){
   //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }


  }
   function  UpdateStatusAdd($ref,$amount,$status){


     $sql =("UPDATE `transactions` 
      SET `amount` = '$amount', `status`='$status'
      WHERE `ref_no` = '$ref'
    ");
  //$this->db->query($sql);
           // echo $this->db->last_query();
    if($this->db->query($sql)){
   //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }


  }
  function  UpdateTransactionStatus($ref){


     $sql =("UPDATE `transactions` 
      SET `status` = 'Homeless'
      WHERE `ref_no` = '$ref'
    ");
  //$this->db->query($sql);
           // echo $this->db->last_query();
    if($this->db->query($sql)){
 // echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }


  }


  function  updatepassword($user,$password){

    //$cdata = array('car_owned_by' => '1');
   // $this->db->where('id',$user);
   // $this->db->update('users',$banking_data);
    //echo $this->db->last_query();



     $sql =("UPDATE `users` 
      SET `password` = '$password'
      WHERE `id` = '$user'
    ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);
  //echo $this->db->last_query();
      if($results->num_rows() > 0)
      {
        return 1;
      }

      else
      {
        return 0;
      }

  }
  function  updateBankingDetails($user,$banking_data){

    //$cdata = array('car_owned_by' => '1');
    $this->db->where('id',$user);
    $this->db->update('users',$banking_data);
    //echo $this->db->last_query();

  }
  function getuserdetails($userid){

            $sql =("
    SELECT * FROM `users` WHERE  `id` = '$userid'  ");

            // echo $this->db->last_query();
      $results = $this->db->query($sql);

      if($results->num_rows() > 0)
      {
        return $results->result_array();
      }

      else
      {
        return false;
      }



  }



  }