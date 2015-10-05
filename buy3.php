<?php
session_start();
if(isset($_SESSION["memb"]))
{
$user='root';
$pass='';
$db='tupperware';
$con = new mysqli('localhost',$user,$pass,$db) or die("sorry");
$uname=$_SESSION["uname"];
$qty1=$_POST['qty3'];
$qtyx=0;
$qtyy=0;
$query = mysqli_query($con,"SELECT * FROM cart WHERE uname='".$uname."'");

while($row = mysqli_fetch_array($query))
{
	$qtyx=$row['item3'];
}

$qtyy = $qty1 + $qtyx;

mysqli_query($con,"update cart set item3='$qtyy' WHERE uname='$uname'");
$query2 = mysqli_query($con,"SELECT * FROM cart WHERE uname='".$uname."'");
$item1=0;
$item2=0;
$item3=0;
$item4=0;
$item5=0;
$item6=0;
$item7=0;
$item8=0;
$item9=0;
$item10=0;
$item11=0;
$item12=0;
$cost=0;
$cost2=0;
while($row = mysqli_fetch_array($query2))
{
	$item1=$row['item1'];
	$item2=$row['item2'];
	$item3=$row['item3'];
	$item4=$row['item4'];
	$item5=$row['item5'];
	$item6=$row['item6'];
	$item7=$row['item7'];
	$item8=$row['item8'];
	$item9=$row['item9'];
	$item10=$row['item10'];
	$item11=$row['item11'];
	$item12=$row['item12'];
	$cost=$row['cost'];
}	

$cost2 = $item1*200+$item2*390+$item3*250+$item4*280+$item5*450+$item6*350+$item7*200+$item8*180+$item9*250+$item10*270+$item11*410+$item12*330;

mysqli_query($con,"UPDATE cart SET cost='$cost2' WHERE uname='".$uname."'");
mysqli_close($con);
header('Location: portfolio.php');
}
else
{
header('Location: index.html');
}
?>