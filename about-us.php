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
    <title>About Us | Tupperware</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">

</head><!--/head-->

<body>

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
                        <li class="active"><a href="about-us.php">About Us</a></li>
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

    <section style="align:center;" id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2 style="font-size:40px;">About Us</h2>
				<img src="images/about-us.jpg" style="align:center;">
				<h3 style="text-align:left;">World Class Brands</h3>
<p style="text-align:justify; text-justify:inter-word;">For over 60 years, Tupperware has been creating a niche for itself in the business world, making a difference to the lives of millions through its innovative storage products and extremely attractive business opportunity. In recent years, Tupperware has made tremendous inroads into becoming a true global entity. In 2000, Tupperware acquired Dallas-based BeautiControl, followed by the acquisition of the Sara Lee Corporation’s direct selling business in 2000. These advancements brought an increasing product diversity to brand Tupperware. In order to reflect this diversity, Tupperware Corporation changed its name to Tupperware Brands Corporation in 2005.</br>

These acquisitions were in line with the Company’s corporate strategy to add premium consumable items to their product category mix. They also boosted the Company's global portfolio to eight champion brands and changed the Tupperware Brands Corporation into a multi-brand, multi-category, direct sales conglomerate with a worldwide sales force of over 2 million.</br>

Despite the success and astounding growth of Tupperware Brands, the Company’s mission and passion to enlighten, educate and empower customers and their families tops the priority list.</p>

<h3 style="text-align:left;">Enlighten</h3>
<p style="text-align:justify; text-justify:inter-word;">To share insights & provide products and knowledge that makes life simpler and more enjoyable for families.</p>

<h3 style="text-align:left;">Educate</h3>
<p style="text-align:justify; text-justify:inter-word;">To provide smart, simple solutions that enable customers to save time, money and effort while leading active and healthy lives.</p>

<h3 style="text-align:left;">Empower</h3>
<p style="text-align:justify; text-justify:inter-word;">To better the lives of women by giving them the confidence to live with respect in the society and becoming independent.</p>

<p style="text-align:justify; text-justify:inter-word;">To date, the Tupperware Brands portfolio of direct selling companies incorporates Tupperware, BeautiControl, NaturCare, Nutrimetics, Fuller Cosmetics, Nuvo, Avroy Shlain and Swissgarde - each with their own product lines, sales methods and structures for the markets.</p>
			</div>
			
<div>
<ul>
<center><h2 style="font-size:40px;">FREQUENTLY ASKED QUESTIONS</h2><br></center>
<center><h2>About Guarentee</h2></center>
<li style="font-weight:bold;">Are Tupperware products covered under Lifetime Guarantee?</li>
<p>Yes, Tupperware products come with a life time guarantee .Most Tupperware products are guaranteed to perform under normal domestic use for the life time of the product.<br>
The only products not covered by the life time guarantee are those few products which come under Quality guarantee with the “Q” symbol- these products however are still guaranteed to be free of manufacturing defects. Current products under this category are Vegetable Peeler, Ice cream Scoop, Kit bags, water dispenser tap etc.</p>
<li style="font-weight:bold;">What is covered by Lifetime Guarantee?</li>
<p>Manufacturing quality issues like warping, stress cracking, peeling, splitting and any specific functional issues in normal non- commercial use are covered by life time guarantee. Melamine products are covered for a guarantee of 7 years only.</p>
<li style="font-weight:bold;">What is not covered by Lifetime Guarantee?</li>
<p>Product handling and usage issues like scratching , staining , melting on exposure to hot plate or excess heat burning , blistering in microwave ,impact damage by knocking /hitting by hard objects , rusting ,insect bite/dust mite.<br>
Breakage of products due to mishandling or accidental drop on the floor, decorative printing, scale printing, bags, straps, pouches etc are not covered by life time guarantee.</p><br>
<center><h2>About Replacement/Cancellation</h2></center>
<li style="font-weight:bold;">What is the replacement policy on account of the non-availability of any product or a specific colour?</li>
<p>If due to non – availability, particular  c colour of a part in the original product cannot be provided we will provide a matching colour. If we cannot find a matching colour, the customer will be requested to give back all the parts of the old product and have a new product of same design but in new colour.
If due to unavailability, a replacement product cannot be provided Tupperware will gladly provide a comparable product in volume or a full credit to the value of the last recommended retail price of that product.</p>
<li style="font-weight:bold;">What is the cancellation policy on account of the non-availability of any product or a specific colour?</li>
<p>As already mentioned earlier, Wish List is not equivalent to an order. In case you to cancel your Wish List at any stage, you can contact the  Authorised  Tupperware Representative whose details have been forwarded to you through SMS and inform them that you wish to cancel your Wish List.</p>
<li style="font-weight:bold;">I need to return an item, how do I arrange for a pick-up?</li>
<p>Returns are easy. Contact us to initiate a return. You will receive a call explaining the process, once you have initiated a return. <br>
Wherever possible Tupperware Logistics will facilitate the pick-up of the item. In case the pick-up cannot be arranged through Tupperware, you can return the item through a third-party courier service. Return fees are borne by the Seller.</p><br>
<center><h2>About Orders/Account</h2></center>
<li style="font-weight:bold;">What is 'My Account'? How do I update my information?</li>
<p>It is easy to update your Tupperware account and view your orders any time through 'My Account'.<br>
'My Account' allow Tupperware you complete control over your transactions on Tupperware, manage/edit your personal data like address, phone numbers, email ids, change your password, track the status of your orders etc.</p>
<li style="font-weight:bold;">Can I order a product that is 'Out of Stock'?</li>
<p>Unfortunately, products listed as 'Out of Stock' are not available for sale. Please use the 'Notify Me' feature to be informed of the product's availability with sellers on Tupperware.</p>
<li style="font-weight:bold;">Is it necessary to have an account to shop on Tupperware?</li>
<p>You can shop on Tupperware by providing just your email ID. While it is not necessary to have an account to shop for and purchase items, it is recommended that you create one. By creating your own Tupperware account, you can enjoy a personalised shopping experience, including recommendations, quicker checkout and a public Wishlist. You will also be able to rate/review products and sellers.</p><br>
<center><h2>About Payments</h2></center>
 <li style="font-weight:bold;">How do I pay for a Tupperware purchase? </li>
 <p>Tupperware offers you multiple payment methods. Whatever your online mode of payment, you can rest assured that  Tupperware's trusted payment gateway partners use secure encryption technology to keep your transaction details confidential at all times. <br>
You may use Internet Banking, E-Gift Voucher (eGV), Cash on Delivery and Wallet to make your purchase.<br> 
 Tupperware also accepts payments made using Visa, MasterCard, Maestro and American Express credit/debit cards in India and 21 other countries. </p>
<li style="font-weight:bold;">What is Cash on Delivery? </li>
<p>If you are not comfortable making an online payment on Tupperware.com, you can opt for the Cash on Delivery (C-o-D) payment method instead. With C-o-D you can pay in cash at the time of actual delivery of the product at your doorstep, without requiring you to make any advance payment online.<br>
The maximum order value for a Cash on Delivery (C-o-D) payment is ?50,000. It is strictly a cash-only payment method. E-Gift Vouchers or store credit cannot be used for C-o-D orders. Foreign currency cannot be used to make a C-o-D payment. Only Indian Rupees accepted.</p>
<li style="font-weight:bold;">How do I pay using a credit/debit card? </li>
<p>We accept payments made by credit/debit cards issued in India and 21 other countries.<br>
Credit cards<br>
We accept payments made using Visa, MasterCard and American Express credit cards.<br>
To pay using your credit card at checkout, you will need your card number, expiry date, three-digit CVV number (found on the backside of your card). After entering these details, you will be redirected to the bank's page for entering the online 3D Secure password.<br>
Debit cards<br>
We accept payments made using Visa, MasterCard and Maestro debit cards.<br>
To pay using your debit card at checkout, you will need your card number, expiry date (optional for Maestro cards), three-digit CVV number (optional for Maestro cards). You will then be redirected to your bank's secure page for entering your online password (issued by your bank) to complete the payment.</p>
<li style="font-weight:bold;">Is it safe to use my credit/debit card on Tupperware?</li>
<p>Your online transaction on Tupperware is secure with the highest levels of transaction security currently available on the Internet.  Tupperware uses 256-bit encryption technology to protect your card information while securely transmitting it to the respective banks for payment processing.<br>
All credit card and debit card payments on Tupperware are processed through secure and trusted payment gateways managed by leading banks. Banks now use the 3D Secure password service for online transactions, providing an additional layer of security through identity verification.</p><br>
<center><h2>About Shipping</h2></center>
<li style="font-weight:bold;">What are the delivery charges? </li>
<p>Delivery charge varies with each Seller.<br>
Sellers incur relatively higher shipping costs on low value items. In such cases, charging a nominal delivery charge helps them offset logistics costs. The delivery charge may be waived off by some Sellers, if you shop with them for a minimum predefined value. </p>
<li style="font-weight:bold;">What is the estimated delivery time? </li>
<p>Sellers generally procure and ship the items within the time specified on the product page. Business days exclude public holidays and Sundays.</p>
<li style="font-weight:bold;">Why does the delivery date not correspond to the delivery timeline mentioned? </li>
<p>It is possible that the Seller or our courier partners have a holiday between your order date and the estimated delivery date based on the timelines shown on the product page. In this case, we add a day to the estimated date. Some courier partners and Sellers do not work on Sundays and this is factored in to the delivery dates. </p>
<li style="font-weight:bold;">Seller does not/cannot ship to my area. Why? </li>
<p>Whether your location can be serviced or not depends on if the Seller ships to your location, legal restrictions, if any, on shipping particular products to your location, the availability of reliable courier partners in your location.<br>
At times Sellers prefer not to ship to certain locations. This is entirely at their discretion.</p>
<li style="font-weight:bold;">Does Tupperware deliver internationally?</li>
<p>As of now, Tupperware doesn't deliver items internationally. </p><br>
<center><h2>About Courier</h2></center>
<li style="font-weight:bold;">How does the delivery process work? </li>
<p>All deliveries are scheduled through reputed couriers. You will be informed when the seller ships your consignment and will also be provided a tracking number.<br>
Sellers generally ship through Tupperware Logistics wherever possible or will use other reputed courier service providers. During checkout you will be prompted to provide your location's pin code in order to ensure that the seller does indeed deliver to you.<br>
All electronic items are insured for theft and damages during transit.</p>
<li style="font-weight:bold;">How are items packaged? </li>
<p>Products sold by seller TupperwareRetail are shipped in packages with waterproof plastic wrap. Fragile items like electronics are safely secured with bubble wrap. Other sellers also follow standard packing procedure. Sellers are rated on packaging quality and affects overall seller rating.</p>
<li style="font-weight:bold;">How can I track the delivery of my order? </li>
<p>All items sold by sellers on Tupperware are delivered through reputed courier partners including Tupperware Logistics - Tupperware's preferred delivery partner. You will be provided a Tracking ID for your order by the respective courier service provider. Order IDs contain tracking information from Tupperware Logistics.</p>
</ul>
</div>
			

			<!-- our-team -->

    </section><!--/about-us-->
	
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
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
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
header('Location: about-us.html');
}
?>