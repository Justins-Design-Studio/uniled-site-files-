<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Order Now</title>
    <link rel="icon" type="image/png" href="Images/favicon.png">
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
     <section id="orderPage">
          <div id="orderForm">
                <h3>Order Now!</h3>
                <p>Place your order  and we will contact you.</p>
                <p>Price: R265-00 incl VAT(Applicable to South Africa)</p>
                <form action="order_mailscript.php" method="post" target="_blank">
                      <fieldset>
                          <legend>Personal Information</legend>
                          <label>Surname:</label>
                          <input class="field" type="text" name="Surname" required id="Surname"><br>
                          <label>First Name:</label>
                          <input class="field" type="text" name="FirstName" required id="FirstName"><br>
                          <label>Email:</label>
                          <input class="field" type="email" name="Email" required id="Email"><br>
                          <label>Tel:</label>
                          <input class="field" type="text" name="Tel" id="Tel"><br>
                          <label>Cell:</label>
                          <input class="field" type="text" name="Cell" id="Cell"><br>
                      </fieldset>
                      <fieldset>
                          <legend>Quantity</legend>
                          <label>Bayonet:</label>
                          <input class="field" type="number" name="Bayonet" id="Bayonet"><br>
                          <label>Screw:</label>
                          <input class="field" type="number" name="Screw" id="Screw">
                      </fieldset>
                      <input class="submitButton" type="submit" name="send" value="Submit">
                      <input class="submitButton" type="reset" name="reset" value="Reset">
                </form>
          </div>
          
          <div id="orderImg">
              <img src="Images/bulbs.jpg" alt="Emergency LED Bulb" />
          </div>
    
    </section>
   
  </body>
</html>
