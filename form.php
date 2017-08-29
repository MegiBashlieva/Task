<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="assets/css/signup.css">
</head>
<body>

<div class="signup">
	<h1>Sign Up</h1>
	
		<form action="" method="post">
			<label>First name</label><br>
			<input type="text" name="firstName" value = "<?= empty($_POST["firstName"]) ? "" : $_POST["firstName"]; ?>"><br>
			
			<label>Last name</label><br>
			<input type="text" name="lastName" value = "<?= empty($_POST["lastName"]) ? "" : $_POST["lastName"]; ?>"><br>
			
			<label>Email</label><br>
			<input type="text" name="email" value = "<?= empty($_POST["email"]) ? "" : $_POST["email"]; ?>"><br>
			
			<label>Password(6 or more characters)</label><br>
			<input type="password" name="password" value = "<?= empty($_POST["password"]) ? "" : $_POST["password"]; ?>"><br>
		
			<span>By clicking Sign Up, you agree to <b>User Agreement, Privacy Policy</b> and <b>Cookie Policy</b></b></span>
		
			<input  id="submit" type="submit" name="submit" value="Sign Up">
		
		</form>
</div>

</body>
</html>

