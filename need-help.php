<?php 

require_once('vendor/autoload.php');





// Create the Transport
$transport = Swift_SmtpTransport::newInstance()
    ->setUsername('raymsantillan@gmail.com')
    ->setPassword('iamrhayken')
  ->setHost('smtp.gmail.com')
  ->setPort(465)
  ->setEncryption('ssl');


// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('support@hivbuddy.com' => 'HIV Buddy Support'))
  ->setTo(array('raymsantillan@gmail.com'))
  ->setBody('Here is the message itself');
  

// Send the message
 try{
       
        $response = $mailer->send($message);
    }catch(\Swift_TransportException $e){
        $response = $e->getMessage() ;
    }


 ?>


<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Need Help ?</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/semantic.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->
            <div class="ui main text container ">
            	<img class="ui centered  image" src="img/logo.png">
            	
            	<h3 class="header-title">Because we care about you !</h3>
                <p> Leave your contact details below and we will reach the right persons/organizations for you.   </p>
                <h4 class="secondary-header-title ">
                    LEAVE YOUR CONTACT DETAILS BELOW.
                </h4>


                <div class="ui icon message">
                  <i class="lock icon"></i>
                  <div class="content">
                    <div class="header">
                        Worried ? 
                  </div>
                    don't worry, we care about your identity
              </div>
          </div>

          <form class="ui form">
              <div class="field">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name">
            </div>
            <div class="field">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name">
            </div>
            <div class="field">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Your email where we can contact you">
            </div>
             <div class="field">
                <label>Phone number / Mobile Number</label>
                <input type="text" name="mobile_number" placeholder="Your contact number ">
            </div>
            <div class="field">
                <label>Your concerns</label>
                <textarea  name="msg" placeholder="Tell us your concerns and what are you experiencing now"></textarea>
            </div>
          <button class="ui button" type="submit">Submit</button>
      </form>

  </body>
  </html>

