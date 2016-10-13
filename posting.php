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
$compID = $_SESSION['c_id'];
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
	{
		echo("Database Connection Failed");
		exit();
	}
echo "Connection Established";

$target_path = "uploads/";

$name = (isset($_POST['compName']) ? $_POST['compName'] : null);
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$JobTitle = (isset($_POST['JobTitle']) ? $_POST['JobTitle'] : null); 
$JobDescription = (isset($_POST['JobDescription']) ? $_POST['JobDescription'] : null);
$branch = (isset($_POST['branch']) ? $_POST['branch'] : null);
$pointer = (isset($_POST['m_pointer']) ? $_POST['m_pointer'] : null);
$IF = (isset($_POST['m_IF']) ? $_POST['m_IF'] : null);
$chk="";  
foreach($branch as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 

$query = "INSERT INTO `jobs`(`comp_ID`,`org_name`, `email`, `title`, `description`, `branch`, `min_pointer`, `max_IF`,`studID`) VALUES ('$compID','$name','$email','$JobTitle','$JobDescription','$chk','$pointer','$IF','0')";

if(mysqli_query($conn,$query)){
	echo "<script type='text/javascript'>";
	echo 'alert("Record added Succesfully");';
       echo 'window.location= "PostJob.php";';
	   echo "</script>";
}
else
	echo "Query Failed";


	
mysqli_close($conn);

?>


<body>
</body>
</html>