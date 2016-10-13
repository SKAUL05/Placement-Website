<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
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

    <title>View Jobs</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="CSS/bootstrap-theme.min.css" rel="stylesheet">

  
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="CSS/navbar.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
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
	if($tpoID==0 && $compID==0 && $studID==0)
	{
		header("location:authorized.html");
		exit();
	}
	else
	{
	$sql = "SELECT * from jobs,student";
	$sql1= "SELECT * from jobs";
 	$result = mysqli_query($conn,$sql1) or die("cannot execute query");
                $count = mysqli_num_rows($result);
				$i=0;
	}
?>

</head>

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
              <li><a href="#">View Companies </a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>	

<div id="Content">
<h1>These are the available jobs: </h1>

<form name="VerifyStudent" method="post" action ="verify.php">
<table align="center" width="800" style="padding:10px 10px 10px 10px;">
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  	$numm=0;
    while($row = mysqli_fetch_assoc($result)) {
  $numm++;
		echo "<tr><td>&nbsp;</td></tr>";
		echo "<tr><td>&nbsp;</td></tr>";
		echo "<tr>";
		echo "<td class='TableHeading'><h2>" . $row['title'] . "</h1></td>" . "<td class='TableHeading'></td></h2></td>" . "<td class='TableHeading'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='TableContent'><h4>Company: " . $row['org_name']. "</h4></td>";
		echo "<td class='TableContent'>Minimum Pointer: " . $row['min_pointer']. "</td>";
		echo "<td class='TableContent'>Maximum IF: " . $row['max_IF']. "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td  class='TableContent'>Job Description: " . $row['description'] . "</td>";
		echo "<td  class='TableContent'></td><td class='TableContent'>";
		echo "</tr>";
		
				
   	 }
} else {
    echo "No Job available. Sorry!";
}                        
?>
</table>                        
                        
<br />
<br />
 
</div>

</div>
</body>
</html>