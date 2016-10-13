<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
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

<title>View Students</title>
<?php
session_start();
$tpoID = $_SESSION['tpo_id'];
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
	if($tpoID==0 && $compID==0)
	{
		header("location:authorized.html");
		exit();
	}
	else
	{
	$sql = "SELECT * from student";
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
              <li><a href="comp_account.php">Home</a></li>
              <li><a href="PostJob.php">Post a Job</a></li>
              <li><a href="filter.php">Filter Students</a></li>
              <li><a href="#">View Placement Records</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div>
<div id="PageHeading">	
<table align="center">
<form class="form-group" action="FilteredList.php" method="POST" target="right">
<div class="form-group-sm">
<tr>
<td><h4>Pointers:  </h4><h6>(Greater Than)</h6></td>
<td>&nbsp;&nbsp;</td>
<td> 
<input type="text" name="pointer" id="pointer" class="StyleTextField"/>
</td>
<td>&nbsp;&nbsp;</td>
</div>
<div class="form-group-sm">
<td><h4>Live IF:  </h4><h6>(Less Than)</h6></td>
<td>&nbsp;&nbsp;</td>
<td> 
<input type="text" name="liveIF" id="liveIF" class="StyleTextField" />

</td></div>
<td>&nbsp;&nbsp;</td>
<div class="form-group-sm">
<td>
<button type="submit" name="submit">Filter</button>

</td></div>
</tr>

</form>
</table>
</div>






</div>
<div id="Content" style="padding:0px 0px 0px 0px;">
<center>
<iframe src="Filteredlist.php" width="900px" height="800px" id="right" name="right" align="middle" frameborder="0"></iframe>
</center>
</div>





</body>
</html>