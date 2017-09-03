<?php
session_start();
$userName = isset($_SESSION["user"]["first_name"])?$_SESSION["user"]["first_name"]:"";


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="assets/css/secondPage.css">
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/logOut.js"></script>
<script src="assets/js/getUsers.js"></script>
</head>
<body>
<div id="content">

	<div id="header">
		<div id="left-header">
			<h1 id="title">A PAGE HAS NO NAME </h1>
		</div>
	
	<div id="right-header">
		<button type="button" id="logOut">Log Out</button>
	</div>
	
	</div>
	
	<div id="page-body">
		
			<div id="table">
				<table id="users">
					  <tr>
					    <th>First name</th>
					    <th>Last name</th> 
					    <th></th>
					  </tr>
				</table>
			</div>
			<div id="image">
			<div id="hello">Hello <?php echo $userName?>,    Winter is here!<br><br>It's time to destroy your enemies.</div>
			</div>
	
	
</div>

</div>
</body>
</html>