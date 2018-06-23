<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		p
		{
			text-align:center;
			color: white;
		}
		body
		{
			background-color:black;
		}
	</style>
</head>
<body>

<?php

require_once('SSlist/pdo_connect.php');

	//Check to make sure form is empty

if (!empty($_POST['register'])) {
	
		//check to make sure all fields completed
		
		if (!empty($_POST['email'])) {
			
			//Prepared Statement 
					
			$query = "INSERT INTO fantable (FirstName, LastName, email) 
						VALUES (:fname, :lname, :email)";					
			
			$submit = $conn->prepare($query);
			
			//bind parameters
			
			$submit->BindParam(':fname', $_POST['fname']);
			$submit->BindParam(':lname', $_POST['lname']);
			$submit->BindParam(':email', $_POST['email']);

			//USE THIS LATER ONCE YOU CAN UNENCRYPT EMAILS WHEN EXPORTING TO SPREADSHEET
			//$submit->BindParam(':password', password_hash($_POST['email'], PASSWORD_BCRYPT));
			
				
			//Submit query to database

			if ($submit->execute()) {

				echo '<br><p style="font-size:20px">New Fan Updated Successfully!</p>';
								
			} else {
				
				echo '<br><p style="font-size:20px">Problem with Registration.  Please try again.</p>';
				echo '<br><p style="font-size:20px;"><a href="emailform.php">Try Again</a></p>';
								
			}
					
		} else {
					
			echo '<br><p style="font-size:20px">Please complete all fields.</p>';
			echo '<br><p style="font-size:20px;"><a href="register.php">Try Again</a></p>';
								
				}

		}		
	
?>

<p><img src="SSlist/tribute 7.png" alt="logo" height="315" width="600"></p>
<br>
<p style="font-size:25px"><b>NEW FAN INCOMING!!!!</b></p>

<form action="index.php" method="post">
	
	<p>First Name <input type="text" name="fname"></p><br>
	
	<p>Last Name <input type="text" name="lname"></p><br>
	
	<p>Email Address <input type="text" name="email"></p><br> 
	
	<p><input type="submit" name="register" value="Update Mailing List"></p><br>
	
	<!-- <p><a href="../index.php">Return to Login</a></p> -->

</form>
</body>
</html>