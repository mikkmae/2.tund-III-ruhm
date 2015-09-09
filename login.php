<?php

		//LOGIN.PHP
		//echo $_POST["email"];
		$email_error = "";
		//kontrollime et keegi vajutas input nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			
			//echo "keegi vajutas nuppu.";
			
			//kontrollin et e-post ei ole tühi
			
			if (empty($_POST["email"])) {
				
				$email_error = "See väli on kohustuslik";
				
				
			}
		}

?>
<html>
<head>
	<title>Login peidž</title>
</head>
<body>
	<h2>Login peidž</h2>
	
	<form action="login.php" method="post" >
		<input type="email" name="email" placeholder="E-post"><?php echo $email_error;  ?> <br><br>
		<input type="password" name="password" placeholder="Parool"> <br><br>
		<input type="submit" value="Log in"> <br><br>
	</form>
	
	<h2>Create user</h2>
	
</body>
</html>