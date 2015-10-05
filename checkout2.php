<?php
session_start();
if(isset($_SESSION["memb"]))
{
$user='root';
$pass='';
$db='tupperware';
$con = new mysqli('localhost',$user,$pass,$db) or die("sorry");
$uname=$_SESSION["uname"];
mysqli_query($con,"UPDATE cart SET item1='0', item2='0', item3='0', item4='0', item5='0', item6='0', item7='0', item8='0', item9='0', item10='0', item11='0', item12='0', cost='0' WHERE uname='".$uname."'");
header('Location:checkout.php');
mysqli_close($con);
}
else
{
header('Location: index.html');
}
?>