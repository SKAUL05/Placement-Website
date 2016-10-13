<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>View Students</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="CSS/bootstrap-theme.min.css" rel="stylesheet">

  
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="CSS/navbar.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	$pointer = (isset($_POST['pointer']) ? $_POST['pointer'] : null);
	$liveIF = (isset($_POST['liveIF']) ? $_POST['liveIF'] : null);
	$sql = "SELECT * from student WHERE SPI > '$pointer' AND live_IF < '$liveIF'";
 	$result = mysqli_query($conn,$sql) or die("cannot execute query");
                $count = mysqli_num_rows($result);
?>
</head>
<body>
<table class="table" align="center" width="600px">
  <tr>
    <th scope="col">Sr No.</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Branch</th>
    <th scope="col">SPI</th>
    <th scope="col">Live IF</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  	$numm=0;
    while($row = mysqli_fetch_assoc($result)) {
  $numm++;
  		$_SESSION['sid'] = $row['studID'];
		$id[] = $row['studID'];
		echo "<tr>";
		echo "<td>" . $numm . "</td>";
		echo "<td>" . $row['Fname']. "</td>";
		echo "<td>" . $row['Lname']. "</td>";
		echo "<td>" . $row['Branch']. "</td>";
		echo "<td>" . $row['SPI']. "</td>";
		echo "<td>" . $row['live_IF']. "</td>";
		echo "</tr>";		
   	 }
} else {

}                        
?>
</table>
</body>
</html>