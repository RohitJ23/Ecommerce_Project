<?php

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

function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//php code ends here
echo "$fnameError";
echo "</br>";
echo "$lnameError";
echo "</br>";
echo "$email1Error";
echo "</br>";
echo "$email2Error";
echo "</br>";
echo "$unameError";
echo "</br>";
echo "$numberError";
echo "</br>";
echo "$pwd1Error";
echo "</br>";
echo "$pwd2Error";
echo "</br>";
echo "$addr1Error";
echo "</br>";
echo "$addr2Error";
echo "</br>";
echo "$pinError";
echo "</br>";
echo "$cityError";
echo "</br>";
echo "$stateError";
echo "</br>";
echo "$countryError";
echo "</br>";

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
		echo "Username already exists";
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

					echo "Registration Successful. ";

					echo "Login Here".'<a href="http://localhost/ecom/login.html">'." Login"."</a>";
				}
				
				else
				echo "Accept the Terms & Conditions";
			}
			
			else
			echo "password and confirm password fields must match!";
		}
		
		else
		echo "email ids dont match!!";
	}
}
	
mysql_close($con);
?>