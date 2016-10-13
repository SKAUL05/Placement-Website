<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>TPO account</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="CSS/bootstrap-theme.min.css" rel="stylesheet">

  
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="CSS/navbar.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

<title>Verified Students</title>
<?php
session_start();
$tpoID=$_SESSION['tpo_id'];
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
	if($tpoID==0)
	{
		header("location:authorized.html");
		exit();
	}
	else
	{
	$sql = "SELECT * from student WHERE verify=1";
 	$result = mysqli_query($conn,$sql) or die("cannot execute query");
                $count = mysqli_num_rows($result);
				$i=0;
	}
?>

<body style="background-repeat:no-repeat; background-size:100%;"  >

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color:#fff;">Training and Placement Cell</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse" style="vertical-align:middle;">
            <ul class="nav navbar-nav">
              <li><a href="tpo_account.php">Home</a></li>
              <li><a href="ViewStudents.php">View Registered Students</a></li>
              <li><a href="VerifiedStudents.php">Approved Students</a></li>
              <li><a href="ViewCompany.php">View Companies </a></li>
              <li><a href="filter.php">Filter Students</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>	

<div id="HeaderSpace">
</div>
<div id="PageHeading">
  <h1><center>Verified Students</h1></center>
</div>
<table class="table" align="center">
  <tr>
    <th scope="col">Sr No.</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Branch</th>
    <th scope="col">SEM 1</th>
    <th scope="col">SEM 2</th>
    <th scope="col">SEM 3</th>
    <th scope="col">SEM 4</th>
    <th scope="col">SEM 5</th>
    <th scope="col">SEM 6</th>
    <th scope="col">SEM 7</th>
    <th scope="col">SEM 8</th>
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
		echo "<td>" . $row['sem1']. "</td>";
		echo "<td>" . $row['sem2']. "</td>";
		echo "<td>" . $row['sem3']. "</td>";
		echo "<td>" . $row['sem4']. "</td>";
		echo "<td>" . $row['sem5']. "</td>";
		echo "<td>" . $row['sem6']. "</td>";
		echo "<td>" . $row['sem7']. "</td>";
		echo "<td>" . $row['sem8']. "</td>";
		echo "<td>" . $row['SPI']. "</td>";
		echo "<td>" . $row['live_IF']. "</td>";
		echo "</tr>";		
   	 }
} else {
    echo "0 results";
}                        
?>

</table>                        
                        
<br />
<br />                        
                    



</div>
</body>
</html>
</head>

<body>
</body>
</html>