<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel="stylesheet" href="css/order-style.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="Images/UNI-LED-logo South Africa.svg" alt="Uniled South Africa">
      </div>
    </header>
    <section class="form">
      <form action="order-form-mailscript.php" method="post" id="order-form">
        <h1>Order Form-Multi-Functional LED Bulb</h1>
        <input type="text" name="first-name" id="first-name" placeholder="First Name:">
        <input type="text" name="last-name" id="last-name" placeholder="Last Name:">
        <input type="email" name="user-email" id="user-email" placeholder="Email:">
        <input type="text" name="user-number" id="user-number" placeholder="Tel:">
        <fieldset>
          <legend>Order Quantity:</legend>
            <input class="field" type="number" name="Bayonet" id="Bayonet" placeholder="Bayonet">
            <input class="field" type="number" name="Screw" id="Screw" placeholder="Screw">
        </fieldset>
        <label for="del-date">Delivery Date:</label>
        <input type="date" name="del-date" id="del-date">
        <input type="submit" name="submit-button" id="submit-button">
      </form>
    </section>
  </body>
</html>