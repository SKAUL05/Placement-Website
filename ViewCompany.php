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
<?php
session_start();
$tpoID = $_SESSION['tpo_id'];
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
	$sql = "SELECT * from company";
 	$result = mysqli_query($conn,$sql) or die("cannot execute query");
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
              <li><a href="ViewCompany.php">View Companies </a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>	

<div id="PageHeading">
<h1>Registered Companies </h1>

<form name="VerifyStudent" method="post" action ="verify.php">
<table class="table" id = "ViewStudents" align="center">
  <tr>
    <th scope="col">Sr No.</th>
    <th scope="col">Company Name</th>
    <th scope="col">Address</th>
    <th scope="col">HR Name</th>
    <th scope="col">Email</th>
    <th scope="col">Contact</th>    
  </tr>

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=1;
  	$numm=0;
    while($row = mysqli_fetch_assoc($result)) {
  $numm++;
  		//$_SESSION['sid'] = $row['studID'];
		echo "<tr>";
		echo "<td>" . $i . "</td>";
		echo "<td>" . $row['org_name']. "</td>";
		echo "<td>" . $row['address']. "</td>";
		echo "<td>" . $row['hr_name']. "</td>";
		echo "<td>" . $row['email']. "</td>";	
		echo "<td>" . $row['contact']."</td>";
   	 	$i++;	
     }
} else {
    echo "0 results";
}                        
?>
</table>                        
                        
<br />
<br />
 
</div>

</div>
</body>
</html>