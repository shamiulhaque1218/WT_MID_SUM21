<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
  $confirmpassword="";
  $err_confirmpassword="";
  $email="";
  $err_email="";
  $phone="";
  $err_phone="";
	$phoneCode="";
  $address="";
  $err_address="";
  $city="";
  $err_city="";
  $state="";
  $err_state="";
  $zipCode="";
  $err_zipCode="";
  $birthday="";
  $err_birthday="";
  $gender="";
	$err_gender="";
  $comments=[];
  $err_comments="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$array= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
  $array2= array("January","February","March","April","May","June","July","August","September","October","November","December");
  $array3= array(1990,1991,1992,1993,1994,1995,1996,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010);
	
	function commentExist($comnt){
		global $comments;
		foreach($comments as $c){
			if($c == $comnt) return true;
		}
		return false;
	}

	if ($password == $confirmpassword)
	{
		echo $confirmpassword;
	}
	else { echo $err_confirmpassword;  }


	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 6){
			$hasError = true;
			$err_name="Name must contain >6 character";
		}
		else{
			$name = $_POST["name"];
		}

    if(empty($_POST["username"])){
			$hasError = true;
			$err_username="username Required";
		}
		else{
			$username = $_POST["username"];
		}
    
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
    if(!isset($_POST["comfirm password"])){
			$hasError = true;
			$err_confirmpassword="Confirm password Required";
		}
		
		else{
			$confirmpassword = $_POST["comfirnpassword"];
		}
     
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
		
	 if(empty($_POST["phone"])){
		$hasError = true;
		$err_phone="phone required";
	}
	else if(empty($_POST["phoneCode"])){
		$hasError = true;
		$err_phone="code required";
	}
	
	else{
					$phone=$_POST["phone"];
		      $phoneCode=$_POST["phoneCode"];
			}

    if(isset($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}

    if(!isset($_POST["city"])){
			$hasError = true;
			$err_city="City Required";
		}
		else{
			$city = $_POST["city"];
		}

    if(!isset($_POST["state"])){
			$hasError = true;
			$err_state="State Required";
		}
		else{
			$state = $_POST["state"];
		}

    if(!isset($_POST["zipcode"])){
			$hasError = true;
			$err_zipCode="Zipcode Required";
		}
		else{
			$zipCode = $_POST["zipcode"];
		}

    if(!isset($_POST["birthday"])){
			$hasError = true;
			$err_birthday="Birthday Required";
		}
		else{
			$birthday = $_POST["birthday"];
		}

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}


		if(!isset($_POST["comments"])){
			$hasError = true;
			$err_comments="Comments Required";
		}
		else{
			$comments = $_POST["comments"];
		}
		

		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		
		if(!$hasError){
			echo "<h1>Form validation</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
      echo $_POST["confirmpassword"]."<br>";
      echo $_POST["email"]."<br>";
      echo $_POST["address"]."<br>";
      echo $_POST["city"]."<br>";
      echo $_POST["state"]."<br>";
      echo $_POST["zipCode"]."<br>";
      echo $_POST["birthday"]."<br>";
			echo $_POST["gender"]."<br>";
    	echo $_POST["bio"]."<br>";
			$arr = $_POST["comments"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
	}
	?>

<html> 
	<head>  <title>Club Member Registration Form</title>   </head>
	<body>
		<form action="" method="post"> 
		<fieldset>  
		<legend><h1>Club Member Registrations</h1></legend>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input   type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
        <tr>
					<td>Confirm Password</td>
					<td>: <input type="password" name="confirm password" placeholder="confirm Password">  </td>
					<td><span> <?php echo $err_confirmpassword;?> </span></td>
				</tr>
        <tr>
					<td> Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"></td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
        <tr>
					<td>Phone</td>
					<td>: <input  type="text" placeholder="code" name="phonCode" value="<?php echo $phoneCode; ?>"> - <input placeholder="Number"  type="text" name="phone" value="<?php echo $phone; ?>"></td>
					<td><span> <?php echo $err_phone;?> </span></td>
				</tr>
        <tr>
					<td>Address</td>
					<td>: <input type="text" name="address" placeholder="address">   </td>
					<td><span> <?php echo $err_address;?> </span></td>
				</tr>
        <tr>
            <td> </td>
            <td> <input type="text" name="City" placeholder="City">-<input type="text" name="State" placeholder="State"> </td>
            <td><span> <?php echo $err_city;?> </span></td>
            <td><span> <?php echo $err_state;?> </span></td>
        </tr>
        <tr>
            <td> </td>
            <td> <input type="text" name="Postal/Zip Code" placeholder="Postal/Zip Code"> </td>
            <td><span> <?php echo $err_zipCode;?> </span></td>
        </tr>  
        <tr>
            <td>Birthday</td>
            <td>: <select name="Day"> 
            <option >Day</option> 
            <?php
							foreach($array as $d){
								if($d == $birthday) 
									echo "<option selected>$d</option>";
								else
									echo "<option>$d</option>";
							}
						?> 
                  </select>
           <select name="Day">
            <option >Month</option> 
            <?php
							foreach($array2 as $m){
								if($m == $birthday) 
									echo "<option selected>$m</option>";
								else
									echo "<option>$m</option>";
							}
						?> 
            </select>
             <select name="Year">
            <option >Year</option> 
            <?php
							foreach($array3 as $y){
								if($y == $birthday) 
									echo "<option selected>$y</option>";
								else
									echo "<option>$y</option>";
							}
						?> 
              </select>


            <td><span> <?php echo $err_birthday;?> </span></td>   
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input type="radio"  value="Female"  <?php if($gender=="Female") echo "checked"; ?>name="gender" > Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>

        <tr>
					<td>Where did you here about us?</td>
					<td> <input type="checkbox" name="comments[]" <?php if(commentExist("Google")) echo "checked";?> value="Google">Google 
					<input type="checkbox" name="comments[]" <?php if(commentExist("Bolg Post")) echo "checked";?> value="Blog Post"> Blog Post<br>
					<input type="checkbox" name="comments[]" <?php if(commentExist("News Article")) echo "checked";?> value="News Article"> News Article
					</td>
					<td><span> <?php echo $err_comments;?> </span></td>
					</td>
				</tr>
				
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
        

				<tr>
					<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
	</html>
	