<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$user="root";
$pass="";
$db="tp";
$host="localhost";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
	{
		echo("Database Connection Failed");
		exit();
	}
echo "Connection Established";

$target_path = "uploads/";

$fname = (isset($_POST['Fname']) ? $_POST['Fname'] : null);
$lname = (isset($_POST['Lname']) ? $_POST['Lname'] : null);
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$username = (isset($_POST['username']) ? $_POST['username'] : null); 
$password = (isset($_POST['password']) ? $_POST['password'] : null);
$branch = (isset($_POST['Branch']) ? $_POST['Branch'] : null);
$sem1 = (isset($_POST['sem1']) ? $_POST['sem1'] : null);
$sem2 = (isset($_POST['sem2']) ? $_POST['sem2'] : null);
$sem3 = (isset($_POST['sem3']) ? $_POST['sem3'] : null);
$sem4 = (isset($_POST['sem4']) ? $_POST['sem4'] : null);
$sem5 = (isset($_POST['sem5']) ? $_POST['sem5'] : null);
$sem6 = (isset($_POST['sem6']) ? $_POST['sem6'] : null); 
$sem7 = (isset($_POST['sem7']) ? $_POST['sem7'] : null);
$sem8 = (isset($_POST['sem8']) ? $_POST['sem8'] : null);
$liveIF = (isset($_POST['LiveIF']) ? $_POST['LiveIF'] : null);
$SPI = ($sem1 + $sem2 + $sem3 + $sem4 + $sem5 + $sem6 + $sem7 + $sem8) / 8 ;

$query = "INSERT INTO `student` (`studID`, `Fname`, `Lname`, `username`, `password`, `Branch`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `SPI`, `live_IF`, `verify`) VALUES (NULL, '$fname', '$lname', '$username', '$password', '$branch', '$sem1', '$sem2', '$sem3', '$sem4', '$sem5', '$sem6', '$sem7', '$sem8', '$SPI', '$liveIF', '0')";

if(mysqli_query($conn,$query)){
	echo "<script type='text/javascript'>";
	echo 'alert("Record added Succesfully");';
       echo 'window.location= "stud_login.html";';
	   echo "</script>";
}
else
	echo "Query Failed";


	
mysqli_close($conn);

?>


<body>
</body>
</html>