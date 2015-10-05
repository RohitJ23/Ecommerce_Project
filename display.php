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
						<li class="active"><a href="display.php">My Profile</a></li>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
			
    </header><!--/header-->
	<section>
	<center><h2 style="font-size:40px;"> Your Profile Information</h2></br>
	<table border=1 cellpadding=10px>
	<tr>
	<th> Membership No. </th><td> <?php echo "$memb";?></td>
	</tr>
	<tr>
	<th> First Name </th><td> <?php echo "$fname";?></td>
	</tr>
	<tr>
	<th> Last Name </th><td> <?php echo "$lname";?></td>
	</tr>
	<tr>
	<th> Email Address </th><td> <?php echo "$email";?></td>
	</tr>
	<tr>
	<th> Username </th><td> <?php echo "$uname";?></td>
	</tr>
	<tr>
	<th> Contact No. </th><td> <?php echo "$number";?></td>
	</tr>
	<tr>
	<th> Address Line 1 </th><td> <?php echo "$adr1";?></td>
	</tr>
	<tr>
	<th> Address Line 2 </th><td> <?php echo "$adr2";?></td>
	</tr>
	<tr>
	<th> PIN Code </th><td> <?php echo "$pin";?></td>
	</tr>
	<tr>
	<th> City </th><td> <?php echo "$city";?></td>
	</tr>
	<tr>
	<th> State </th><td> <?php echo "$state";?></td>
	</tr>
	<tr>
	<th> Country </th><td> <?php echo "$country";?></td>
	</tr>
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
mysqli_close($con);
}
else
{
header('Location: index.html');
}
?>