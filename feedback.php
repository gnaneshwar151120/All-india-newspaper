<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
$server_name="localhost";
$username="root";
$password="";
$database_name="ain";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("connectionfailed:" .mysqli_connect_error());
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Message = $_POST['Message'];
$sql_query = "INSERT INTO `feedback form` (`Name`, `Email`, `Phone`, `Message`) VALUES ('$Name', '$Email', '$Phone', '$Message')";
if(mysqli_query($conn,$sql_query))
{
	echo "New Details Entry inserted successfully !";
}
else
{
	echo "Error:" . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>