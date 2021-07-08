<?php
	$name="";
	$err_name="";
	$bloodgroup="";
	$err_bloodgroup="";
  $quantity="";
  $err_quantity="";
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
		//bloodgroup

    if(empty($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="Bloodgroup Required";
		}
		else{
			$bloodgroup = $_POST["bloodgroup"];

		}
		//quantity
     if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity Required";
		}
		
		else{
			$quantity = $_POST["quantity"];
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

		if(empty($_POST["gender"])){
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
			echo "<h1>Non register form validation</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["bloodgroup"]."<br>";
      echo $_POST["quantity"]."<br>";
      echo $_POST["phone"]."<br>";
      echo $_POST["address"]."<br>";
			echo $_POST["gender"]."<br>";
    	echo $_POST["comments"]."<br>";
			
		}	
	}
	?>

<html> 
	<head>  <title> Non Register Form</title>   </head>
	<body>
	<p align="left"> <a href="homepage.php"> <b>Home</b> </a> </p>
		<form action="" method="post"> 
		<fieldset>  
		      <h1>Non Register Form</h1>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Bloodgroup</td>
					<td>: <input type="text" name="bloodgroup" placeholder="bloodgroup">  </td>
					<td><span> <?php echo $err_bloodgroup;?> </span></td>
				</tr>
        <tr>
					<td> Quantity</td>
					<td>: <input type="text" name="quantity" value="<?php echo $quantity; ?>"></td>
					<td><span> <?php echo $err_quantity;?> </span></td>
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
	