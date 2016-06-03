<?php
if(isset($_POST['register'])){
           //// session_start();
            require_once 'classes/ManageUsers.inc.php';
            $users = new ManageUsers();
            $fname = htmlentities($_POST['fname']);
            $lname =htmlentities($_POST['lname']);
            $national_id =  md5(htmlentities($_POST['national_id']));
            
            $ps_code =htmlentities($_POST['ps_code']);
            $const_code=htmlentities($_POST['const_code']);
            $dob =($_POST['dob']);
            $region = htmlentities($_POST['region']);
            $subcity = htmlentities($_POST['subcity']);
            $woreda = htmlentities($_POST['woreda']);
            $kebele = htmlentities($_POST['kebele']);
            $houseNo= htmlentities($_POST['houseNo']);
            $phone = ($_POST['phonenumber']);
            $phone_hash =  md5($phone);
            $gender =($_POST['gender_name']);
            $health_status=htmlentities($_POST['healthstatus']);
            $time = date('H:i:s');
            $date = date('d-M-Y');
  if(empty($fname) ||empty($lname)|| empty($national_id)||empty($ps_code)|| empty($const_code)|| empty($dob)|| empty($region)|| empty($subcity)|| empty($woreda)|| empty($kebele)||empty($houseNo)|| empty($phone)||empty($gender)|| empty($health_status)){
       $error='All fields are required';
 }
  else {
     $getVoter = $users->GetUserInfo($national_id);
     if($getVoter==0){
         $register_user =$users->registerUsers($fname,$lname,$national_id,$ps_code,$const_code, $dob, $region,$subcity, $woreda,$kebele,$houseNo,$phone_hash,$gender,$health_status,$time,$date);
         if($register_user==1){
              $success = 'Well done! You register successfully.';
         }
         else {
              $error = 'You are not Registered. Check ps_code and const_code.';
         }
     }else{
          $error = 'Aleardy you registered.';
     } 
       
} 
}


?>