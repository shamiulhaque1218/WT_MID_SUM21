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
  $birthday="";
  $err_birthday="";
  $gender="";
	$err_gender="";
  
	$comments="";
	$err_comments="";
	
	$hasError=false;
	
	$array= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
  $array2= array("January","February","March","April","May","June","July","August","September","October","November","December");
  $array3= array(1990,1991,1992,1993,1994,1995,1996,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010);
	
	

	

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

    if(empty($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="Bloodgroup Required";
		}
		else{
			$bloodgroup = $_POST["bloodgroup"];

		}
     if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity Required";
		}
		else{
			$quantity = $_POST["quantity"];
		}
		
	 if(empty($_POST["phone"])){
		$hasError = true;
		$err_phone="phone required";
	}
	
	else{
					$phone=$_POST["phone"];
		      
			}

    if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}

    if(empty($_POST["birthday"])){
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
      echo $_POST["birthday"]."<br>";
			echo $_POST["gender"]."<br>";
    	echo $_POST["comments"]."<br>";
			

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
	}
	?>

<html> 
	<head>  <title> Non Register Form</title>   </head>
	<body>
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
	