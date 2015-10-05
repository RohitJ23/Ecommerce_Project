<?php
session_start();
if(isset($_SESSION["memb"]))
{
$user='root';
$pass='';
$db='tupperware';
$con = new mysqli('localhost',$user,$pass,$db) or die("sorry");
	$memb=$_SESSION["memb"];
	$fname=$_SESSION["fname"];
	$lname=$_SESSION["lname"];
	$email=$_SESSION["email"];
	$uname=$_SESSION["uname"];
	$number=$_SESSION["number"];
	$adr1=$_SESSION["adr1"];
	$adr2=$_SESSION["adr2"];
	$pin=$_SESSION["pin"];
	$city=$_SESSION["city"];
	$state=$_SESSION["state"];
	$country=$_SESSION["country"];

$item1="Tupperware Aquasafe Water Bottle Set";
$item2="Tupperware Classic Lunch Box with Bag";
$item3="Tupperware Best Lunch Set";
$item4="Tupperware Xtreme Set";
$item5="Tupperware Executive Lunch Set";
$item6="Tupperware Classic Slim Lunch Box";
$item7="TUPPERWARE SMIDGET SET";
$item8="Tupperware Goody Box Set";
$item9="Tupperware Large Handy Bowl Set";
$item10="Tupperware Medium Super Storer";
$item11="Tupperware Midi Magic Flow Container";
$item12="Tupperware Modular Mate 4 Square Container";
$qty1=0;
$qty2=0;
$qty3=0;
$qty4=0;
$qty5=0;
$qty6=0;
$qty7=0;
$qty8=0;
$qty9=0;
$qty10=0;
$qty11=0;
$qty12=0;
$totalcost1=0;
$totalcost2=0;
$totalcost3=0;
$totalcost4=0;
$totalcost5=0;
$totalcost6=0;
$totalcost7=0;
$totalcost8=0;
$totalcost9=0;
$totalcost10=0;
$totalcost11=0;
$totalcost12=0;
$cost=0;
$cost1=200;
$cost2=390;
$cost3=250;
$cost4=280;
$cost5=450;
$cost6=350;
$cost7=200;
$cost8=180;
$cost9=250;
$cost10=270;
$cost11=410;
$cost12=330;
$ref=0;
$ref2=0;
$query3 = mysqli_query($con,"SELECT * FROM register WHERE uname='".$uname."'");

while($row = mysqli_fetch_array($query3))
{
	$ref=$row['ref'];
}

$query = mysqli_query($con,"SELECT * FROM cart where uname='".$uname."'");

while($row = mysqli_fetch_array($query))
{
	$qty1=$row['item1'];
	$qty2=$row['item2'];
	$qty3=$row['item3'];
	$qty4=$row['item4'];
	$qty5=$row['item5'];
	$qty6=$row['item6'];
	$qty7=$row['item7'];
	$qty8=$row['item8'];
	$qty9=$row['item9'];
	$qty10=$row['item10'];
	$qty11=$row['item11'];
	$qty12=$row['item12'];
}

$totalcost1 = $qty1 * $cost1;
$totalcost2 = $qty2 * $cost2;
$totalcost3 = $qty3 * $cost3;
$totalcost4 = $qty4 * $cost4;
$totalcost5 = $qty5 * $cost5;
$totalcost6 = $qty6 * $cost6;
$totalcost7 = $qty7 * $cost7;
$totalcost8 = $qty8 * $cost8;
$totalcost9 = $qty9 * $cost9;
$totalcost10 = $qty10 * $cost10;
$totalcost11 = $qty11 * $cost11;
$totalcost12 = $qty12 * $cost12;
$ref2=1000 * $ref;
$cost = $totalcost1+$totalcost2+$totalcost3+$totalcost4+$totalcost5+$totalcost6+$totalcost7+$totalcost8+$totalcost9+$totalcost10+$totalcost11+$totalcost12-$ref2;

$order=rand(1000000,9000000);
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Profile | Tupperware</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">

</head><!--/head-->

<body class="homepage">

    <header id="header">
     
<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" height="50px" width="200px" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li><a href="portfolio.php">Our Products</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>  
						<li><a href="display.php">My Profile</a></li>
						<li class="active"><a href="checkout.php">Checkout</a></li>
						<li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
			
    </header><!--/header-->
	
	<section>
	<center><h2 style="font-size:40;">Your Order Number: <?php echo "$order";?></h2>
	<p style="font-weight:bold;"> Your order will be delivered within 2-3 business days. <br> The amount of Rs. <?php echo "$cost";?> is to be paid at the time of delivery.<br>
	An email confirmation has been sent to <?php echo "$email";?>.</p>
	<table border=1 cellpadding=10px>
	<tr>
	<th>Order For </th> <td><?php echo "$fname "; echo "$lname";?></td>
	</tr>
	<tr>
	<th>Delivery Address </th> <td><?php echo "$adr1 "; echo "$adr2 "; echo "$pin "; echo "$city "; echo "$state "; echo "$country";?></td>
	</tr>
	<tr>
	<th>Contact Info. </th> <td> <?php echo "$number";?></td>
	</tr>
	</table>
	<p></p><br>
	<input type="button" onClick="window.print();" value="Print Receipt"><br>
	<p></p><br>
	<table border=1 cellpadding=10px>
	<tr>
	<th>Sr. No.</th><th>Item Name</th><th>Quantity</th><th>Cost Per Unit</th><th>Cost</th>
	</tr>
	<tr>
	<td>1</td><td><?php echo "$item1";?></td><td><?php echo "$qty1";?></td><td><?php echo "$cost1";?></td><td><?php echo "$totalcost1";?></td>
	</tr>
		<tr>
	<td>2</td><td><?php echo "$item2";?></td><td><?php echo "$qty2";?></td><td><?php echo "$cost2";?></td><td><?php echo "$totalcost2";?></td>
	</tr>
		<tr>
	<td>3</td><td><?php echo "$item3";?></td><td><?php echo "$qty3";?></td><td><?php echo "$cost3";?></td><td><?php echo "$totalcost3";?></td>
	</tr>
		<tr>
	<td>4</td><td><?php echo "$item4";?></td><td><?php echo "$qty4";?></td><td><?php echo "$cost4";?></td><td><?php echo "$totalcost4";?></td>
	</tr>
		<tr>
	<td>5</td><td><?php echo "$item5";?></td><td><?php echo "$qty5";?></td><td><?php echo "$cost5";?></td><td><?php echo "$totalcost5";?></td>
	</tr>
		<tr>
	<td>6</td><td><?php echo "$item6";?></td><td><?php echo "$qty6";?></td><td><?php echo "$cost6";?></td><td><?php echo "$totalcost6";?></td>
	</tr>
		<tr>
	<td>7</td><td><?php echo "$item7";?></td><td><?php echo "$qty7";?></td><td><?php echo "$cost7";?></td><td><?php echo "$totalcost7";?></td>
	</tr>
		<tr>
	<td>8</td><td><?php echo "$item8";?></td><td><?php echo "$qty8";?></td><td><?php echo "$cost8";?></td><td><?php echo "$totalcost8";?></td>
	</tr>
		<tr>
	<td>9</td><td><?php echo "$item9";?></td><td><?php echo "$qty9";?></td><td><?php echo "$cost9";?></td><td><?php echo "$totalcost9";?></td>
	</tr>
		<tr>
	<td>10</td><td><?php echo "$item10";?></td><td><?php echo "$qty10";?></td><td><?php echo "$cost10";?></td><td><?php echo "$totalcost10";?></td>
	</tr>
		<tr>
	<td>11</td><td><?php echo "$item11";?></td><td><?php echo "$qty11";?></td><td><?php echo "$cost11";?></td><td><?php echo "$totalcost11";?></td>
	</tr>
		<tr>
	<td>12</td><td><?php echo "$item12";?></td><td><?php echo "$qty12";?></td><td><?php echo "$cost12";?></td><td><?php echo "$totalcost12";?></td>
	</tr>
		<tr>
	<th>Total Discount</th><td></td><td></td><td></td><th><?php echo "$ref2";?></th>
	</tr>
	<tr>
	<th>Total Cost</th><td></td><td></td><td></td><th><?php echo "$cost";?></th>
	</tr>
	</table><br>
	</table>
	</center>
	</section>
	
	
	
	
	
	 <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->
	
	    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    &copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Tupperware</a>. All Rights Reserved.
                </div>
                <div class="col-sm-8">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="portfolio.php">Our Products</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
						<li><a href="login.php">Login/Register</a></li>
												<li><a href="display.php">My Profile</a></li>
												<li><a href="checkout.php">Checkout</a></li>
												<li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
	
	
	
<?php
mysqli_query($con,"UPDATE cart SET item1='0', item2='0', item3='0', item4='0', item5='0', item6='0', item7='0', item8='0', item9='0', item10='0', item11='0', item12='0', cost='0' WHERE uname='".$uname."'");
mysqli_query($con,"UPDATE register SET ref='0' WHERE uname='".$uname."'");
mysqli_close($con);
}
else
{
header('Location: index.html');
}
?>