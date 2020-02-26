<?php
session_start();
if(isset($_SESSION["username"]))
{

$Id = $_POST['id'];
$Stdid = $_POST['stid'];
$Ban = $_POST['bangla'];
$Eng = $_POST['english'];
$Mth = $_POST['math'];
$Reli = $_POST['religion'];
$Phy = $_POST['physics'];
$Che = $_POST['chemistry'];
$Bio = $_POST['biology'];



$conn = mysqli_connect("localhost", "root", "", "sgrade_management");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


	$sql ="INSERT into s_gradesub(Id,student_id,Bangla,English,Math,Religion,Physics,Chemistry,Biology) values('".$Id."','".$Stdid."','".$Ban."','".$Eng."','".$Mth."','".$Reli."','".$Phy."','".$Che ."','".$Bio ."')";
	
	
	//echo $sql;
	
	if (mysqli_query($conn, $sql)) {
		echo "New records inserted successfully";
		
		header("Location:teacher_choice.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


mysqli_close($conn);


}
else
{
	session_destroy();
	header("Location:teacher_login.php");
}
?>


?>