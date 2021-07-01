<?php
	
	$id="";
	$err_id="";
	$email="";
  $err_email="";
	$password="";
	$err_password="";
  $newpassword="";
  $err_newpassword="";
	$confirmpassword="";
  $err_confirmpassword="";
  
  
	$hasError=false;
	
	
   //id
	if(isset($_POST["submit"])){
		if(empty($_POST["id"])){
			$hasError = true;
			$err_id="Id Required";
		}
		else if(strlen($_POST["id"]) <= 8){
			$hasError = true;
			$err_id="Id must contain >8 character";
		}
		else{
			$id = $_POST["id"];
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
			$err_password="password Required";
		}
		else if(strlen($_POST["password"]) < 8){
			$hasError = true;
			$err_password="Must contain at least 8 character";
		}
		else{
			$password = $_POST["password"];
		}
  
		//newpassword

    if(empty($_POST["newpassword"])){
			$hasError = true;
			$err_newpassword="Newpassword Required";
		}
		else if(strlen($_POST["newpassword"]) < 8){
			$hasError = true;
			$err_newpassword="Must contain at least 8 character";
		}
		else{
			$newpassword = $_POST["newpassword"];
		}
    
     //confirmpassword

		 if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword="Confirm password Required";
		}
		else if(strlen($_POST["confirmpassword"]) < 8){
			$hasError = true;
			$err_confirmpassword="Must contain at least 8 character";
		}
		else{
			$confirmpassword = $_POST["confirmpassword"];
		}
     
    
		
		if(!$hasError){
			echo "<h1>Change password</h1>";
			echo $_POST["id"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["newpassword"]."<br>";
      echo $_POST["confirmpassword"]."<br>";
      
			
		}
	}
	?>

<html> 
	<head>  <title>Change Password</title>   </head>
	<body>
		<form action="" method="post"> 
		<fieldset>  
		        <h1>Change Password</h1>
			<table>
				<tr>
					<td>id</td>
					<td>: <input type="text" name="id" value="<?php echo $id; ?>" placeholder="Your id "> </td>
					<td><span> <?php echo $err_id;?> </span></td>
				</tr>
				<tr>
					<td> Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email" ></td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input   type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td>NewPassword</td>
					<td>: <input   type="password" name="newpassword" placeholder="New Password">  </td>
					<td><span> <?php echo $err_newpassword;?> </span></td>
				</tr>
        <tr>
					<td>Confirm Password</td>
					<td>: <input   type="password" name="confirmpassword" placeholder="Confirm Password">  </td>
					<td><span> <?php echo $err_confirmpassword;?> </span></td>
				</tr>
        
        
        

				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
	</html>
	