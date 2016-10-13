<?php require_once('Connections/localhost.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student account</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="CSS/bootstrap-theme.min.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/navbar.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
<?php session_start(); ?>
<?php


$studentID = $_SESSION['s_id'];
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
//echo "Connection Established";

$sql = "SELECT * from student where studID='$studentID'";
 $result = mysqli_query($conn,$sql) or die("cannot execute query");
                $count = mysqli_num_rows($result);
                $row = mysqli_fetch_array($result);
				$fname = $row['Fname'];
				$lname = $row['Lname'];				
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
              <li><a href="student_account.php">Home</a></li>
              <li><a href="ApplyJob.php">View Jobs</a></li>
              <li><a href="account_info.php">Your Account</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>	

<div id="PageHeading">
  <h1>Student Panel</h1>
  <h2>Welocme <?php echo $fname . " " . $lname; ?> . </h2>
  </div>
<div id="Content">
</div>
</body>
</html>