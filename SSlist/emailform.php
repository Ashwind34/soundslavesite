<!DOCTYPE HTML>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
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

			//Check to make sure form is not empty

		if (!empty($_POST['register'])) {

			require_once('pdo_connect.php');
			
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

						echo '<img src="../images/logo3.jpg" alt="logo" class="responsive">';
						echo '<br><br><p style="font-size:26px">New Fan Updated Successfully!</p><br>';
						echo '<p><u><a href="./emailform.php">Return to the Mailing List</a></u></p><br><br>';
						echo '<p><u><a href="../index.php">Return to Homepage</a></u></p>';
						exit();
										
					} else {
						
						echo '<br><p style="font-size:20px">Problem with Registration.  Please try again.</p>';
						echo '<br><p style="font-size:20px;"><a href="emailform.php">Try Again</a></p>';
						exit();
										
					}
							
				} else {
							
					echo '<br><p style="font-size:20px">Please complete all fields.</p>';
					echo '<br><p style="font-size:20px;"><a href="register.php">Try Again</a></p>';
					exit();
										
						}

				}		
			
		?>

		<img src="../images/logo3.jpg" alt="logo" class="responsive">
		<br>
		<p style="font-size:25px"><b>NEW FAN INCOMING!!!!</b></p>

		<form action="emailform.php" method="post">
			
			<p>First Name <input type="text" name="fname"></p><br>
			
			<p>Last Name <input type="text" name="lname"></p><br>
			
			<p>Email Address <input type="text" name="email"></p><br> 
			
			<p><input type="submit" name="register" value="Add to Mailing List"></p><br>
			
			<p><a href="../index.php">Return to Homepage</a></p>

		</form>
	</body>
</html>

