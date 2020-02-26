<?php
session_start();
$username = $_POST['uname'];
$Password = $_POST['password'];

$username = $username;
$Password = $Password;
$username = $username;
$Password = $Password;


$conn = mysqli_connect("localhost", "root", "","sgrade_management");
	
	
$result = mysqli_query($conn,"select * from tlogin where T_Name = '$username' and T_Pass = '$Password'") or die(mysqli_error());

$row = mysqli_fetch_array($result);
if($row['T_Name'] == $username && $row['T_Pass'] == $Password)
{
	$_SESSION["username"]=$username;
header("Location:teacher_choice.php");
}
else
{
	echo "Failed to login";
}

?>