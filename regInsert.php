<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sid = $_POST['sid'];
$class = $_POST['class'];
$pass = $_POST['pass'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$phone = $_POST['pnumber'];


$dob = $day.'/'.$month.'/'.$year;




$conn = mysqli_connect("localhost", "root", "", "sgrade_management");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	$sql ="INSERT into s_registration (first_name,last_name,student_id,class,password,DOB,gender,phone) values('".$fname."','".$lname."',".$sid.",".$class.",'".$pass."','".$dob."','".$gender."','".$phone ."')";
	
	
	//echo $sql;
	
	if (mysqli_query($conn, $sql)) {
		echo "New records inserted successfully";
		
		header("Location:teacher_choice.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


mysqli_close($conn);










?>