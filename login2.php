<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "tupperware";
$prefix = "";

$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect to database");
mysql_select_db($mysql_database,$con) or die("Could not select database");

$unamex=$_POST['unamex'];
$pwdx=$_POST['pwdx'];

$query = mysql_query("SELECT * FROM register WHERE uname='".$unamex."' AND pwd='".$pwdx."'");

$count = mysql_num_rows($query);

if($count==1)
{
	echo "Login Successful.";
	session_start();
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)) 
	{
	$_SESSION["memb"]=$row['memb'];
	$_SESSION["fname"]=$row['fname'];
	$_SESSION["lname"]=$row['lname'];
	$_SESSION["email"]=$row['email'];
	$_SESSION["uname"]=$row['uname'];
	$_SESSION["number"]=$row['number'];
	$_SESSION["adr1"]=$row['adr1'];
	$_SESSION["adr2"]=$row['adr2'];
	$_SESSION["pin"]=$row['pin'];
	$_SESSION["city"]=$row['city'];
	$_SESSION["state"]=$row['state'];
	$_SESSION["country"]=$row['country'];
} 
	header('Location:index.php');
}
else
	echo "Incorrect Username/Password";
?>