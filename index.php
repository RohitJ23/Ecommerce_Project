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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li><a href="portfolio.php">Our Products</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>  
						<li><a href="display.php">My Profile</a></li>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
			
    </header><!--/header-->
	
	<section class="no-margin">
	<center><h2><?php echo "Welcome $name";?></h2></center>
	</section>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="color:red; text-shadow:5px 5px black; font-size:80px;">Special Season Offer!</h1>
                                    <h1 class="animation animated-item-2" style="color:red; text-shadow:3px 3px black; font-size:60px;">30% Discount on all Tupperware Bottles.</h1>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="color:red; text-shadow:5px 5px black; font-size:80px;">Buy Back Offer!</h1>
                                    <h1 class="animation animated-item-2" style="color:red; text-shadow:3px 3px black; font-size:60px;">Buy Back Any Tupperware Lunch Box and Get 50% Flat Off.</h1>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Features</h2>
                <p class="lead">We make THE BEST quality plastic products in the world. But, don't take our word for it...</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-globe"></i>
                            <h2>Safe & Clean</h2>
                            <h3>Made with safe and non toxic materials</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-smile-o"></i>
                            <h2>Long Lifetime</h2>
                            <h3>Tested and proven to be safe to use for a lifetime</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-check-circle"></i>
                            <h2>Various Multipurpose Products</h2>
                            <h3>Products of all shapes & sizes</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
	
							<div class="team">
				<div class="center wow fadeInDown">
				</br></br>	<h2>Our Vision</h2>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="media-body">
									<p>Developing innovative products with great design.</p>
								</div>
							</div><!--/.media -->
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="media-body">
									<p>Creating entertaining selling situations.</p>
								</div>
							</div><!--/.media -->
						</div>
					</div><!--/.col-lg-4 -->				
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">

								<div class="media-body">
									<p>Offering our sales force compelling earning and leadership development opportunities.</p>
								</div>
							</div><!--/.media -->
						</div>
				</div>	<!--/.row-->
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="media-body">
									<p>Employing dynamic direct selling fundamentals.</p>
								</div>
							</div><!--/.media -->
						</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
		<br><br><br>
								<div class="team">
				<div class="center wow fadeInDown">
					<h2>Our Mission</h2>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="media-body">
									<h4>We give all that you want</h4>
								</div>
							</div><!--/.media -->
							<ul>
							<li>Wide range of products to choose from <br></li>
							<li>Exclusive range of products like Air Tight, Bottles, Glasses etc.</li>
							</ul>
						</div>
					</div><!--/.col-lg-4 -->
					
					
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="media-body">
									<h4>Best Delivery Practices</h4>
								</div>
							</div><!--/.media -->
							<ul>
							<li>Dedicated workforce network & infrastructure to ensure on-time delivery</li>
							<li>Convenient options of delivery slots</li>
							</ul>
						</div>
					</div><!--/.col-lg-4 -->				
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">

								<div class="media-body">
									<h4>Payment Options</h4>
								</div>
							</div><!--/.media -->
							<ul>
							<li>We provide a variety of payment options for your convenience such as cash, credit card, net banking, cash on delivery and coupons.</li>
							<li>We also accept credit/debit cards at the time of delivery so that you can pay after assuming yourself of the quality of products.</li>
							<li>Store credit, if it exists, can be used for your next purchase</li>
							</ul>
						</div>
				</div>	<!--/.row-->
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="media-body">
									<h4>Best Quality Products</h4>
								</div>
							</div><!--/.media -->
							<ul>
							<li>Products made using Clean & Non-Toxic materials</li>
							<li>Only the best quality plastic used</li>
							</ul>
						</div>
				</div>	<!--/.row-->
			</div><!--section--></br></br>
		</div><!--/.container-->


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