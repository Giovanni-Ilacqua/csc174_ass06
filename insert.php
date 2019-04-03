<?php
	// 1. Create a database connection
	require_once("connect-db.php");

	
	// these are from the text INPUT fields...
	$firstName = Trim(stripslashes($_POST['firstName'])); 
	$lastName = Trim(stripslashes($_POST['lastName'])); 
	$email = Trim(stripslashes($_POST['email'])); 
	
	
	// You really should escape all strings
	$firstName = mysqli_real_escape_string($connection, $firstName);
	$lastName = mysqli_real_escape_string($connection, $lastName);
	$email = mysqli_real_escape_string($connection, $email);
		// Repeat the above line as needed
	
	// 2. Perform database query
	$query  = "INSERT INTO subscribers (first_name, last_name, email) VALUES ('$firstName','$lastName','$email')";
	$result = mysqli_query($connection, $query);

?>




<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>