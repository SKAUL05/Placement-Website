<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
session_start();
$tpoID = $_SESSION['tpo_id'];
$compID = $_SESSION['c_id'];
$studID = $_SESSION['s_id'];
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
	
	$sql = "SELECT * from appied_jobs WHERE studID=6";
	//$sql1= "SELECT * from jobs";
 	$result = mysqli_query($conn,$sql) or die("cannot execute query");
       $count = mysqli_num_rows($result);
       			$i=0;
                $car = array();
                if (mysqli_num_rows($result) > 0) {
    // output data of each row
  				$numm=0;
    			while($row = mysqli_fetch_assoc($result)) {
  					$numm++;
					$car[]= $row['jobID'];
 			 	}
				for($i=0;$i<$numm;$i++)
				{
					$sql1 = "SELECT * from jobs WHERE jobID=$car[$i]";
					$result1 = mysqli_query($conn,$sql1) or die("cannot execute query");
					$row = mysqli_fetch_assoc($result);
					echo $row['title'];
				
				}
				



				}
?>

<body>
</body>
</html>