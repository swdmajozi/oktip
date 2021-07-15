<?php
// (Array of Strings)
class Main_model extends MY_Model{



//get  users  to  withdraw  for  
  function gettestimonials(){

           $sql =("
SELECT * FROM `testimonials` 
JOIN `users`
 ON `users`.id = `testimonials`.userid
  

 
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

//get  users  to  withdraw  for  
  function getkeptfunds($userid){

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


//get  users money  on the system 
  function getamountonthesystem($userid){

           $sql =("
SELECT * FROM `recommit` 
WHERE `userid` = '$userid'
ORDER BY `reid` DESC LIMIT 1

 
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

 function checkifexist($userid){

           $sql =("
SELECT count(userid) as count, SUM(amount) as total FROM `transactions` JOIN `users` ON `users`.id = `transactions`.userid WHERE (`transactions`.status = 'Waiting' OR `transactions`.status = 'Reserved') AND `transactions`.userid = '$userid'
 
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

  //get  users  to  withdraw  for  
  function adminwithdrawals($userid){

           $sql =("
SELECT * FROM `transactions` JOIN `users` ON `users`.id = `transactions`.userid WHERE `transactions`.status = 'Completed' AND `statuslist` != '1'

 
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


//get admins  to  relocate 
function getprovidehelpv2(){

           $sql =("
SELECT * 
FROM  `users` 
WHERE  `users`.code1 =  '1'

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

function selectforgotten($email){

           $sql =("
SELECT * 
FROM  `users` 
WHERE `email` = '$email'
 
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
function outstanding($email){

           $sql =("
SELECT * 
FROM  `donations` 
JOIN  `users` ON  `users`.id =  `donations`.user_to
WHERE `donations`.userfromid=  '$email' AND `donations`.status = 'Reserved'
 
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
function remain($email){

           $sql =("
SELECT * 
FROM  `donations` 
JOIN  `users` ON  `users`.id =  `donations`.userfromid
WHERE `donations`.user_to=  '$email'AND `donations`.status = 'Reserved'
 
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
function getreferersall($email){

           $sql =("
SELECT * 
FROM  `users` 
WHERE   `users`.referer =  '$email'
 
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
function getreferers($email){

           $sql =("
SELECT * 
FROM  `transactions` 
JOIN  `users` ON  `users`.id =  `transactions`.userid
WHERE   `users`.referer =  '$email'
 
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
function getgrowth($userid){

           $sql =("
SELECT * 
FROM  `transactions` 
JOIN  `users` ON  `users`.id =  `transactions`.userid
WHERE  `transactions`.status =  'Completed'
AND  `transactions`.userid  = '$userid'

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
  
  function getprovidehelpv2111(){

           $sql =("
SELECT * 
FROM  `users` 
WHERE `code1` = '1'


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
function getprovidehelpv21111(){

           $sql =("
SELECT * 
FROM  `transactions1` 
JOIN  `users` ON  `users`.id =  `transactions1`.userid

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


function getprovidehelpv11(){

           $sql =("
SELECT * 
FROM  `transactions` 
JOIN  `users` ON  `users`.id =  `transactions`.userid

 
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


 
  function editbreedsusingtype($type){

           $sql =("
 SELECT [breed_id]
      ,[breed_name]
  FROM [ims2].[dbo].[ls_breed]
  WHERE type_id='$type'
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


  function viewcat(){

           $sql =("
                    SELECT dbo.ls_location.location_name,   dbo.ls_breed.breed_name, dbo.ls_type.type_name,

lm.breed_id,lm.location_id,

(select count(*) from ls_master where location_id=lm.location_id and breed_id=lm.breed_id and type_id=lm.type_id and sex='female') female,
(select count(*) from ls_master where location_id=lm.location_id and breed_id=lm.breed_id and type_id=lm.type_id and sex='male') male,
count(*) total

  FROM         dbo.ls_master  lm
    JOIN
                        dbo.ls_breed ON dbo.ls_breed.breed_id = lm.breed_id 
             JOIN
                        dbo.ls_type ON dbo.ls_breed.type_id = dbo.ls_type.type_id
             JOIN
                        dbo.ls_location ON dbo.ls_location.location_id = lm.location_id
  GROUP BY dbo.ls_breed.breed_name, dbo.ls_type.type_name,location_name
  ,lm.breed_id,lm.location_id,lm.type_id
  
  
  
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

function getLocationPrefix($id){

   $query = $this->db->query("SELECT [prefix] FROM ls_location WHERE location_id=$id");

           if($query->num_rows > 0){

            foreach ($query->result_array() as $row){

                $location_name[] = htmlentities(stripslashes($row['prefix']));

             

           }
           $row_set['prefix'] = $location_name;

                    return $row_set;

        }

        else {

            $row_set[] = htmlentities(stripslashes('noresults'));

       return $row_set;

    }

      }



   function deletetables()
  {
 $query = "
  delete from  [ims2].[dbo].[ls_disposal_reasons]
 
  ";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}
function changemotherstatus($mother){
$query = "
 UPDATE [ims2].[dbo].[ls_pregnancy]
   SET [status] = 'Successful'
             
 WHERE [tag] = '$mother'";

   if($this->db->query($query)){


    return 1;
   } else {
    return 0;
   }
}

function sickanimal($tagold,$updatedby){
   $query = "
 UPDATE [ims2].[dbo].[ls_master]
   SET [status] = 'Sick',
        [updatedby] = '$updatedby'
     
 WHERE [master_id] = '$tagold'";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}
function healanimal($tagold,$updatedby){
   $query = "
 UPDATE [ims2].[dbo].[ls_master]
   SET [status] = 'Alive',
        [updatedby] = '$updatedby'
     
 WHERE [master_id] = '$tagold'";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}



    function getactualoffsprings($tag,$dob){

           $sql =("
                      SELECT count(*)
                FROM   dbo.ls_master
                          WHERE [details_of_parents_mother]='$tag' AND [dob]='$dob'
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
  function getoffsprings($tag){

           $sql =("
                      SELECT *
                FROM   dbo.ls_master
                          WHERE [details_of_parents_mother]='$tag'
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

function getpregtests($tag){

           $sql =("
 select one.tag,one.offspringQTY expected,duedate,offspring actualoff,v.asset_vendor_name,dateoftest,fatherdetails,status,ai,multiplefathers,faileddate,failedreason from (

SELECT

      p.[tag],

      p.preg_id  ,p.status

         ,p.dateoftest   

      ,[offspringQTY]

         ,p.fatherdetails
          ,p.multiplefathers
          ,p.ai
,p.faileddate
,p.failedreason
      ,[duedate]

         ,p.asset_vendor_id vendor

         ,DATEADD(month, -t.[pregnancy_window], p.duedate) mindate, DATEADD(month, +t.[pregnancy_window], p.duedate)maxdate

  FROM [ims2].[dbo].[ls_pregnancy] p

  join ls_master m

                           on m.tag=p.tag
  join ls_type t

on m.type_id=t.type_id

  ) one join

  (

select p.preg_id,count(m.dob) offspring

from [ims2].[dbo].[ls_pregnancy] p


left join (

select m.tag,m.details_of_parents_mother,t.pregnancy_window,m.dob from ls_master m

 join ls_type t

on m.type_id=t.type_id) m

on m.details_of_parents_mother=p.tag

and m.dob between DATEADD(month, -m.[pregnancy_window], p.duedate) and  DATEADD(month, +m.[pregnancy_window], p.duedate)

  

       group by preg_id

) two

on one. preg_id=two.preg_id

join assets_vendors v on v.asset_vendor_id=one.vendor

where one.tag = '$tag' 
                         ");

          // echo $this->db->last_query();
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
  function get_customersv1($q){
    $query = $this->db->query("
SELECT dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name

FROM ls_master
JOIN dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
JOIN dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
JOIN dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
WHERE  tag  LIKE '%".$q."%' AND [status]!='Disposed'");

   //echo $this->db->last_query();
    if($query->num_rows > 0){
        foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['tag']));
                   }
        $this->output->set_content_type('application/json')->set_output(json_encode($row_set));
    } 
  }
   function checkTagfather($tagid,$details_of_parents_fatherid){

        $sql =("
 SELECT*
  FROM [ims2].[dbo].[ls_master]
  WHERE [type_id] = '$tagid' AND [status] != 'Disposed' AND [tag] = '$details_of_parents_fatherid'
  ");

          
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

 function checkTagMotherid($tagid,$details_of_parents_motherid){

        $sql =("
 SELECT*
  FROM [ims2].[dbo].[ls_master]
  WHERE [type_id] = '$tagid' AND [status] != 'Disposed' AND [tag] = '$details_of_parents_motherid'
  ");

          
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

  

  function checkTagExistsPreg($tagid){

        $sql =("
 SELECT*
  FROM [ims2].[dbo].[ls_pregnancy]
  WHERE [tag] = '$tagid' AND  [status] = 'Pregnant'
  ");

          
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
  function checkTagExists($tagid){

        $sql =("
 SELECT*
  FROM [ims2].[dbo].[ls_master]
  WHERE [tag] = '$tagid'
  ");

          
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

     function getfathers($q){
    $query = $this->db->query("
SELECT dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name

FROM ls_master
JOIN dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
JOIN dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
JOIN dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
WHERE  tag  LIKE '%".$q."%' AND [sex] ='Male' AND [status] !='Disposed'");

   // echo $this->db->last_query();
    if($query->num_rows > 0){
        foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['tag']));
                   }
        $this->output->set_content_type('application/json')->set_output(json_encode($row_set));
    } 
  }

function gettagdetails($tag){

           $sql =("
SELECT dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name

FROM ls_master
JOIN dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
JOIN dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
JOIN dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id
  WHERE [tag] = '$tag'
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

   function GetMillFromCustomer($q){
    $query = $this->db->query("
SELECT dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name

FROM ls_master
JOIN dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
JOIN dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
JOIN dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
WHERE  tag  LIKE '%".$q."%'");

   // echo $this->db->last_query();
    if($query->num_rows > 0){
        foreach ($query->result_array() as $row){

            $row_set[] = htmlentities(stripslashes($row['type_name']));
              $row_set[] = htmlentities(stripslashes($row['sex']));
              $row_set[] = htmlentities(stripslashes($row['breed_name']));
                $row_set[] = htmlentities(stripslashes($row['type_id']));
                   }
        $this->output->set_content_type('application/json')->set_output(json_encode($row_set));
    } 
  }
  function editbreedss($breedsid){

           $sql =("
 SELECT        dbo.ls_breed.*, dbo.ls_type.type_name
FROM            dbo.ls_type INNER JOIN
                         dbo.ls_breed ON dbo.ls_type.type_id = dbo.ls_breed.type_id
  WHERE [breed_id] = '$breedsid'
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

function saveeditnewanimaldisposed($tag){
   $query = "
 UPDATE [ims2].[dbo].[ls_master]
   SET [status] = 'Disposed'
     
 WHERE [tag] = '$tag'";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}
function saveeditnewanimalundisposed($tagold){
   $query = "
 UPDATE [ims2].[dbo].[ls_master]
   SET [status] = 'Alive'
     
 WHERE [tag] = '$tagold'";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}



   function saveeditdisposal($id,$tag,$disposal_id,$date,$price,$reason_id,$createdby){
   $query = "
 UPDATE [dbo].[ls_disposal_animals]
   SET[disposal_id] = '$disposal_id'
      ,[date] = '$date'
      ,[price] = '$price'
      ,[reason_id] = '$reason_id'
      ,[updatedby] = '$createdby'
      ,[tag]='$tag'
      ,[dateupdated] = getdate()
       WHERE [disposalanimalid]='$id'";


      

   if($this->db->query($query)){

   // echo $this->db->last_query();
    return 1;
   } else {
    return 0;
   }
 }

  function saveeditpreganimal($ai,$mfather,$id,$asset_vendor_id,$tag,$dateoftest,$offspringQTY,$duedate,$createdby,$datetimecreated,$fatherdetails,$status,$updatedby){
   $query = "
 UPDATE [dbo].[ls_pregnancy]
   SET[dateoftest] = '$dateoftest'
      ,[asset_vendor_id] = '$asset_vendor_id'
      ,[offspringQTY] = '$offspringQTY'
      ,[duedate] = '$duedate'
      ,[updatedby] = '$createdby'
      ,[dateupdated] = getdate()
      ,[fatherdetails] = '$fatherdetails'
      ,[status] = '$status'
      ,[tag] = '$tag'
      ,[ai] = '$ai'
      ,[multiplefathers] = '$mfather'
      
      WHERE [preg_id]='$id'";


      

   if($this->db->query($query)){
   // echo $this->db->last_query();
    return 1;
   } else {
    return 0;
   }
}
 function savefailedpregnancy($updatedby,$dateoftest,$tag,$reason){
   $query = "
 UPDATE [dbo].[ls_pregnancy]
   SET
      [updatedby] = '$updatedby'
      ,[dateupdated] = getdate()
      ,[faileddate] = '$dateoftest' 
      ,[status] = 'Failed' 
      ,[failedreason] = '$reason'         
      WHERE [tag]='$tag'";


      

   if($this->db->query($query)){
  //echo $this->db->last_query();
    return 1;
   } else {
    return 0;
   }
}



    function vieweditdisposal($tagid){

           $sql =("
SELECT dbo.ls_disposal_animals.*, dbo.ls_disposal_reasons.reason_type, dbo.ls_disposal_types.disposal_type 
FROM dbo.ls_disposal_animals 
LEFT JOIN dbo.ls_disposal_reasons ON dbo.ls_disposal_animals.reason_id = dbo.ls_disposal_reasons.reason_id 
LEFT JOIN dbo.ls_disposal_types ON dbo.ls_disposal_animals.disposal_id = dbo.ls_disposal_types.disposal_id 
 WHERE [disposalanimalid]='$tagid'
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

  function vieweditpregnancy($tag){

           $sql =("
 SELECT        dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name, dbo.ls_master.*, dbo.assets_vendors.asset_vendor_name
FROM            dbo.ls_master LEFT JOIN
                         dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id LEFT JOIN
                         dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id LEFT JOIN
                         dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id LEFT JOIN
                         dbo.assets_vendors ON dbo.ls_master.asset_vendor_id = dbo.assets_vendors.asset_vendor_id
                          WHERE [tag]='$tag'
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
  function vieweditpregnancyv1($tagid){

           $sql =("
SELECT        dbo.Users.UserName, dbo.assets_vendors.asset_vendor_name, dbo.ls_pregnancy.*
FROM            dbo.ls_pregnancy INNER JOIN
                         dbo.assets_vendors ON dbo.ls_pregnancy.asset_vendor_id = dbo.assets_vendors.asset_vendor_id INNER JOIN
                         dbo.Users ON dbo.ls_pregnancy.UserID = dbo.Users.UserID
                          WHERE [preg_id]='$tagid'
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



   function vieweditanimals($tagid){

           $sql =("
 SELECT        dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name
FROM            dbo.ls_master INNER JOIN
                         dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id INNER JOIN
                         dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id INNER JOIN
                         dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id

                         WHERE [master_id]='$tagid'");

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

 function saveeditnewanimal($weight,$id,$statusid,$typeid,$sourcename,$tagid,$locationid,$purid,$sexid,$commentsid,$dobid,$dateid,$breedid,$details_of_parents_father,$details_of_parents_mother,$vetid,$updatedby){
   $query = "
 UPDATE [ims2].[dbo].[ls_master]
   SET [status] = '$statusid'
      ,[source] = '$sourcename'
      ,[date] = '$dateid'
      ,[dob] = '$dobid'
      ,[type_id] = '$typeid'
      ,[breed_id] =  '$breedid'
      ,[purchase_price] = '$purid'
      ,[details_of_parents_mother] = '$details_of_parents_mother'
      ,[details_of_parents_father] = '$details_of_parents_father'
      ,[sex] = '$sexid'
      ,[comments] = '$commentsid'
      ,[location_id] = '$locationid'
      ,[asset_vendor_id] ='$vetid'
      ,[tag] = '$tagid'
      ,[weight] = '$weight'
      ,[updatedby] ='$updatedby'
      ,[dateupdated] = getdate()      
 WHERE [master_id] = '$id'";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}


  function addnewanimalv1($statusid,$typeid,$sourcename,$tagid,$locationid,$purid,$sexid,$commentsid,$dobid,$dateid,$breedid,$details_of_parents_father,$details_of_parents_mother,$vetid){
   $query = "
  INSERT INTO [ims2].[dbo].[ls_master]
           ([status]
           ,[source]
           ,[date]
           ,[dob]
           ,[type_id]
           ,[breed_id]
           ,[purchase_price]
           ,[details_of_parents_mother]
           ,[details_of_parents_father]
           ,[sex]
           ,[comments]
           ,[location_id]
           ,[tag],[asset_vendor_id])
     VALUES
           ('$statusid'
           ,'$sourcename'
           ,'$dateid'
           ,'$dobid'
           ,'$typeid'
           ,'$breedid'
           ,'$purid'
           ,'$details_of_parents_mother'
           ,'$details_of_parents_father'
           ,'$sexid'
           ,'$commentsid'
           ,'$locationid','$tagid','$vetid')";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}


  function addnewanimal($value,$typeid,$sexid,$breedid,$locationid,$vetid,$tagid,$details_of_parents_mother,$details_of_parents_father,$dob,$purchase_price,$commentsid,$dateid,$createdby,$ai,$mfather,$weight){
   $query = "
  INSERT INTO [ims2].[dbo].[ls_master]
           ([source]
            ,[type_id]
            ,[sex]
            ,[breed_id]
            ,[location_id]
            ,[asset_vendor_id]
            ,[status]
            ,[date]
            ,[tag]
            ,[details_of_parents_mother]
           ,[details_of_parents_father]
           ,[dob]
           ,[purchase_price]
           ,[comments]
           ,[createdby]
            ,[datecreated]
            ,[ai]
            ,[multiplefathers]
            ,[weight]
           )
     VALUES
           ('$value'
            ,'$typeid'
            ,'$sexid'
            ,'$breedid'
            ,'$locationid'
            ,'$vetid'
            ,'Alive'
            ,'$dateid'
            ,'$tagid'
            ,'$details_of_parents_mother'
           ,'$details_of_parents_father'
           ,'$dob'
           ,'$purchase_price'
           ,'$commentsid'
           ,'$createdby'
           ,getdate()
           ,'$ai'
           ,'$mfather'
           ,'$weight'

           )";

   if($this->db->query($query)){
    //echo $this->db->last_query();
    return 1;
   } else {
    return 0;
   }
}

   function viewpregnancy(){

           $sql =("
 SELECT        dbo.Users.UserName, dbo.assets_vendors.asset_vendor_name, dbo.ls_pregnancy.*
FROM            dbo.ls_pregnancy INNER JOIN
                         dbo.assets_vendors ON dbo.ls_pregnancy.asset_vendor_id = dbo.assets_vendors.asset_vendor_id INNER JOIN
                         dbo.Users ON dbo.ls_pregnancy.UserID = dbo.Users.UserID
                          WHERE [status] = 'Pregnant'
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

   function viewpregnancyall($typefilter,$filter){
    if($filter==0){$typewhere='';} else {
 

  $typewhere="and [asset_vendor_name] in ($typefilter)";

}


           $sql =("
 SELECT        dbo.Users.UserName, dbo.assets_vendors.asset_vendor_name, dbo.ls_pregnancy.*
FROM            dbo.ls_pregnancy LEFT JOIN
                         dbo.assets_vendors ON dbo.ls_pregnancy.asset_vendor_id = dbo.assets_vendors.asset_vendor_id LEFT JOIN
                         dbo.Users ON dbo.ls_pregnancy.UserID = dbo.Users.UserID
                          WHERE [status] = 'Pregnant' $typewhere
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

 function viewdisposalsall($typefilter,$filter){
  if($filter==0){$typewhere='';} else {
 

  $typewhere="WHERE [disposal_type] in ($typefilter)";

}

           $sql =("
 SELECT dbo.ls_disposal_animals.*, dbo.ls_disposal_reasons.reason_type, dbo.ls_disposal_types.disposal_type 
 FROM dbo.ls_disposal_animals 
 LEFT JOIN dbo.ls_disposal_reasons ON dbo.ls_disposal_animals.reason_id = dbo.ls_disposal_reasons.reason_id 
 LEFT JOIN dbo.ls_disposal_types ON dbo.ls_disposal_animals.disposal_id = dbo.ls_disposal_types.disposal_id
 $typewhere

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
  function viewdisposals(){

           $sql =("
 SELECT dbo.ls_disposal_animals.*, dbo.ls_disposal_reasons.reason_type, dbo.ls_disposal_types.disposal_type 
 FROM dbo.ls_disposal_animals 
 LEFT JOIN dbo.ls_disposal_reasons ON dbo.ls_disposal_animals.reason_id = dbo.ls_disposal_reasons.reason_id 
 LEFT JOIN dbo.ls_disposal_types ON dbo.ls_disposal_animals.disposal_id = dbo.ls_disposal_types.disposal_id");

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

    function viewanimalswithouturi($breedfilter,$greateroff,$numoff,$greater,$num,$sectionfilter,$filter,$sourcefilter,$locationfilter,$typefilter){
     if($filter==0){$sectionwhere='';} else {
 

  $sectionwhere="and [sex] in ($sectionfilter)";

}   
  if($filter==0){$sourcewhere='';} else {
 

  $sourcewhere="and [source] in ($sourcefilter)";

}  if($filter==0){$locationwhere='';} else {
 

  $locationwhere="and [location_name] in ($locationfilter)";

}

 if($filter==0){$breedwhere='';} else {
 

  $breedwhere="and [breed_name] in ($breedfilter)";

}
if($filter==0){$typewhere='';} else {
 

  $typewhere="and [type_name] in ($typefilter)";

}
 if($num==0){$offwhere='';} else {
 

  $offwhere="where failed $greater $num";

}
 if($numoff==0){$offwheres='';} else {
 

  $offwheres="where offspring $greateroff $numoff";

}
           $sql =("

  select * from
 (
 select lu.*, lo.offspringQTY, lo.duedate 
from (
 SELECT dbo.ls_type.type_name, ims2.dbo.ls_breed.breed_name,
    dbo.ls_location.location_name, dbo.ls_master.*, dbo.assets_vendors.asset_vendor_name, ls_master.dob dob2
  FROM ims2.dbo.ls_master
  LEFT JOIN ims2.dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
  LEFT JOIN ims2.dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
  LEFT JOIN dbo.ls_breed ON ims2.dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
  LEFT JOIN dbo.assets_vendors ON dbo.ls_master.asset_vendor_id = dbo.assets_vendors.asset_vendor_id
  WHERE ls_master.status !='Disposed'  $locationwhere $sourcewhere $sectionwhere $typewhere $breedwhere ) lu 
  left join
   ( SELECT tag, max(duedate) duedate, max(offspringQTY) offspringQTY 
   FROM ims2.[dbo].ls_pregnancy  i
    WHERE status = 'Pregnant' GROUP BY tag  ) lo
    on lu.tag=lo.tag
    ) t
    left join 
    (
     select details_of_parents_mother mothertag,count(tag) offspring,max(dob) dob
    FROM ims2.[dbo].[ls_master] one
    group by details_of_parents_mother
    ) qty
   on t.tag=qty.mothertag
    left join 
    (
    select tag getd, count(tag) failed,max(faileddate) failedd
    FROM ims2.[dbo].[ls_pregnancy] one
  where [status]='Failed' 
  group by tag
    ) f

   on t.tag=f.getd
$offwhere
$offwheres
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


   function viewanimals($id,$greateroff,$numoff,$greater,$num,$sectionfilter,$filter,$sourcefilter,$locationfilter,$typefilter){
     if($filter==0){$sectionwhere='';} else {
 

  $sectionwhere="and [sex] in ($sectionfilter)";

}   
  if($filter==0){$sourcewhere='';} else {
 

  $sourcewhere="and [source] in ($sourcefilter)";

}  if($filter==0){$locationwhere='';} else {
 

  $locationwhere="and [location_name] in ($locationfilter)";

}
if($filter==0){$typewhere='';} else {
 

  $typewhere="and [type_name] in ($typefilter)";

}
 if($num==0){$offwhere='';} else {
 

  $offwhere="where failed $greater $num";

}
 if($numoff==0){$offwheres='';} else {
 

  $offwheres="where offspring $greateroff $numoff";

}
           $sql =("

  select * from
 (
 select lu.*, lo.offspringQTY, lo.duedate 
from (
 SELECT dbo.ls_type.type_name, ims2.dbo.ls_breed.breed_name,
    dbo.ls_location.location_name, dbo.ls_master.*, dbo.assets_vendors.asset_vendor_name, ls_master.dob dob2
  FROM ims2.dbo.ls_master
  LEFT JOIN ims2.dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
  LEFT JOIN ims2.dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
  LEFT JOIN dbo.ls_breed ON ims2.dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
  LEFT JOIN dbo.assets_vendors ON dbo.ls_master.asset_vendor_id = dbo.assets_vendors.asset_vendor_id
  WHERE ls_master.status !='Disposed' and ls_master.breed_id='$id' $locationwhere $sourcewhere $sectionwhere $typewhere ) lu 
  left join
   ( SELECT tag, max(duedate) duedate, max(offspringQTY) offspringQTY 
   FROM ims2.[dbo].ls_pregnancy  i
    WHERE status = 'Pregnant' GROUP BY tag  ) lo
    on lu.tag=lo.tag
    ) t
    left join 
    (
     select details_of_parents_mother mothertag,count(tag) offspring,max(dob) dob
    FROM ims2.[dbo].[ls_master] one
    group by details_of_parents_mother
    ) qty
   on t.tag=qty.mothertag
    left join 
    (
    select tag getd, count(tag) failed,max(faileddate) failedd
    FROM ims2.[dbo].[ls_pregnancy] one
  where [status]='Failed' 
  group by tag
    ) f

   on t.tag=f.getd
$offwhere
$offwheres
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

  function viewanimalsv1($sectionfilter,$filter,$sourcefilter,$typefilter,$locationfilter){
     if($filter==0){$sectionwhere='';} else {
 

  $sectionwhere="and [sex] in ($sectionfilter)";

}    if($filter==0){$typewhere='';} else {
 

  $typewhere="and [type_name] in ($typefilter)";

} 
  if($filter==0){$sourcewhere='';} else {
 

  $sourcewhere="and [source] in ($sourcefilter)";

}  if($filter==0){$locationwhere='';} else {
 

  $locationwhere="and [location_name] in ($locationfilter)";

}
 
           $sql =("select lu.*, lo.offspringQTY, lo.duedate from ( 
SELECT dbo.ls_type.type_name, dbo.ls_breed.breed_name,dbo.ls_location.location_name, dbo.ls_master.*, dbo.assets_vendors.asset_vendor_name 
FROM dbo.ls_master 
LEFT JOIN dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
LEFT JOIN dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
LEFT JOIN dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
LEFT JOIN dbo.assets_vendors ON dbo.ls_master.asset_vendor_id = dbo.assets_vendors.asset_vendor_id 
WHERE ls_master.status ='Alive' $sectionwhere $typewhere $sourcewhere $locationwhere ) lu 
left join
 ( SELECT * FROM ims2.[dbo].ls_pregnancy  i  WHERE [status]   ='Pregnant' ) lo
  on lu.tag=lo.tag  ");

        
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
  function viewanimalsall(){
    
 
           $sql =("
 SELECT        dbo.ls_type.type_name, dbo.ls_breed.breed_name,dbo.ls_location.location_name, dbo.ls_master.*, dbo.assets_vendors.asset_vendor_name
FROM            dbo.ls_master LEFT JOIN
                         dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id LEFT JOIN
                         dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id LEFT JOIN
                         dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id LEFT JOIN
                         dbo.assets_vendors ON dbo.ls_master.asset_vendor_id = dbo.assets_vendors.asset_vendor_id

               WHERE ls_master.status ='Alive'  
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
function viewvendorss(){

           $sql =("
 SELECT [asset_vendor_id]
      ,[asset_vendor_name]
  FROM [ims2].[dbo].[assets_vendors]
  ORDER BY [asset_vendor_name] ASC
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


  function addnewpreganimal($ai,$mfather,$tag,$dateoftest,$vet,$offspringQTY,$duedate,$createdby,$datetimecreated,$fatherdetails,$status){
   $query = "
  INSERT INTO [ims2].[dbo].[ls_pregnancy]
           ([tag]
           ,[dateoftest]
           ,[asset_vendor_id]
           ,[offspringQTY]
           ,[duedate]
           ,[UserID]
           ,[datetimecreated]
           ,[fatherdetails]
           ,[status]
           ,[multiplefathers]
           ,[ai]

           )
     VALUES
           ('$tag'
           ,'$dateoftest'
           ,'$vet'
           ,'$offspringQTY'
           ,'$duedate' 
           ,'$createdby'
           ,'$datetimecreated'
           ,'$fatherdetails'
           ,'$status'
           ,'$mfather'
           ,'$ai'


           )";

   if($this->db->query($query)){

    //echo $this->db->last_query();
    return 1;
   } else {
    return 0;
   }
}

function addnewdisposalanimal($tag,$disposal_id,$date,$price,$reason_id,$createdby){
   $query = "
  INSERT INTO [ims2].[dbo].[ls_disposal_animals]
           ([tag]
           ,[disposal_id]
           ,[date]
           ,[price]
           ,[reason_id]
            ,[createdby]
            ,[createddate]
           )
     VALUES
           ('$tag'
           ,'$disposal_id'
           ,'$date'
           ,'$price'
           ,'$reason_id'
           ,'$createdby'
            ,getdate()
           )";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}

public function get_customers($q)
{
  $this->db->select('ls_master.sex');
  $this->db->from('ls_master');
  $this->db->like('ls_master.sex',$q);
  $query = $this->db->get();


    if($query->num_rows > 0){
        foreach ($query->result_array() as $row){
          $array = array(
              'master_id' => htmlentities(stripslashes($row['sex']))
            );
            $row_set[] = $array;
       }
       $this->output->set_content_type('application/json')->set_output(json_encode($row_set));
    } 
}

public function get_sex1($q)
{
  $this->db->select('dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name');
  $this->db->from('ls_master');
  $this->db->join('dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id', 'inner');
 // $this->db->join('dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id', 'INNER');
 // $this->db->join('dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id', 'INNER');
  $this->db->like('tag',$q);
  $query = $this->db->get();


    if($query->num_rows > 0){
        foreach ($query->result_array() as $row){
          $array = array(
              'sex' => htmlentities(stripslashes($row['sex']))
            );
            $row_set[] = $array;
       }
       $this->output->set_content_type('application/json')->set_output(json_encode($row_set));
    } 
}
  function get_sex11($q){

    

    $query = $this->db->query(" SELECT *  FROM [ims2].[dbo].[ls_master]
  where [tag] like '%$q'");


    if($query->num_rows > 0){
      foreach ($query->result_array() as $row){
        $array = array( 
        'sex' => htmlentities(stripslashes($row['sex'])),
         'tagid' => htmlentities(stripslashes($row['tag']))
        ); 
        $row_set[] = $array;//build an array
        
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($row_set));

    }
  }
  function get_sex($q){

    $this->db->select('*');
    $this->db->like('tag', $q);
    $query = $this->db->get('[ims2].[dbo].[ls_master]');
    if($query->num_rows > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['tag'])); //build an array
        $row_set[] = htmlentities(stripslashes($row['sex']));
        
      }
      $this->output->set_content_type('application/json')->set_output(json_encode($row_set));

    }
  }

   function getMotherDetails($q){
    $query = $this->db->query("
SELECT dbo.ls_master.*, dbo.ls_type.type_name, dbo.ls_breed.breed_name, dbo.ls_location.location_name

FROM ls_master
JOIN dbo.ls_location ON dbo.ls_master.location_id = dbo.ls_location.location_id 
JOIN dbo.ls_type ON dbo.ls_master.type_id = dbo.ls_type.type_id 
JOIN dbo.ls_breed ON dbo.ls_master.breed_id = dbo.ls_breed.breed_id 
WHERE  tag  LIKE '%".$q."%' AND [sex] ='Female' AND [status]!='Disposed'");

   //echo $this->db->last_query();
    if($query->num_rows > 0){
        foreach ($query->result_array() as $row){
            $row_set[] = htmlentities(stripslashes($row['tag']));
                   }
        $this->output->set_content_type('application/json')->set_output(json_encode($row_set));
    } 
  }

  function addnewdisposal($statusid,$typeid,$sourcename,$tagid,$locationid,$purid,$sexid,$commentsid,$dobid,$dateid,$breedid,$details_of_parents_father,$details_of_parents_mother){
   $query = "
  INSERT INTO [ims2].[dbo].[ls_master]
           ([status]
           ,[source]
           ,[date]
           ,[dob]
           ,[type_id]
           ,[breed_id]
           ,[purchase_price]
           ,[details_of_parents_mother]
           ,[details_of_parents_father]
           ,[sex]
           ,[comments]
           ,[location],[tag])
     VALUES
           ('$statusid'
           ,'$sourcename'
           ,'$dateid'
           ,'$dobid'
           ,'$typeid'
           ,'$breedid'
           ,'$purid'
           ,'$details_of_parents_mother'
           ,'$details_of_parents_father'
           ,'$sexid'
           ,'$commentsid'
           ,'$locationid','$tagid')";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}


    function select_reason($id){

   $query = $this->db->query(" SELECT * FROM ls_disposal_reasons WHERE disposal_id=$id");

           if($query->num_rows > 0){

            foreach ($query->result_array() as $row){

                $reason_type[] = htmlentities(stripslashes($row['reason_type']));

               $reason_id[] = htmlentities(stripslashes($row['reason_id']));

           }
           $row_set['reason_type'] = $reason_type;

          $row_set['reason_id'] = $reason_id;

           return $row_set;

        }

        else {

            $row_set[] = htmlentities(stripslashes('noresults'));

       return $row_set;

    }

      }


function select_breed($id){

   $query = $this->db->query("SELECT * FROM ls_breed WHERE type_id=$id");

           if($query->num_rows > 0){

            foreach ($query->result_array() as $row){

                $breed_name[] = htmlentities(stripslashes($row['breed_name']));

               $breed_id[] = htmlentities(stripslashes($row['breed_id']));

           }
           $row_set['breed_name'] = $breed_name;

          $row_set['breed_id'] = $breed_id;

           return $row_set;

        }

        else {

            $row_set[] = htmlentities(stripslashes('noresults'));

       return $row_set;

    }

      }





   function deletereasons($id)
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

function updatereasons($id,$newloc,$typeid){
 $query = "
  update [ims2].[dbo].[ls_disposal_reasons]
  set [reason_type]='$newloc',[disposal_id]='$typeid' where [reason_id]='$id';
  ";
//echo $this->last_query();
   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}




function editreasonss($reasonsid){

           $sql =("
            SELECT   dbo.ls_disposal_reasons.*, dbo.ls_disposal_types.disposal_type
FROM            dbo.ls_disposal_reasons INNER JOIN
                         dbo.ls_disposal_types ON dbo.ls_disposal_reasons.disposal_id = dbo.ls_disposal_types.disposal_id
 WHERE [reason_id] = '$reasonsid'
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
function addnewreasons($newloc,$disposal_id){
 $query = "
  insert into [ims2].[dbo].[ls_disposal_reasons]([reason_type],[disposal_id])  values ('$newloc','$disposal_id')
  ";
   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}
  
function viewreasonss(){

           $sql =("
SELECT        dbo.ls_disposal_reasons.*, dbo.ls_disposal_types.disposal_type
FROM            dbo.ls_disposal_reasons LEFT JOIN
                         dbo.ls_disposal_types ON dbo.ls_disposal_reasons.disposal_id = dbo.ls_disposal_types.disposal_id");

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


 function deletedisposals($id)
  {
 $query = "
  delete from  [ims2].[dbo].[ls_disposal_types]
  where [disposal_id]='$id';
  ";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}

function updatedisposals($id,$newloc){
 $query = "
  update [ims2].[dbo].[ls_disposal_types]
  set [disposal_type]='$newloc' where [disposal_id]='$id';
  ";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}




function editdisposalss($disposalsid){

           $sql =("
 SELECT [disposal_id]
      ,[disposal_type]
  FROM [ims2].[dbo].[ls_disposal_types]
  WHERE [disposal_id] = '$disposalsid'
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
function addnewdisposals($newloc){
 $query = "
  insert into [ims2].[dbo].[ls_disposal_types](disposal_type)  values ('$newloc')
  ";
   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}
  
function viewdisposalss(){

           $sql =("
 SELECT [disposal_id]
      ,[disposal_type]
  FROM [ims2].[dbo].[ls_disposal_types]
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

  function deletebreeds($id)
  {
 $query = "
  delete from  [ims2].[dbo].[ls_breed]
  where [breed_id]='$id';
  ";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}

function updatebreeds($id,$newloc,$typeid){
 $query = "
  update [ims2].[dbo].[ls_breed]
  set [breed_name]='$newloc', [type_id]='$typeid' where [breed_id]='$id';
  ";

   if($this->db->query($query)){
    return 1;
   } else {
    return 0;
   }
}
function viewbreedss(){

           $sql =("
 SELECT [breed_id]
      ,[breed_name]
  FROM [ims2].[dbo].[ls_breed]
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
function viewbreedsss($newloc){

           $sql =("
 SELECT [breed_id]
      ,[breed_name]
      ,[type_id]
  FROM [ims2].[dbo].[ls_breed]
  WHERE [type_id]='$newloc';

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



  




  



  




    
}
?>