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
/*
$org_name = $_POST['org_name'];
$address = $_POST['address'];
$hr_name = $_POST['hr_name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
*/
$org_name = (isset($_POST['org_name']) ? $_POST['org_name'] : null);
$hr_name = (isset($_POST['hr_name']) ? $_POST['hr_name'] : null);
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$username = (isset($_POST['username']) ? $_POST['username'] : null); 
$password = (isset($_POST['password']) ? $_POST['password'] : null);
$contact = (isset($_POST['contact']) ? $_POST['contact'] : null);
$address = (isset($_POST['address']) ? $_POST['address'] : null);



$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
	{
		echo("Database Connection Failed");
		exit();
	}
//echo "Connection Established";

//$query = "INSERT INTO `company` (`compID`, `org_name`, `address`, `hr_name`, `contact`, `email`, `username`, `password`) VALUES (NULL, '$org_name', '$address', '$hr_name', '$contact', '$email', '$username', '$password')";

$query = "INSERT INTO `company`(`compID`, `org_name`, `address`, `hr_name`, `contact`, `email`, `username`, `password`) VALUES (NULL,'$org_name','$address','$hr_name','$contact','$email','$username','$password')";

if(mysqli_query($conn,$query)){
	echo "<script type='text/javascript'>";
	echo 'alert("Record added Succesfully");';
       echo 'window.location= "comp_login.html";';
	   echo "</script>";
}
else
	echo "Query Failed";

mysqli_close($conn);
?>
<body>
</body>
</html>