<!DOCTYPE html>
<html>
<head>
	<title>Form Registration </title>
</head>
<body>

	<h1>Form Registration</h1>

	<?php 

		$FirstName = $_POST['fname'];
		$LastName = $_POST['lname'];
		$Gender = $_POST['gender'];
		$Email = $_POST['email'];
		$UserName = $_POST['uname'];
		$Password = $_POST['password'];
		$RecoveryEmail = $_POST['recoveryemail'];

    	echo "Create account successful. $FirstName $LastName <br>";

	
        $f = fopen("text.txt","a");
        fwrite($f, $FirstName. "," .$LastName."," .$Gender."," .$Email."," .$UserName."," .$Password.",".$RecoveryEmail.",\n");
        fclose($f);

	?>

<a href="Login.html">Log In</a>
</body>
</html>