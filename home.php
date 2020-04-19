<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'css/style.php' ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<body>

<header>
	<nav class="navbar">
		<div class="logo"> 
			<a href="#" target="_blank">Welcome</a>
		</div>

		

		<div class="contact_btn">
			<a href="logout.php">Logout</a>
		</div>
	</nav>

	<div class="center_content">
		<h1>Hello  this is </h1>
		<h2><?php  echo  $_SESSION['username']; ?></h2>
	</div>

	</div>


</header>

</body>
</html>