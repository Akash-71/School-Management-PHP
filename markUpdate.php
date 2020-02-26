<?php
$s_id = $_POST['std_id'];
$mark = $_POST['mark'];
$subject = $_POST['sub'];


$conn = mysqli_connect("localhost", "root", "", "sgrade_management");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql ="UPDATE s_gradesub SET ".$subject." = '".$mark."' WHERE student_id ='".$s_id."'";
	
	
	//echo $sql;
	
	if (mysqli_query($conn, $sql)) {
		echo "Update successfully";
		
		header("Location:gradeUpdate.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


mysqli_close($conn);




?>