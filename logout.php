<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 

session_start();
//unset($_SESSION["s_id"]);
//unset($_SESSION["tpo_id"]);
//unset($_SESSION["c_id"]);
$_SESSION['tpo_id'] = 0;
$_SESSION['c_id'] = 0;
$_SESSION['s_id'] = 0;  

header("Location: index.html");


?>
<body>
</body>
</html>