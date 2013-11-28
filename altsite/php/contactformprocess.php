<?php
  
  require_once('recaptchalib.php');
  $privatekey = "6Lct_NUSAAAAAIhhx2EZYscE92xzgw2S0Bp7mORg";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
  }
    
  /*

  // I put this here to have stuff organize but blah. 

  //require('saveappsotdb.php');

  $privatekey = "6Lct_NUSAAAAAIhhx2EZYscE92xzgw2S0Bp7mORg";

  $resp = recaptcha_check_answer ($privatekey,

                                $_SERVER["REMOTE_ADDR"],

                                $_POST["recaptcha_challenge_field"],

                                $_POST["recaptcha_response_field"]);

  if ($resp->is_valid) {

    // What happens when the CAPTCHA was entered incorrectly

    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." ."(reCAPTCHA said: " . $resp->error . ")");
} 
*/
  
$emailFrom = "webmaster@team691.org";

$emailTo = "tarrows@team691.org, adolgin@team691.org";

$emailSubject = "Roboitcs Application";

$txt_name = strip_tags($_POST['txt_name']);

$num_bday = strip_tags($_POST['num_bday']);

$txt_email = strip_tags($_POST['txt_email']);

$num_phone = strip_tags($_POST['num_phone']);

$dp_school = strip_tags($_POST['dp_school']);

$dp_grade = strip_tags($_POST['dp_grade']);

$txt_parent_name = strip_tags($_POST['txt_parent_name']);

$txt_parent_email = strip_tags($_POST['txt_parent_email']);

/*$intrests = strip_tags($_POST['business'])		."<br>".

			strip_tags($_POST['cad']) 			."<br>". 

			strip_tags($_POST['electronics']) 	."<br>".

			strip_tags($_POST['mechanical']) 	."<br>".

			strip_tags($_POST['programming']) 	."<br>".

			strip_tags($_POST['spirit']);*/

$txt_why = strip_tags($_POST['txt_why']);



// eh, fix this format later...lets work on the MSQL table

$body = "
	
	This is an automated message. Please do not reply.
	
	Someone has expressed an intrests in joining our team. Their contact inforamtion that you have requested is below. This will not automaticlly add them to the email list. To add them to the email is please look below to see if they are a student/parent or mentor. Add them to the email list by going to http://team691.org/mailman/listinfo. The information below will be stored securely and can be requested at anytime by going to http://team691.org/..... This link is still under construction. 

	Name: $txt_name

	Birthday: $num_bday

	Email: $txt_email

	Phone Number: $num_phone

	School: $dp_school

	Grade: $dp_grade

	Parent Name: $txt_parent_name

	Parent Email: $txt_parent_email

	Why do they want to join?: $txt_why

";

// Comment the line below to have the other method

$success = mail($emailTo, $emailSubject, $body/*,  $emailFrom "From: $txt_email\r<br>Content-type: text/html\r<br>"*/);

//mail(to,subject,message,headers,parameters)

// go back fix the spelling i dont really care lol

//mail($webMaster, $emailSubject, "Someone finished an application",  "From: $email\r<br>Content-type: text/html\r<br>");

// just leave it here...its easier to read

/*

// Login Details

$Host = "localhost";

$Database = "stabby_hartburn";

$Username = "stabby_recordapp";

$Password = "admin";

// Create connection

$con = mysqli_connect($Host, $Username, $Password, $Database);



// Check connection

if (mysqli_connect_errno($con))

{

	echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

	

$sql = "INSERT INTO applicants (

name, 

email, 

phone_number, 

school, 

grade, 

interests, 

join

								)VALUES('

$name','

$email','

$phone_number','

$school','

$grade','

$txt_why')";



if (!mysqli_query($con, $sql))

{

	// Can do that for now this will work

	mail("mydrum9@gmail.com", "Robitcs Application", "Something went wrong with MSQL...check it out",  "From: $email\r<br>Content-type: text/html\r<br>");

	die("Sorry something went wrong...Please try again later");

	//die('Error: ' . mysqli_error($con));

}*/

?>

<html>
	<head>
		<title>Conformation Page</title>
        <META http-equiv="refresh" content="5;URL=/altsite/index.php"> 			
		<style type="text/css">		
			body {
					background-color: #444; /* You can edit this CSS to match your website*/
					font-family: Verdana, Arial, Helvetica, sans-serif;
					font-size: 20px;
					font-style: normal;
					line-height: normal;
					font-weight: normal;
					color: #fec001;
					text-decoration: none;
					padding-top: 200px;
					width: 800px;
					margin-left: 100px;
					margin-right: 100px;
				}		
		</style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
    <body>
		<div align="center">Your information has been successfully submitted and you will be will be contacted as soon as possible. You will return to the Hart District Robotics website in a few seconds.</div>
	</body>
</html>