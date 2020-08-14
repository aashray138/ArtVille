    <nav class="navbar navbar-inverse">
        <div class="container-fluid" >
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
                    <li><a href="index.php"><img src="images/navmenulogo.png" alt="Hompage" style="width: 75px"></a></li>
                   <li id = "Contact">
                      <div class="dropdown">
                          <button class="dropbtn"> MarketPlace </button>
                             <div class="dropdown-content">
                              <a href="artwork.php"> Buy ArtWork </a>
                            </div>
                      </div>
                  </li>

                  <li id = "User">
                    <div class="dropdown">
                        <button class="dropbtn"> User Submissions </button>
                            <div class="dropdown-content">
                                <a href="UserSubmissionPage.php"> Spring 2020 Competition </a>
                            </div>
                    </div>
                  </li>
                 
                  <li id = "Contact">
                      <div class="dropdown">
                            <button class="dropbtn"> Contact Us </button>
                                <div class="dropdown-content">
                                <a href="aboutus.php">About Us</a>
                                </div>
                       </div>
                  </li>
           </ul>
                 <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="exhibition.php"><span class="glyphicon glyphicon-picture"></span> Exhibition </a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?><li><a href="exhibition.php"><span class="glyphicon glyphicon-picture"></span> Exhibition</a></li>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>