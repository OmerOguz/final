<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
	    
	    
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<body>

	<div class="header">
		<h2>appointment</h2>
	</div>
	
	<form method="post" action="index.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>appointment Name</label>
			<input type="text" name="Name" >
		</div>
		<div class="input-group">
			<label>appointment Location/Hour</label>
			<input type="password" name="Location">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="Create appointment ">Create</button>
		</div>
			</form>


</body>

		
</body>
</html>