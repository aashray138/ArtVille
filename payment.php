<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Payment </title>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/3.4.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v1/"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">

</head>

<body>
    <div class = "w3-center">
        <a href ="index.php"> <img src = "images/finallogo.png"> </a>
   <form>
    <div class="form-container">
      <div class="personal-information">
        <h1>Payment Information</h1>
      </div> <!-- end of personal-information -->
           
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
          <input id="column-right" type="text" name="last-name" placeholder="Surname"/>
          <input id="input-field" type="text" name="number" placeholder="Card Number"/>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="cvc" placeholder="CCV"/>
         
          <div class="card-wrapper"></div>
      
          <input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Streed Address"/>
          <input id="column-left" type="text" name="city" required="required" autocomplete="off" maxlength="20" placeholder="City"/>
          <input id="column-right" type="text" name="zipcode" required="required" autocomplete="off" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="input-field" type="email" name="email" required="required" autocomplete="off" maxlength="40" placeholder="Email"/>
          <a href = "index.php"> <input id="input-button" type="submit" value="Submit"/> </a>
        </div>
    </form>

        <h2> SECURE WEBPAGE FOR PAYMENT SUBMISSIONS </h2>
    </div>
     


</body>
</html>