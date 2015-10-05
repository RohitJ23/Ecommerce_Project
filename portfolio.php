<?php
session_start();
if(isset($_SESSION["memb"]))
{
$user='root';
$pass='';
$db='tupperware';
$con = new mysqli('localhost',$user,$pass,$db) or die("sorry");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Products | Tupperware</title>
	
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
                        <li class="active"><a href="portfolio.php">Our Products</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li> 
																		<li><a href="display.php">My Profile</a></li>
																		<li><a href="checkout.php">Checkout</a></li>
																		<li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
			
    </header><!--/header-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Tupperware Products</h2>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Products</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Bottles</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Kitchenware</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Lunchboxes</a></li>
            </ul><!--/#portfolio-filter-->
<div>
            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item1.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
								    <h3><a href="#">Tupperware Aquasafe Water Bottle Set</a></h3>
                                    <p>A versatile and virtually liquid-tight bottle that makes storing cold beverages at home or outdoors easy.</p>
                                    <a class="preview" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 200 Only/-
									<form name="item1" method="post" action="buy1.php">
									<input type="number" placeholder="Quantity" id="qty1" name="qty1"/>
									<button type="submit" name="buy1" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Classic Lunch Box with Bag</a></h3>
                                    <p>Classic round seal is air tight as well as liquid tight. </br>
Sheer base helps in identifying contents easily.</p>
                                    <a class="preview" href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 390 Only/-
									<form name="item2" method="post" action="buy2.php">
									<input type="number" placeholder="Quantity" id="qty2" name="qty2"/>
									<button type="submit" name="buy2" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item3.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Best Lunch Set</a></h3>
                                    <p>Best lunch bag - smart spacious lunch kit; can carry an additional spoon, napkin or any other important items.</p>
                                    <a class="preview" href="images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 250 Only/-
																		<form name="item3" method="post" action="buy3.php">
									<input type="number" placeholder="Quantity" id="qty3" name="qty3"/>
									<button type="submit" name="buy3" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item4.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Xtreme Set</a></h3>
                                    <p>Bottle and Box - Perfect for travellers.</p>
                                    <a class="preview" href="images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 280 Only/-
																		<form name="item4" method="post" action="buy4.php">
									<input type="number" placeholder="Quantity" id="qty4" name="qty4"/>
									<button type="submit" name="buy4" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item--></br></br>
					
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Executive Lunch Set</a></h3>
                                    <p>Classic round liquid-tight seal prevents spillage of curries.</br>
Four bowls allow you to pack a complete lunch.</p>
                                    <a class="preview" href="images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 450 Only/-
																		<form name="item5" method="post" action="buy5.php">
									<input type="number" placeholder="Quantity" id="qty5" name="qty5"/>
									<button type="submit" name="buy5" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item6.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Classic Slim Lunch Box</a></h3>
                                    <p>Extra slim size makes it easy to carry and to fit into a briefcase or school bag.</p>
                                    <a class="preview" href="images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 350 Only/-
																		<form name="item6" method="post" action="buy6.php">
									<input type="number" placeholder="Quantity" id="qty6" name="qty6"/>
									<button type="submit" name="buy6" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item7.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">TUPPERWARE SMIDGET SET</a></h3>
                                    <p>EASY TO CARRY IN A BAG WHEN ON THE GO.</br>
STACKABLE, ENSURING NO WASTAGE OF SPACE.</p>
                                    <a class="preview" href="images/portfolio/full/item7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 200 Only/-
																		<form name="item7" method="post" action="buy7.php">
									<input type="number" placeholder="Quantity" id="qty7" name="qty7"/>
									<button type="submit" name="buy7" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item8.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Goody Box Set</a></h3>
                                    <p>Stylishly designed containers.</br>
Air and watertight.</br>
Colorful and elegant.</p>
                                    <a class="preview" href="images/portfolio/full/item8.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 180 Only/-
																		<form name="item8" method="post" action="buy8.php">
									<input type="number" placeholder="Quantity" id="qty8" name="qty8"/>
									<button type="submit" name="buy8" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item--></br></br>
					
					                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item9.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Large Handy Bowl Set</a></h3>
                                    <p>Appropriate round shape makes it easy to carry your parantha/achar or roti with sabzi and fits into your purse.</p>
                                    <a class="preview" href="images/portfolio/full/item9.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 250 Only/-
																		<form name="item9" method="post" action="buy9.php">
									<input type="number" placeholder="Quantity" id="qty9" name="qty9"/>
									<button type="submit" name="buy9" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
					                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item10.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Medium Super Storer</a></h3>
                                    <p>It has textured surface making it non slippery.</br>
It has a classic round seal thereby making it airtight and liquid tight.</p>
                                    <a class="preview" href="images/portfolio/full/item10.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 270 Only/-
																		<form name="item10" method="post" action="buy10.php">
									<input type="number" placeholder="Quantity" id="qty10" name="qty10"/>
									<button type="submit" name="buy10" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
					                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item11.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Midi Magic Flow Container</a></h3>
                                    <p>Special seal with a slanted spout that let's your pour without dripping and ensures an even flow from the containers.</p>
                                    <a class="preview" href="images/portfolio/full/item11.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 410 Only/-
																		<form name="item11" method="post" action="buy11.php">
									<input type="number" placeholder="Quantity" id="qty11" name="qty11"/>
									<button type="submit" name="buy11" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
					                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item12.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tupperware Modular Mate 4 Square Container</a></h3>
                                    <p>Tabs for easy opening.</br>
Easily stackable to maximize storage.</p>
                                    <a class="preview" href="images/portfolio/full/item12.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a> &nbsp For Rs. 330 Only/-
																		<form name="item12" method="post" action="buy12.php">
									<input type="number" placeholder="Quantity" id="qty12" name="qty12"/>
									<button type="submit" name="buy12" value="Buy" id="submit">Buy</button>
									</form>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
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
header('Location: portfolio.html');
}
?>