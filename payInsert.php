<?php

$Sname = $_POST['sname'];
$sid = $_POST['sid'];
$class = $_POST['sclass'];
$toamount = $_POST['tamount'];
$topaid = $_POST['tpaid'];
$duamount = $_POST['damount'];


$conn = mysqli_connect("localhost", "root", "", "sgrade_management");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	$sql ="INSERT into payment(s_name,student_id,class,total_amount,paid,due) values('".$Sname."','".$sid."','".$class."','".$toamount."','".$topaid."','".$duamount ."')";
	
	
	//echo $sql;
	
	if (mysqli_query($conn, $sql)) {
		echo "New records inserted successfully";
		
		header("Location:teacher_choice.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}










?>