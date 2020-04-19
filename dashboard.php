<?php

session_start();

if(!isset($_SESSION['admin'])){
	header('location:admin.php');
}

include 'dbcon.php';
    $sql="SELECT * FROM uuser";
    $result=mysqli_query($con,$sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'css/style.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<body>

<header>
	<nav class="navbar">
		<div class="logo"> 
			<a href="#" target="_blank">Welcome</a>
		</div>

	

		<div class="contact_btn">
			<a href="logout1.php">Logout</a>
		</div>
	</nav>

	<div class="center_content">
		<h1>Hello  this is </h1>
		<h2><?php  echo  $_SESSION['admin']; ?></h2>
	</div>


	<div class="grid_sec">
  <table id="tbl" border="1">
                    <thead class="bg-primary"> 
                        <tr>
                        <th class="text-center"> Sr.No. </th>
                        <th class="text-center"> Name </th>
                        <th class="text-center"> Email </th>
                        <th class="text-center"> Mobile </th>
                        <th class="text-center"> Action </th>
                        </tr>
                    </thead>

                    <tbody id="mytable">
                        <?php
                        $i = 1;
                        while ($row=mysqli_fetch_row($result)) {
                        ?>
                        <tr>

                        <td> <?php echo $i++; ?> </td>
                        <td name="date"><?php echo $row[1]; ?></td>
                        <td name="date"><?php echo $row[2]; ?></td>
                        <td name="subject"><?php echo  $row[3] ?></td>
                        <td>
                        <button class="btn btn-primary" id="<?php echo $row[0] ?>" onclick="send(this.id)" > Delete </button>
                            
                        </td>
                        
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>

	</div>

</header>

</body>
<script type="text/javascript">

function send(clicked_id)
  {
    $.post("deleteuser.php",
        {sid: clicked_id},
        function (data) {
            if(data==1)
              alert("User Deleted");
            else
              alert("Please try again");
        });
  }

</script>
</html>