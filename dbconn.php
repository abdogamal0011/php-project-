<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php 
try
{
$con=new PDO('mysql:host:localhost;port=3306;dbname=tblfarm','root','');
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "Connectd successfully <br><br>";
}
catch(PDOException $e)
{
echo ("Internal Login Error, Please Contact Web site Support");
$error="Error message:".$e->getMessage()."Error at Line:".$e->getLine()."in a file named:".$e->getFile();
error_log($error);
return;
}

?>

</body>

</html>
