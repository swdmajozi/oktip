  <?php 

  class Allocations_model extends MY_Model {

     function __construct() {
  // Call the Model constructor
          parent :: __construct();
         // $this->load->model('admin/emails_model');
      }





//change  status  on  keptfunds  to  withdrawn  

      function  changewithdrawal($id){

     $sql =("UPDATE `recommit` 
      SET  `restatus` = '1'
      WHERE `reid` = '$id'
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
//get all  keptfunds
  function getallkeptfunds(){

           $sql =("
SELECT * FROM `recommit` 
JOIN `users`
 ON `users`.id = `recommit`.userid
  

 
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

//view  kept  fund  by  id
    function getkeptfund($id){

             $sql =("SELECT * FROM `recommit` WHERE `reid` = '$id' ");

            
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
  function addkeptfunds($userid,$amount,$from_address,$ref_no,$date,$period){
   $query = " INSERT INTO `transactions`(`userid`, `email`, `amount`,`status`, `ref_no`,`datetime`,`period`) 
   VALUES ('$userid', '$from_address', '$amount', 'Waiting','$ref_no','$date','$period') ";
     if($this->db->query($query)){
    //echo $this->db->last_query();
      return 1;
     } else {
      return 0;

      
     }
  }
 



  }