<?php
	$name="";
	$err_name="";
  $email="";
  $err_email="";
  $phone="";
  $err_phone="";
  $address="";
  $err_address="";
  $gender="";
	$err_gender="";
	$comments="";
	$err_comments="";
	
	$hasError=false;
	

     //name
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 5){
			$hasError = true;
			$err_name="Name must contain >5 character";
		}
		else{
			$name = $_POST["name"];
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

		//phone 

	 if(empty($_POST["phone"])){
		$hasError = true;
		$err_phone="phone required";
	}
	
	else{
					$phone=$_POST["phone"];
			}

       //address
    if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}
      
    //gender

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
     
    //comments

		if(empty($_POST["comments"])){
			$hasError = true;
			$err_comments = "Comments Required";
		}
		else{
			$comments = $_POST["comments"];
		}
		
		
		if(!$hasError){
			echo "<h1>Plasma Donation Form</h1>";
			echo $_POST["name"]."<br>";
      echo $_POST["email"]."<br>";
      echo $_POST["address"]."<br>";
			echo $_POST["gender"]."<br>";
    	echo $_POST["comments"]."<br>";
			

			
		}
	}
	?>

<html> 
	<head>  <title>Plasma Donation</title>   </head>
	<body>
		<form action="" method="post"> 
		<fieldset>  
		<h1>Plasma Donation</h1>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
					<td> Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
        <tr>
					<td>Phone</td>
					<td>: <input placeholder="Number"  type="text" name="phone" value="<?php echo $phone; ?>"></td>
					<td><span> <?php echo $err_phone;?> </span></td>
				</tr>
        <tr>
					<td>Address</td>
					<td>: <input type="text" name="address" placeholder="address">   </td>
					<td><span> <?php echo $err_address;?> </span></td>
				</tr>
          <tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input type="radio"  value="Female"  <?php if($gender=="Female") echo "checked"; ?>name="gender" > Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>

				
				<tr>
					<td>Comments</td>
					<td>: <textarea name="comments" ><?php echo $comments; ?></textarea>
					<td><span> <?php echo $err_comments;?> </span></td>
					</td>
				</tr>
        

				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
	</html>
	