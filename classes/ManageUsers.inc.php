<?php
    include_once ('class.database.inc.php');
    class ManageUsers{
        public $link;
        
        function __construct() {
            $db_connection = new dbConnection();
            $this->link =$db_connection->connect();
            return $this->link;
        }
        
        function registerUsers($fname,$lname,$national_id,$ps_code,$const_code, $dob, $region,$subcity, $woreda,$kebele,$houseNo,$phone,$gender,$health_status,$time,$date){
            $query=$this->link->prepare("INSERT INTO voter(fname,lname,nationalId,ps_code,const_code,dob,region,subcity,woreda,kebele,houseNo,phone,gender,healthstatus,time,date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $values =  array($fname,$lname,$national_id,$ps_code,$const_code, $dob, $region,$subcity, $woreda,$kebele,$houseNo,$phone,$gender,$health_status,$time,$date);
            $query->execute($values);
            $count =$query->rowCount();
            return $count; 
        }
        /*function LoginUsers($username, $password){
            $query=$this->link->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
            $rowcount =  $query->rowCount();
            return $rowcount;
        }*/
        function GetUserInfo($national_id){
            $query = $this->link->query("SELECT * FROM voter WHERE nationalId='$national_id'");
            $rowcount = $query->rowCount();
            if($rowcount==1){
                $result =$query->fetchAll();
                return $result;
            }  else {
                return $rowcount;    
            }
        }
    }
   
    $users =new ManageUsers();
    //echo $users->registerUsers('ENR/1827/04','Tariku', 'tariku', 'jimma', 'jimma', 'yemo','Gingo','gingo','0912353807','male','11:14','23/3/2016');
?>