<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/signup.css">
<link rel="stylesheet" type="text/css" href="assets/css/signin.css">
</head>
<body>
<div id="content">

<div id="header">
	<div id="left-header">
		<h1 id="title">A PAGE HAS NO NAME </h1>
	</div>
	
	<div id="right-header">
		<form action="" method="post">
			<input type="text" name="emailSignIn" placeholder= "Email">
			<input type="password" name="passwordSignIn" placeholder="Password">
			<input  id="submitIn" type="submit" name="submitIn" value="Sign In">
		</form>
	</div>
</div>

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


</div>
</body>
</html>