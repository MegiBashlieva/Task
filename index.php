<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/signup.css">
<link rel="stylesheet" type="text/css" href="assets/css/signin.css">
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/signUpValidation.js"></script>
</head>
<body>

<script type="text/javascript">
var errorLogIn = <?php echo json_encode(isset($_SESSION['message']) ? $_SESSION["message"]:"" ); ?>;

if(errorLogIn){
	alert(errorLogIn)
}
<?php session_destroy();?>
</script>

<div id="content">

<div id="header">
	<div id="left-header">
		<h1 id="title">A PAGE HAS NO NAME </h1>
	</div>
	
	<div id="right-header">
		<form action="logInUser.php" method="post">
			<input type="text" name="emailSignIn" placeholder= "Email">
			<input type="password" name="passwordSignIn" placeholder="Password">
			<input  id="submitIn" type="submit" name="submitIn" value="Sign In">
		</form>
	</div>
</div>

<div class="signup">
	<h1>Sign Up</h1>
	
		<form id="upForm" action="javascript:void(0)" method="post">
			<label >First name</label><span class="error">Please enter First name</span>
			<input type="text" id="firstName" name="firstName"><br>
			
			<label>Last name</label><span class="error">Please enter Last name</span>
			<input type="text" id="lastName" name="lastName"><br>
			
			<label>Email</label><span class="error">Please enter a valid email</span>
			<input type="text" id="signUpEmail" name="email"><br>
			
			<label>Password(6 or more characters)</label><span class="error">Password must be 6 or more characters </span>
			<input type="password" id="signUpPass" name="password"><br>
		
			<span id="agr">By clicking Sign Up, you agree to <b>User Agreement</b>, <b>Privacy Policy</b> and <b>Cookie Policy</b></span>
		
			<input  id="submit" type="submit" name="submit" value="Sign Up">
		
		</form>

</div>


</div>
</body>
</html>