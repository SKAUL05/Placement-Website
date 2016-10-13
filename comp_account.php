<!DOCTYPE html>
<html lang="en">
  <head>
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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php session_start(); ?>
<?php


$compID = $_SESSION['c_id'];
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

$sql = "SELECT * from company where compID='$compID'";
 $result = mysqli_query($conn,$sql) or die("cannot execute query");
                $count = mysqli_num_rows($result);
                $row = mysqli_fetch_array($result);
				$name = $row['org_name'];
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
              <li><a href="index.html">Home</a></li>
              <li><a href="PostJob.php">Post a Job</a></li>
              <li><a href="filter.php">Filter Students</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>	

<div id="PageHeading">
  <h1>Training and Placement Officer panel</h1>
  <h2>Welocme <?php echo $name; ?>  </h2>
  </div>
<div id="Content">
</div>
</body>
</html>