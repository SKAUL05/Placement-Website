<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

session_start(); 
$studID=$_SESSION['s_id'];
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
	
		$query = "SELECT `comp_ID` FROM `jobs` WHERE jobNo='$id'";
		
			$result = mysqli_query($conn,$query) or die("cannot execute query");
            $count = mysqli_num_rows($result);
			$row = mysqli_fetch_assoc($result);
			$compID = $row['comp_ID'];
		$ins = "INSERT INTO `appied_jobs`(`sr_No`, `jobID`, `studID`, `compID`) VALUES (NULL,'$id','$studID','$compID')";
		//$check = "SELECT * FROM company";
		//$result = mysqli_query($conn,$check);
		//$row = mysqli_fetch_array($result);
		if(mysqli_query($conn,$ins)){
			echo "<script type='text/javascript'>";
			echo 'alert("Applied Succesfully");';
       		echo 'window.location= "ApplyJob.php";';
	   		echo "</script>";
			}
		else
			echo "Query Failed";	
		
?>
<body>
</body>
</html>