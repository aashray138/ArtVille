<?php
    session_start();
    require 'check_if_added.php';
?>

<?php
 require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AV's Artville </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href= "css/catalog.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <style type="text/css">
            #btn1 {background-color: #4CAF50;} 
            #btn2 {background-color: #008CBA;} 
            #btn3 {background-color: lightblue;}
            img:hover {
                
                border-width: 2px;
                border-color: grey;
                transition-delay: 0.2s ease-out;
            }
        </style>
</head>
<!-- JumboTron -->
<div class="jumbotron">
  <div class="container text-center">
  <h1>  <span class="rainbow"> BUY ARTWORK</span> </h1>
    <p>
    <button onclick= "w3.toggleShow('#expensive')" id="btn1" > Below < $1,000,000</button>
    <button onclick="w3.hide('#cheap')" id = "btn2"> Above > $1,000,00 </button> <br><br>
    <button onclick= "w3.show('#cheap')" id = "btn3"> Show All </button>

    </p>
      </div>
</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6" id="cheap" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art1.jpg" alt="Lady">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3> Lady in Paint </h3>
                                    <p>  Price: $400000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="expensive" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art2.jpg" alt="City">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>City </h3>
                                    <p>Price: $ 4320000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id ="cheap" class="city"> 
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art3.jpg" alt="Lips">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>Defined Lips</h3>
                                    <p>Price: $345672.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id ="expensive" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art4.jpg" alt="Abstract">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>Abstract Oil Painting</h3>
                                    <p>Price: $431223898.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6" id="cheap" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art5.jpg" alt="Variety ">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>Variety </h3>
                                    <p>Price: $237635.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="cheap" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art6.jpg" alt="Art6">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>Painting #6</h3>
                                    <p>Price: $345621.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="expensive" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art7.jpg" alt="Art7">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>Painting #7</h3>
                                    <p>Price: $2342212.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id ="expensive" class="city">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="images/art8.jpg" alt="Art8">
                            </a>
                            <center>
                                <div class="caption" >
                                    <h3>Painting # 8</h3>
                                    <p>Price: $1232712.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
             <?php
        require'footer.php';
        ?>
        </div>
       
    </body>
</html>
