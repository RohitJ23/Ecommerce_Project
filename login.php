<?php
$fnameError ="";
$lnameError ="";
$email1Error ="";
$email2Error ="";
$unameError ="";
$numberError ="";
$pwd1Error ="";
$pwd2Error ="";
$addr1Error ="";
$addr2Error ="";
$pinError ="";
$cityError ="";
$stateError ="";
$countryError ="";
$Error1 ="";
$Error2 ="";
$Error3 ="";
$Error4 ="";
$msg1 ="";
$msg2 ="";
$msg3 ="";
$msg4 ="";
$refError ="";

if(isset($_POST['submit'])) 
{
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "tupperware";
$prefix = "";

$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect to database");
mysql_select_db($mysql_database,$con) or die("Could not select database");
	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$uname=$_POST['uname'];
$number=$_POST['number'];
$pwd1=$_POST['pwd1'];
$pwd2=$_POST['pwd2'];
$addr1=$_POST['addr1'];
$addr2=$_POST['addr2'];
$pin=$_POST['pin'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$ref=$_POST['ref'];

function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
// On submitting form below function will execute.
if(isset($_POST['submit']))
{
	if (empty($_POST["fname"])) 
	{
		$fnameError = "First Name is required.";
	} 
	else 
	{
		$fname = test_input($_POST["fname"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z]*$/",$fname)) 
			{
				$fnameError = "Only letters are allowed in First Name.";
			}
	}
	
	if (empty($_POST["lname"])) 
	{
		$lnameError = "Last Name is required.";
	} 
	else 
	{
		$lname = test_input($_POST["lname"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z]*$/",$lname)) 
			{
				$lnameError = "Only letters are allowed in Last Name.";
			}
	}
	
	if (empty($_POST["email1"])) 
	{
		$email1Error = "Email is required.";
	} 
	else 
	{
		$email1 = test_input($_POST["email1"]);
// check if e-mail address syntax is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email1)) 
		{
			$email1Error = "Email is invalid.";
		}
	}
	
	if (empty($_POST["email2"])) 
	{
		$email2Error = "Re-Entering Email is required.";
	} 
	else 
	{
		$email2 = test_input($_POST["email2"]);
// check if e-mail address syntax is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email2)) 
		{
			$email2Error = "Re-Entered Email is invalid.";
		}
	}
	
	if (empty($_POST["uname"])) 
	{
		$unameError = "Username is required.";
	} 
	else 
	{
		$uname = test_input($_POST["uname"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z0-9_ ]*$/",$uname)) 
			{
				$unameError = "Only alphanumeric characters, underscore and white spaces are allowed in Username.";
			}
	}
	
	if (empty($_POST["number"])) 
	{
		$numberError = "Contact Number is required.";
	} 
	else 
	{
		$number = test_input($_POST["number"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[0-9]*$/",$number)) 
			{
				$numberError = "Incorrect Contact Number.";
			}
	}
	
	if (empty($_POST["pwd1"])) 
	{
		$pwd1Error = "Password is required.";
	} 

	if (empty($_POST["pwd2"])) 
	{
		$pwd2Error = "Password confirmation is required.";
	} 

	if (empty($_POST["addr1"])) 
	{
		$addr1Error = "Address Line 1 is required.";
	} 

	if (empty($_POST["addr2"])) 
	{
		$addr2Error = "Address Line 2 is required.";
	} 
	
	if (empty($_POST["pin"])) 
	{
		$pinError = "Pin Code is required.";
	} 
	else 
	{
		$pin = test_input($_POST["pin"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[0-9]*$/",$pin)) 
			{
				$pinError = "Incorrect Pin Code.";
			}
	}
	
	if (empty($_POST["city"])) 
	{
		$cityError = "City Name is required.";
	} 
	else 
	{
		$city = test_input($_POST["city"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z]*$/",$city)) 
			{
				$cityError = "Incorrect City name.";
			}
	}
	
	if (empty($_POST["state"])) 
	{
		$stateError = "State/Province Name is required.";
	} 
	else 
	{
		$state = test_input($_POST["state"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z]*$/",$state)) 
			{
				$stateError = "Incorrect State/Province name.";
			}
	}
	
	if (empty($_POST["country"])) 
	{
		$countryError = "Country Name is required.";
	} 
	else 
	{
		$country = test_input($_POST["country"]);
// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z]*$/",$country)) 
			{
				$countryError = "Incorrect Country name.";
			}
	}
	
}

//php code ends here

$query3 = mysql_query("SELECT uname FROM register WHERE uname='".$ref."'");

if(mysql_num_rows($query3) == 0)
	{
		$refError = "Referrer Username is Incorrect.";
	}
else
{

if ($fnameError=="")
	if($lnameError=="")
		if($email1Error=="")
			if($email2Error=="")
				if($unameError=="")
					if($numberError=="")
						if($pwd1Error=="")
							if($pwd2Error=="")
								if($addr1Error=="")
									if($addr2Error=="")
										if($pinError=="")
											if($cityError=="")
												if($stateError=="")
													if($countryError=="")
													{

$query = mysql_query("SELECT uname FROM register WHERE uname='".$uname."'");

if (mysql_num_rows($query) > 0)
	{
		$Error4 = "Username already exists.";
	}
else
	{
		if($email1==$email2)
		{
			if($pwd1==$pwd2)
			{
				if(isset($_POST['agree']))
				{
					mysql_query("INSERT INTO register(fname,lname, email, uname, number, pwd, adr1, adr2, pin, city, state, country)VALUES('$fname', '$lname', '$email1','$uname','$number', '$pwd1', '$addr1', '$addr2', '$pin', '$city', '$state', '$country')");
					mysql_query("INSERT INTO cart(uname) VALUES ('$uname')");
					if(isset($ref))
					{
					$ref1=1;
					$ref2=0;
					$ref3=0;
					
					$query2=mysql_query("SELECT * FROM register WHERE uname='".$ref."'");
					
					while($row = mysql_fetch_array($query2))
					{
						$ref2 = $row['ref'];
					}
					
					$ref3 = $ref1 + $ref2;
					
					mysql_query("UPDATE register SET ref='$ref3' WHERE uname='".$ref."'");
					}

					$msg1 = "Registration Successful. ";

					$msg2 = "You can now Log In.";
				}
				
				else
				$Error1 = "Please accept the Terms & Conditions";
			}
			
			else
			$Error2 = "Passwords don't match.";
		}
		
		else
		$Error3 = "Email adresses don't match.";
	}
}
}
mysql_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login/Register | Tupperware</title>
	
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
                        <li><a href="index.html">Home</a></li>
                        <li ><a href="about-us.html" target="_blank">About Us</a></li>
                        <li><a href="portfolio.html">Our Products</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>  
						<li class="active"><a href="login.php">Login/Register</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
			
    </header><!--/header-->
	
	<section id="forms" class="container">
  <form role="form" name="login" method="post" action="login2.php">
    <div class="form-group col-sm-4">
		<h2>Existing User? Log In.</h2></br>
		<form class="form-group" >
      <input type="text" class="form-control-feedback col-sm-7" name="unamex" id="unamex" placeholder="Enter Username">
    </br></br>
      <input type="password" class="form-control-feedback col-sm-7" id="pwdx" name="pwdx" placeholder="Enter Password">
    </br></br>
      <label><input type="checkbox"> Remember me</label></br></br>
    <button type="submit" value="submit" name="submit" id="submit" class="btn btn-default">Submit</button> </br></br> <?php echo "$msg3"; echo "$msg4";?>
  </form>
  </div>
  </form>
  
  <div class="form-group col-sm-8">
  <h2> New User? Register.</h2></br>
  		<form class="form-group" name="register" method="post" action="">
	<div>
      <input type="text" class="form-control-feedback col-sm-5" id="fname" name="fname" placeholder="Enter First Name" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
	  <p class="col-sm-1"></p>
      <input type="text" class="form-control-feedback col-sm-5" id="lname" name="lname" placeholder="Enter Last Name" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : ''; ?>">
	</div>
	<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$fnameError" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$lnameError" ?> </p>
	</div>
	
	<div>	
      <input type="email" class="form-control-feedback col-sm-5" id="email1" name="email1" placeholder="Enter Email" value="<?php echo isset($_POST['email1']) ? $_POST['email1'] : ''; ?>">
	  <p class="col-sm-1"></p>
      <input type="email" class="form-control-feedback col-sm-5" id="email2" name="email2" placeholder="Confirm Email" value="<?php echo isset($_POST['email2']) ? $_POST['email2'] : ''; ?>">
	</div>
	<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$email1Error" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$email2Error" ?> </p>
	</div>
	
	<div>
      <input type="text" class="form-control-feedback col-sm-5" id="uname" name="uname" placeholder="Enter Desired Username" value="<?php echo isset($_POST['uname']) ? $_POST['uname'] : ''; ?>">
	  <p class="col-sm-1"></p>
	  <input type="numeric" class="form-control-feedback col-sm-5" id="number" name="number" placeholder="Enter Contact Number" value="<?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?>">
	</div>
	<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$unameError" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$numberError" ?> </p>
	</div>	
	
	<div>
      <input type="password" class="form-control-feedback col-sm-5" id="pwd1" name="pwd1" placeholder="Enter Password">
	  <p class="col-sm-1"></p>
      <input type="password" class="form-control-feedback col-sm-5" id="pwd2" name="pwd2" placeholder="Confirm Password">
	</div>
	<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$pwd1Error" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$pwd2Error" ?> </p>
	</div>	
	
	<div>
      <input type="text" class="form-control-feedback col-sm-11" id="addr1" name="addr1" placeholder="Address Line 1" value="<?php echo isset($_POST['addr1']) ? $_POST['addr1'] : ''; ?>">
	</div>
	<p class="form-control-feedback col-sm-11"><?php echo "$addr1Error"?> </p>
	<div>
      <input type="text" class="form-control-feedback col-sm-11" id="addr2" name="addr2" placeholder="Address Line 2" value="<?php echo isset($_POST['addr2']) ? $_POST['addr2'] : ''; ?>">
	</div>
	<p class="form-control-feedback col-sm-11"><?php echo "$addr2Error"?> </p>
	
	<div>
      <input type="numeric" class="form-control-feedback col-sm-5" id="pin" name="pin" placeholder="Pin Code" value="<?php echo isset($_POST['pin']) ? $_POST['pin'] : ''; ?>">
	  <p class="col-sm-1"></p>
      <input type="text" class="form-control-feedback col-sm-5" id="city" name="city" placeholder="City" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
	</div>
	<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$pinError" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$cityError" ?> </p>
	</div>		
	
	<div>
      <input type="text" class="form-control-feedback col-sm-5" id="state" name="state" placeholder="State" value="<?php echo isset($_POST['state']) ? $_POST['state'] : ''; ?>">
	  <p class="col-sm-1"></p>
      <input type="text" class="form-control-feedback col-sm-5" id="country" name="country" placeholder="Country" value="<?php echo isset($_POST['country']) ? $_POST['country'] : ''; ?>">
	</div>
	<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$stateError" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$countryError" ?> </p>
	</div>
<div>	
		<input class="col-sm-5" type="textbox" id="ref" name="ref" placeholder="Username of Refferer"/>
		<p class="col-sm-1"></p>
	<label class="col-sm-5"><input type="checkbox" value="1" id="agree" name="agree"> I Agree to Terms & Conditions</label><br><br>
	</div>
		<div>
	<p class="form-control-feedback col-sm-5"><?php echo "$refError" ?></p>
	  <p class="col-sm-1"></p>
    <p class="form-control-feedback col-sm-5"><?php echo "$Error1" ?> </p>
	</div>
	<div>
    <button type="submit" value="submit" name="submit" class="btn btn-default col-sm-11">Submit</button><br>
	<div class="col-sm-11">
	<center><h2><?php echo "$Error2"; echo "$Error3"; echo "$msg1"; echo "$msg2"; echo "$Error4";?></h2></center></br></br>
	</div>
</div>
  

	</form>

  </br>
  </div>
  </div>
  </br></br>
  
  <h2 style="text-align:center;"> Tupperware Terms & Conditions of Use</h2>
  <h4>Please read these Terms of Use carefully before using this Web site.</h4>
<p>By using this Web site, you agree to these Terms of Use. If you don't agree to these terms, we ask that you not use this Web site.</br>

Tupperware.com is operated by Tupperware.com, Inc. and its affiliates, including Tupperware Brands Corporation (referred to as "Tupperware Brands," "Tupperware Worldwide," "Tupperware," "we," "us," and "our",) and it's subsidiaries. Our affiliated My.Tupperware(SM) Web sites are operated jointly by Tupperware.com, Inc. and the associated Consultant, and include materials provided by the associated Consultant as well as by Tupperware.com, Inc. We reserve the right to modify, alter or otherwise update these Terms of Use at any time and you agree to be bound by such modifications, alterations or updates. You should visit this page from time to time to review the current terms.</p>

<h4>Restrictions on Use of Materials</h4>
<p>Except when noted on the Web site, you may download material for your own personal and non-commercial use, provided you:</br>

Keep all copyright and other proprietary notices on every copy you make.
Use the material in a manner consistent with these Terms of Use.
Understand that we aren't transferring ownership of the materials directly or by implication, nor are we granting any license or right to our trademarks, tradenames, or copyrights of any party.
Using any of our materials for a commercial purpose-without our express written consent-violates our copyright and other proprietary rights.</p>

<h4>Trademarks and Patents</h4>
<p>Dart Industries Inc., a subsidiary of Tupperware Brands Corporation, owns "Tupperware" and the other trademarks, service marks, tradenames, logos and patents for products appearing on this Web site. Using these trademarks or any other content, except as stated in these Terms of Use, is strictly prohibited. Certain aspects of Tupperware's website and services may be covered by U.S. Patent No. 6,594,641 which is owned by Reshare Commerce LLC and licensed to Tupperware.</p>

<h4>Submissions</h4>
<p>We're always pleased to receive your comments and suggestions about Tupperware® brand products, this Web site, and other services we provide.</br>

However, any information you provide through this Web site or in response to any content on this site (such as comments, suggestions, ideas, notes, drawings, concepts or other materials or information - "submissions") will be considered non-confidential, and our property.</br>

Tupperware Brands Corporation and its designees may use any submissions without restriction, and are granted without limitation, the worldwide, perpetual, royalty-free, irrevocable right to reproduce, modify, edit, publish, make derivative works from and sell and distribute such submissions in any and all forms and media, now or hereafter discovered, and for Tupperware Brands Corporation to license others to do the same.<br>

If we receive a submission that contains personally identifying information about the provider, such as their name, address and telephone number, our Privacy Policy will govern how we'll use or disclose this information. You might want to refer to our Privacy Policy for further information.</p>

<h4>Reporting Abuse</h4>
<p>We, and our Consultants do not wish to infringe on your copyrights, trademarks, or other property. If you would like to report an infringement or other abuse.</p>

<h4>eGift Certificates</h4>
<p>eGift Certificates must be redeemed through our web site, http://www.tupperware.com, toward the purchase of products listed in Tupperware.com's online catalog and sold by Tupperware.com. They cannot be redeemed at any other web site operated by Tupperware.com, its affiliates, or third-party merchants accessible from our site. In addition, eGift Certificates are not redeemable at Tupperware parties, Mall Showcases, or other retail locations. eGift Certificates are not redeemable for cash and cannot be returned for a cash refund. Any unused balance will be placed in the recipient's eGift Certificate account. If your order exceeds the amount of your eGift Certificate, you must pay for the balance with a credit card. eGift Certificate cash value is 1/10 of one cent. eGift Certificates and their use on our web site are subject to our general Terms of Use. Tupperware.com reserves the right to change these terms and conditions from time to time in its discretion. Purchased eGift Certificates and unused portions of these eGift Certificates expire five years from the date of issue.* We are not responsible for lost or stolen eGift Certificates.</br>

*Does not apply in California; applies in New Hampshire only for gift certificates over $100. Expiration date does not apply in any other states where prohibited by law.</p>

<h4>TUPPERWARE.COM MAKES NO WARRANTIES, EXPRESS OR IMPLIED, WITH RESPECT TO EGIFT CERTIFICATES, INCLUDING WITHOUT LIMITATION, ANY EXPRESS OR IMPLIED WARRANTY OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. IN THE EVENT AN EGIFT CERTIFICATE CODE IS NON-FUNCTIONAL, YOUR SOLE REMEDY, AND OUR SOLE LIABILITY, SHALL BE THE REPLACEMENT OF SUCH EGIFT CERTIFICATE. CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS.</h4>

<h4>Disclaimer</h4>
<p>This Web site is provided “as is” and without express or implied warranties of any kind, including warranties of title or implied warranties of merchantability or fitness for any particular purpose. We don’t represent or warrant that our Web site will be available on a timely basis, uninterrupted, or error-free. In no event will we be liable for any damage or cause of any kind based upon or resulting from any use or inability to use this Web site.</p>

<h4>Linked sites</h4>
<p>We aren't affiliated or associated with sponsors or producers of Web sites that link to or from our Web site (other than the My.Tupperware (SM) Web sites). We don't endorse or represent the companies, products, or content to which we link. We reserve the right to terminate any link or linking program at any time.</p>

<h4>Copyright Notice for Linked Sites</h4>
<p>HierMenus, by Peter Belesis. v4.0.3 010123</br>
Copyright © 2001 Peter Belesis. All Rights Reserved.</br>
Originally published and documented at http://www.dhtmlab.com/ You may use this code on a public Web site only if this entire copyright notice appears unchanged and you publicly display a link to http://www.dhtmlab.com/.</br>
Contact pbel@meteor.com for all other uses.</p>

<h4>In Conclusion</h4>
<p>Unless otherwise specified, the Materials on this site are presented solely for the purpose of entertainment and promoting products available in the United States. The Web site Tupperware.com is controlled and operated by Tupperware.com, Inc. from its offices within the State of Florida. Tupperware makes no representation that Materials on this site are appropriate or available for use in other locations. Those who choose to access this site from other locations do so on their own initiative and are responsible for compliance with local laws, if and to the extent local laws are applicable.</p>

<h4>Effective Date</h4>

<p>November 12, 2001</p>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="portfolio.html">Our Products</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
						<li><a href="login.php">Login/Register</a></li>
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