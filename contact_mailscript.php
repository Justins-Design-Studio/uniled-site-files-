<?php

$to='admin@uniledsa.co.za';
$subject='New Message From Uniled Contact Form';

$surname=$POST_['surname'];
$firstname=$_POST['firstName'];
$email=$_POST['email'];
$city=$_POST['city'];
$tel=$_POST['tel'];
$cell=$_POST['cell'];
$demoyes=$_POST['demoYes'];
$demono=$_POST['demoNo'];
$comment=$_POST['comment'];

$message = <<<EMAIL

Firstname: $firstname
Surname: $surname
Email: $email
City/Town: $city
Tel: $tel
Cell: $cell
Demonstration:
 $demoyes
 $demono
Message: $comment

EMAIL;
mail($to, $subject, $message, "From:".$email);

$thankYouContact = <<<HTML

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Emergency LED Bulb</title>
    <link rel="favicon" type="image/png" href="Images/favicon.png">
    <link href="CSS/stylesheet.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="js/script.js"></script>
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
  </head>

  <body>
    <header id="main"><!-- This is the header for the whole site -->
      <div class="logoWrap">
        <a href ="index.html">
          <img src="Images/UNI-LED-logo South Africa.svg" alt="Uniled South Africa" />
        </a> 
      </div>
      <nav>
  	    <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="product.html">Product</a></li>
          <li><a href="order.php">Order</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div class="thankYou">
    
    <h1>Thank you for your Message!</h1>
    <p>We will contact you shortly</p>
    
    </div>
    </body>
    </html>

HTML;

echo $thankYouContact;




?>