<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['sid']))
    {
        extract($_POST);
        include 'dbcon.php';
        $sql = "delete from uuser where id=$sid";
        $result = mysqli_query($con,$sql); 
        echo "1";
	}
	else
	{
        echo "0";
	}
}
else
{
    echo "0";
}
?>