<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

//session_start(); 
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
	
	if(isset($_GET['edit']))
	{
		$id = $_GET['edit'];
	}
	
		$ins = "UPDATE student SET verify = '1' WHERE studID = '$id' ";
		$check = "SELECT * FROM student";
		$result = mysqli_query($conn,$check);
		$row = mysqli_fetch_array($result);
		if(mysqli_query($conn,$ins))
			echo "<p style='color:#096;'>Verified</p>" ;
		else
			echo "Query Failed";	
		
?>
<body>
</body>
</html>