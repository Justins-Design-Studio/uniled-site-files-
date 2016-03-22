<?php

$to = 'sales@uniledsa.co.za';
$subject = 'New Order From Uniled Website';

$surName = $_POST['Surname'];
$firstName = $_POST['FirstName'];
$email = $_POST['Email'];
$tel = $_POST['Tel'];
$cell = $_POST['Cell'];
$bayonet = $_POST['Bayonet'];
$screw = $_POST['Screw'];

$message = <<<EMAIL

First Name: $firstName
Surname: $surName
Email: $email
Tel: $tel
Cell: $cell
Bayonet Quantity: $bayonet
Screw Quantity: $screw


EMAIL;

mail($to, $subject, $message, "From:".$email);
$thankYouOrder = <<<HTML

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
    
    <h1>Thank you for your Order!</h1>
    <p>We will contact you shortly</p>
    
    </div>
    </body>
    </html>

HTML;

echo $thankYouOrder;

?>