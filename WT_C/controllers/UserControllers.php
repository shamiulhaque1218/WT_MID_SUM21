<?php
      include 'models/db_config.php';
     
    $name="";
	$err_name="";
    $uname="";
    $err_uname="";
    $email="";
    $err_email="";
    $password="";
    $err_password="";
	$err_db="";
    
	$hasError=false;
	

     
	if(isset($_POST["sign_up"]))
  {

        //name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required"; 
		}
		
		else{
			$name = $_POST["name"];
		}
        //uname
        if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname="User Name Required";
		}
		
		else{
			$uname = $_POST["uname"];
		}

      //email
     
      if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		else if(strpos($_POST["email"],"@") == false){
			$hasError = true;
       $err_email="Email must contain @ character";
	   }
	  else if(strpos($_POST["email"],".") == false){
			$hasError = true;
       $err_email="Email must contain . character";
	   }
		else{
			$email = $_POST["email"];
	 }
     //password
     if(empty($_POST["password"])){
        $hasError = true;
        $err_password="Password Required";
     }
    
     else{
        $password = $_POST["password"];
         }

		 if(!$hasError) {
           $rs = insertUser($name,$uname,$_POST["email"],$_POST["password"]);
		   if($rs === true) {
			   header("Location: login.php");
		   }
		   $err_db = $rs;
		 }
    
  }
  else if (isset($_POST["btn_login"])) {
	if(empty($_POST["uname"])){
		$hasError = true;
		$err_uname="User Name Required";
	}
	
	else{
		$uname = $_POST["uname"];
	}

 //password
 if(empty($_POST["password"])){
	$hasError = true;
	$err_password="Password Required";
 }

 else{
	$password = $_POST["password"];
	 }
	 if(!hasError) {
		if(authenticateUser($uname,$password)) {
			header("Location: dashboard.php");
		}
		$err_db = "Username Password Invalid";
	 }
		
   }

  function insertUser($name,$uname,$email,$password) {
	$query = "insert into users values ('$name','$uname','$email','$password')";
	return execute($query);

}
 function authenticateUser($uname,$password) {

	$query = "select * from users where username='$uname' and  password='$password'";
	   $rs= get($query);
	   if(count($rs)>0) {
		   return true;
	   }
	   return false;
 }

  
 ?>