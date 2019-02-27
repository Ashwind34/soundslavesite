<!DOCTYPE HTML>
<html>

<head>
<meta name="viewport" content="width=device-width">
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
    form {
    /* Just to center the form on the page */
        margin: 0 auto;
        width: 400px;
        /* To see the outline of the form */
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
    }

    form div + div {
        
    }

    label {
    /* To make sure that all labels have the same size and are properly aligned */
        display: inline-block;
        width: 360px;
        text-align: left;
    }

    input, textarea {
    /* To make sure that all text fields have the same font settings By default, textareas have a monospace font */
        font: 1em sans-serif;
        /* To give the same size to all text fields */
        width: 300px;
        box-sizing: border-box; /* To harmonize the look & feel of text field border */
        border: 1px solid #999;
    }

    input:focus, textarea:focus {
    /* To give a little highlight on active elements */
        border-color: #000;
    }

    textarea {
    /* To properly align multiline text fields with their labels */
        vertical-align: top;
    /* To give enough room to type some text */
        height: 5em;
    }

    .button {
    /* To position the buttons to the same position of the text fields */
        padding-left: 90px;
    /* same size as the label elements */
    }

    button {
    /* This extra margin represent roughly the same space as the space between the labels and their text fields */
        margin-left: .5em;
    }

    body {
        /* background-color:black */
    }
</style>
<body>

<?php

require_once('pdo_connect.php');

	//Check to make sure form is empty

if (!empty($_POST['register'])) {
	
		//check to make sure all fields completed
		
		// if (!empty($_POST['email'])) {

		// 	//check to make sure email is not already on list

		// 	$emailquery = $conn->prepare("SELECT * FROM fantable WHERE email= :email");

		// 	$emailquery->BindParam(':email', $_POST['email']);

		// 	$emailquery->execute();

		// 	$emailqtable=$emailquery->fetchall(PDO::FETCH_ASSOC);

		// 	if (count($emailqtable) == 0) {
			
			//Prepared Statement 
					
			$query = "INSERT INTO ticketlist (fname, lname, tickets, Add1, Add2, City, State, Zip) 
						VALUES (:fname, :lname, :tickets, :add1, :add2, :city, :state, :zip)";					
			
			$submit = $conn->prepare($query);
			
			//bind parameters
			
			$submit->BindParam(':fname', $_POST['fname']);
			$submit->BindParam(':lname', $_POST['lname']);
			$submit->BindParam(':tickets', $_POST['tickets']);
			$submit->BindParam(':add1', $_POST['add1']);
			$submit->BindParam(':add2', $_POST['add2']);
			$submit->BindParam(':city', $_POST['city']);
			$submit->BindParam(':state', $_POST['state']);
			$submit->BindParam(':zip', $_POST['zip']);
				
			//Submit query to database

			if ($submit->execute()) {

				echo '<br><p style="font-size:20px">New Fan Updated Successfully!</p>';
								
			} else {
				
				echo '<br><p style="font-size:20px">Problem with Registration.  Please try again.</p>';
				echo '<br><p style="font-size:20px;"><a href="emailform.php">Try Again</a></p>';
								
			}

		// } else {

		// 	echo '<br><p style="font-size:20px">Already on the list!</p>';
			
		// }
					
		} else {
					
			echo '<br><p style="font-size:20px">Please complete all fields.</p>';
			echo '<br><p style="font-size:20px;"><a href="register.php">Try Again</a></p>';
								
		}

// }		
	
?>

<p><img src="tribute 7.png" alt="logo" height="315" width="600"></p>
<br>
<p style="font-size:25px"><b>NEW FAN INCOMING!!!!</b></p>

<form action="ticketform.php" method="post">

<div class="row">
        <div class="large-8 small-centered columns">
            <fieldset>
                <legend>Ticket Request</legend>
                <div class="row">
                    <div class="small-2 columns">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="small-10 columns">
                        <input type="text" id="fname" name="fname"></input>
                    </div>
                </div>    
                <div class="row">
                    <div class="small-2 columns">
                        <label class="inline left" for="lname">Last Name</label>
                    </div>
                    <div class="small-10 columns">
                        <input type="text" id="lname" name="lname"></input>
                    </div>
                </div>
                <div class="row">
                    <div class="small-4 columns">
                        <label class="inline left" for="tickets">Number of Tickets Requested</label>
                    </div>
                    <div class="small-10 columns">
                        <input type="text" id="tickets" name="tickets"></input>
                    </div>
                </div>    
                <div class="row">
                    <div class="small-4 columns">
                        <label class="inline left" for="add1">Address Line 1</label>
                    </div>
                    <div class="small-10 columns">
                        <input type="text" id="add1" name="add1"></input>
                    </div>
                </div>    
                <div class="row">
                    <div class="small-4 columns">
                        <label class="inline left" for="add2">Address Line 2</label>
                    </div>
                    <div class="small-10 columns">
                        <input type="text" id="add2" name="add2"></input>
                    </div>
                </div>    
                <div class="row">
                    <div class="small-2 columns">
                        <label class="inline left" for="city">City</label>
                    </div>
                    <div class="small-10 columns">
                        <input type="text" id="city" name="city"></input>
                    </div>
                </div>    
                <div class="row">
                    <div class="small-2 columns">
                        <label class="inline left" for="state">State</label>
                    </div>
                    <div class="small-5 columns">
                        <input type="text" id="state" name="state"></input>
                    </div>
                    <div class="small-2 columns">
                        <label class="inline left" for="zip">Zip Code</label>
                    </div>
                    <div class="small-3 columns">
                        <input type="text" id="zip"></input>
                    </div>
                </div>    
            </fieldset>   
        </div>
    </div>
	
	<!-- <p>First Name <input type="text" name="fname"></p><br>
	
	<p>Last Name <input type="text" name="lname"></p><br>
	
	<p>Number of Tickets <input type="text" name="tickets"></p><br> 

	<p>Address Line 1 <input type="text" name="add1"></p><br>

	<p>Address Line 2 <input type="text" name="add2"></p><br>

	<p>City <input type="text" name="city"></p><br>

	<p>State <input type="text" name="state"></p><br>

	<p>ZIP <input type="text" name="zip"></p><br> -->
	
	<p><input type="submit" name="register" value="Request Tickets"></p><br>
	
	<p><a href="../index.php">Return to Homepage</a></p>

</form>

<form>
    
</form>




</body>
</html>