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

    <title>Post a Job</title>

    <!-- Bootstrap core CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="CSS/bootstrap-theme.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/navbar.css" rel="stylesheet">
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
    <link href="CSS/Layout.css" rel="stylesheet" type="text/css" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php session_start(); ?>
<?php


$companyID = $_SESSION['c_id'];
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
	if($companyID==0)
	{
		header("location:authorized.html");
		exit();
	}
//echo "Connection Established";
else{
	$sql = "SELECT * from company where compID='$companyID'";
 	$result = mysqli_query($conn,$sql) or die("cannot execute query");
                $count = mysqli_num_rows($result);
                $row = mysqli_fetch_array($result);
				$name = $row['org_name'];
				$email = $row['email'];
}
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
  <h1>Post a Job</h1>
</div>
<div id="Content">
  <form id="postJob" name="postJob" method="POST" action="posting.php" class="form-group">
    <table width="775" border="0" align="center">
      <tr>
        <td width="92"><h4>Company :</h4> 
          <label for="compName"></label></td>
         <td width="240">
          <input name="compName" type="text" class="StyleTextField" id="compName" value="<?php echo $name ?>" /></td>
      </tr>
      <tr>
        <td><h4>Email:</h4>
          <label for="email"></label></td>
          <td>
          <input name="email" type="text" class="StyleTextField" id="email" value="<?php echo $email ?>"/></td>
      </tr>
      <tr>
        <td><h4>Job Title: <span id="sprytextfield1"></span></h4></td>
          <label for="JobTitle"></label>
          <td>
          <input name="JobTitle" type="text" class="StyleTextField" id="JobTitle" />
          <span class="textfieldRequiredMsg">A value is required.</span></td>
      </tr>
      <tr>
        <td><h4>Job Description:<span id="sprytextarea1"></h4></span></td>
        <td>
          <label for="JobDescription"></label>
          <textarea name="JobDescription" id="JobDescription" cols="45" rows="5"></textarea>
          <span class="textareaRequiredMsg">A value is required.</span></td>
      </tr>
      <tr>
        <td><h4>Applicable Branches:<span id="sprycheckbox1"></td>
          <td width="105"><input type="checkbox" name="branch[]" id="branch" value="CE"/>Computer Engineering</td>
          <td width="102"><input type="checkbox" name="branch[]" id="branch" value="EE"/>Electrical Engineering</td><br />
          <td width="122"><input type="checkbox" name="branch[]" id="branch" value="EC"/>Electronics & Communication  </td>
          <td width="88"><input type="checkbox" name="branch[]" id="branch" value="IT"/>Information Technology</td>
       </tr>
       <tr>
       	  <td></td>
          <td><input type="checkbox" name="branch[]" id="branch" value="ME"/>Mechanical Engineering</td>
          <td><input type="checkbox" name="branch[]" id="branch" value="IC"/>Instrumentation and Control</td><br />
          <td><input type="checkbox" name="branch[]" id="branch" value="CL"/>Civil Engineering</td>
          <td><input type="checkbox" name="branch[]" id="branch" value="CH"/>Chemical Engineering</td>   
          <label for="branch"></label>
          <span class="checkboxRequiredMsg">Please make a selection.</span></td>
       </tr>
      <tr>
        <td><h4>Minimum Pointers: </h4></td>
        <td><input name="m_pointer" type="number" class="StyleTextField" /></td>
      </tr>
      <tr>
        <td><h4>Maximum IF's: </h4></td>
        <td><input name="m_IF" type="number" class="StyleTextField" /></td>    
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><button type="submit" class="btn-primary" id="Register" value="Register" width="150px"> Post Job</button></td>
      </tr>
      <tr>
      	<td>&nbsp;</td>
       </tr>
    </table>
  </form>
</div>
</div>
<div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>
</body>
</html>

