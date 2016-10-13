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
				$branch = $row['Branch'];
				$sem1 = $row['sem1'];
				$sem2 = $row['sem2'];
				$sem3 = $row['sem3'];
				$sem4 = $row['sem4'];
				$sem5 = $row['sem5'];
				$sem6 = $row['sem6'];
				$sem7 = $row['sem7'];
				$sem8 = $row['sem8'];
                $IF = $row['live_IF'];
                $spi= $row['SPI'];
				
				
?>
</head>

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
            <a class="navbar-brand" href="index.html" style="color:#fff;">Training and Placement Cell</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse" style="vertical-align:middle;">
            <ul class="nav navbar-nav">
              <li><a href="stud_account.php">Home</a></li>
              <li><a href="ApplyJob.php">View Jobs</a></li>
              <li><a href="account_info.php">Your Account</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>	
<div id="PageHeading">
  <h2>Your details are as follows:</h2>
</div>
<div id="ContentRight">    
</div>
	<div id="Content">
    <table class="table" width="200" align="center">
      <tr>
        <td><h2>Branch:  <?php echo $branch ;?> </h2></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><h2>Academic Results: </h2></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><table width="400" border="0">
          <tr>
            <th>SEM1: </th><td> <?php echo $sem1 ;?></td>
            <th> SEM2:</th><td> <?php echo $sem2 ;?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="400" border="0">
          <tr>
            <th>SEM3: </th><td> <?php echo $sem3 ;?></td>
            <th>SEM4:</th><td> <?php echo $sem4 ;?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="400" border="0">
          <tr>
           <th>SEM5: </th><td> <?php echo $sem5 ;?></td>
           <th>SEM6:</th><td> <?php echo $sem6 ;?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="400" border="0">
          <tr>
            <th>SEM7: </th><td> <?php echo $sem7 ;?></td>
            <th>SEM8:</th><td> <?php echo $sem8 ;?></td>
          </tr>
        </table></td>
      </tr>
       <tr>
        <td><table width="350" border="0">
          <tr>
            <td><th>Live IF:</th><td> <?php echo $IF ;?></td>
            <th>SPI: </th><td> <?php echo $spi ;?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
      </tr>
    </table>
    <p>&nbsp;</p>
</div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>

