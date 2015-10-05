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

$query = mysql_query("SELECT * FROM register WHERE unamex='".$uname."' AND pwdx='".$pwd."'");

$count = mysql_num_rows($query);

if($count==1)
	echo "Login Successful.";
else
	echo "Incorrect Username/Password";



mysql_close($con);
?>