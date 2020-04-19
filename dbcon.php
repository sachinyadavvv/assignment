<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "assignment";

$con = mysqli_connect($server,$user,$password,$db);

if(!$con){
	?>
		<script>
			alert("NO Connection ");
		</script>
	<?php
}


?>