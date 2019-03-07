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

    label {
    /* To make sure that all labels have the same size and are properly aligned */
        display: inline-block;
        width: 360px;
        text-align: left;
        color:white;
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
        background-color:black
    }

    p {
        text-align:center;
        color:white;
    }
    a:link {
        color:yellow;
    }
    a:visited {
        color:red;
    }
</style>
<body>

<?php

require_once('pdo_connect.php');

	//Check to make sure form is empty

if (isset($_POST['register'])) {
	
    //check to make sure all fields completed
    $fieldcheck = array('fname', 'lname', 'tickets', 'add1', 'city', 'state', 'zip');
    $error = FALSE;
    foreach ($fieldcheck as $f) {
        if (empty($_POST[$f])) {
           $error = TRUE;
       }
    }
    if($error) {
        echo '<br><p style="font-size:20px">Please complete all fields.</p>';
        echo '<br><p style="font-size:20px;"><a href="ticketform.php">Try Again</a></p>';
        echo '<br><p><a href="../../index.php">Return to Homepage</a></p>';
        exit();
    }
    else {

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

            echo '<br><p style="font-size:20px">Ticket Request Submitted!</p>';
            echo '<p><a href="../../index.php">Return to Homepage</a></p>';
            exit();

                            
        } else {
            
            echo '<br><p style="font-size:20px">Problem with request.  Please try again.</p>';
            echo '<br><p style="font-size:20px;"><a href="ticketform.php">Try Again</a></p>';
            echo '<p><a href="../../index.php">Return to Homepage</a></p>';
            exit();
                            
        }
    } 
}
		
	
?>

<p><img src="tribute 7.png" alt="logo" height="315" width="600"></p>
<br>

<form action="ticketform.php" method="post">

<div class="row">
        <div class="large-8 small-centered columns">
            <fieldset>
                <legend style="color:yellow;font-size:25px;"><b>Ticket Request</b></legend>
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
                        <input type="text" id="zip" name="zip"></input>
                    </div>
                </div>    
            </fieldset>   
        </div>
    </div>
	
	<p><input type="submit" name="register" value="Request Tickets"></p>
	
	<p><a href="../../index.php">Return to Homepage</a></p>

</form>
</body>
</html>