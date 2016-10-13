<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
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
echo "<br>";
$username=$_POST['username'];
$password=$_POST['password'];

$query = "SELECT * FROM `company` WHERE username = '$username' AND password = '$password'";


$result = mysqli_query($conn,$query) or die("cannot execute query");

$rows = mysqli_num_rows($result);
echo "Rows found" . $rows;
if($rows == 1)
{
	echo "Succesfully Logged in";
	$row=mysqli_fetch_array($result);
	$_SESSION['c_id'] = $row['compID'];
	header("location:comp_account.php");
}
else	
	{	
	echo "<script type='text/javascript'>";
	echo 'alert("Wrong Username/Password. Please try again.");';
       echo 'window.location= "comp_login.html";';
	   echo "</script>";
}


				
?>

<body>
</body>
</html>