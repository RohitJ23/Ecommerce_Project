 <?php
session_start();
if(isset($_SESSION["memb"]))
{
$user='root';
$pass='';
$db='tupperware';
$con = new mysqli('localhost',$user,$pass,$db) or die("sorry");
$name=$_SESSION["fname"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Tupperware</title>
	
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
 
 <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Select Payment Method</h2>
                <p class="lead"></p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="gateway1.php"><i class="fa fa-credit-card"></i></a>
                            <h2>Credit/Debit Card</h2>
                            <h3>Pay with any major Credit/Debit Card.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="gateway2.php"><i class="fa fa-paypal"></i></a>
                            <h2>Paypal</h2>
                            <h3>Pay with the most trusted gateway - PAYPAL.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                           <a href="gateway3.php"> <i class="fa fa-rupee"></i></a>
                            <h2>Cash-on-Delivery (C.o.D.)</h2>
                            <h3>Products of all shapes & sizes</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
	
	<section>
	<div class="col-sm-1"></div>
	<div class="col-sm-4">
	<p style="font-size:20px;">Please Enter Your Credit/Debit Card Details.</p>
	<form name="card" method="post" action="checkoutprint1.php">
	<table cellpadding=10px>
	<tr>
	<th>Select Card Type</th>
	<td>
	<select>
	<option value="selectcardtype">Select Card Type</option>
  <option value="visa">Visa</option>
  <option value="mastercard">Mastercard</option>
  <option value="americanexpress">American Express</option>
  </select>
  </td>
  </tr>
  <tr>
  <th>Card Number &nbsp </th> <td> <input type="textbox" value="" id="cardno" name="cardno" placeholder="Enter the Card Number"></td>
  </tr>
  <tr>
  <th>Name of the Cardholder &nbsp </th> <td> <input type="textbox" value="" id="cardno" name="cardno" placeholder="Enter the Cardholder's Code"></td>
  </tr>
    <tr>
  <th>Expiry Date &nbsp </th> <td> <input type="text" value="" id="cardno" name="cardno" placeholder="DD-MM-YYYY"></td>
  </tr>
    <tr>
  <th>CVV/CVC Code &nbsp </th> <td> <input type="number" value="" id="cardno" name="cardno" placeholder="Enter the Card Security Code"></td>
  </tr>
  <th><button type="submit" id="cardsubmit" name="cardsubmit">Pay Now</button>
	</form>
	</table>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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