<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
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
    
    <section id="contactPage">
          <div id="contactForm">
                <h3>Contact Us Today!</h3>
                <form action="contact_mailscript.php" method="post">
                  <label>Surname:</label>
                  <input class="field" type="text" name="surname" required><br>
                  <label>First Name:</label>
                  <input class="field" type="text" name="firstName" required><br>
                  <label>Email:</label>
                  <input class="field" type="email" name="email" required><br>
                  <label>City/Town:</label>
                  <input class="field" type="text" name="city"><br>
                  <label>Tel:</label>
                  <input class="field" type="text" name="tel"><br>
                  <label>Cell:</label>
                  <input class="field" type="text" name="cell"><br>
                  <fieldset>
                  <legend>Would you like a Demo?</legend>
                  <label>Yes</label>
                  <input type="checkbox" name="demoYes"  value="Yes"><br>
                  </fieldset>
                  <label>Comment:</label>
                  <textarea type="textarea" name="comment" rows="10">
                  </textarea><br>
                  
                  <input class="submitButton" type="submit" value="Submit">
                  <input class="submitButton" type="reset" value="Reset">
                
                
                </form>
          </div>
          <div id="contactInfo">
               <h3>Contact Information</h3>
               <p>Tel: <a href="tel:0218228454">021 822 8454</a></p>
               <p>Mobile: <a href="tel:0845889901">084 588 9901</a></p>
               <p>Email: <a href="mailto:admin@uniledsa.co.za">admin@uniledsa.co.za</a></p>
          </div>
    </section>
   
  </body>
</html>
