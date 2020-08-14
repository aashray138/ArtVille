<!DOCTYPE html>
<html>
<title>  About US Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href= "css/catalog.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel ="stylesheet" href="aboutus.css">
  <style>
  html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
  .mySlides {display:none}
  .w3-tag, .fa {cursor:pointer}
  .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>
    <?php
     require 'header.php';
    ?>
          
<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1 style="text-decoration-color: rgba(0.3,0.4,0.6,0.8);/" align="middle" id="whoarewe" ><b> WHO ARE WE? </b></h1>
   
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
   <div class="w3-display-container mySlides">
    <h3 id="besideimage"> <a href="#"> <img src="images/aboutuslogo.png" style="width:33% ; float: left;" align="w3-display-middle"> </a>  ARTVILLE  : Artville was created by Virinchi and Aashray to for their Mid-term     Project for Intro to Web Technology. The main idea behind this project is to show all the creative minds out there that there is a platform for all of us to showcase our creativity. Furthermore, ArtVille is a platform for like minded people to come together and discover new oppotunities.We have been working on creating a social blogger page for interested people to showcase their artwork, photographs, and keep in touch. It is also a website where you can buy and sell your stuffs....&nbsp;&nbsp; </h3>
      <div class="w3-display-topright w3-container w3-padding-32">    
      </div>
    </div>
    <div class="w3-display-container mySlides">
     <h3 id="besideimage2"><a href="#"><img src="images/AashrayLogo.png" style="width:33%;  float: left;"  align="w3-display-middle"></a>  AASHRAY SHRESTHA :  I am student from Nepal studying Computer Science at Western Michigan University. I am a junior and will gradute Spring'21. I work at the Hoejeke Bigelow Dining Center and Success@WMU as an eMentor. I am involved on campus with the Lee Honors College, International Students, Nepalese Student Association. I like playing tennis and badminton. My favorite movie is Shawshank Redemption:  "Everything that is done in this world is done by hope." Thank you for visitning my page and Have a good time scrolling around the website. </h3>
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>
    <div class="w3-display-container mySlides">
     <h3 id="besideimage3"><a href="#"><img src="images/VirinchiLogo.png" style="width:33%;  float: left;"  align="w3-display-middle"></a>  Virinchi Lalwani: I am an international student from India with majors in computer science in Western Michigan University. Web Technology was one of the course I wanted to cover for my profile. So, this is my first step for getting all the information about developing websites using different programming languages. I want to work as a software engineer. I like playing soccer. I also play the guitar as a hobby and would love to form a band someday. For now, Have a good time scrolling through the website. Hope you like it. </h3>
      <div class="w3-display-topleft w3-container w3-padding-32">
      </div>
    </div>
    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l4 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Photography</h3>
      <p>We provide photography lessons from beginners to advanced photographers. </p>
    </div>

    <div class="w3-col l4 m6 w3-grey w3-container w3-padding-16">
      <h3>Posters</h3>
      <p>We create and sell posters according to your need and requirements.</p>
    </div>

    <div class="w3-col l4 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Personal Blog </h3>
      <p>Whether it be art, photos, videos, or just sharing stuff you like.</p>
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Photography Plans</h3>
      <p>Choose a pricing plan that fits your needs.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>3</b> Days</li>
        <li class="w3-padding-16"><b>4</b> Hours</li>
        <li class="w3-padding-16"><b>Group</b> Session</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 125</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16"><b>5</b> Days</li>
        <li class="w3-padding-16"><b>5</b> Hours</li>
        <li class="w3-padding-16"><b>Group + Individualized </b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 180</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>7</b> Days</li>
        <li class="w3-padding-16"><b>6</b> Hours</li>
        <li class="w3-padding-16"><b>Individualized</b> Sessions</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 250</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>

    <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h2 style= "color: brown:"> MARKETPLACE </h2>

      <h3> BUY AND SELL !!</h3>
      <h3> The ArtVille marketplace runs on tokens </h3>
      <p id="descp"> <a href ="#"> Posters</a> : 15, 25, 40 tokens </p>
      <p id="descp"> <a href ="#">Photographs</a> : 15, 25, 35 tokens </p>
      <p id="descp"> <a href ="#"> ArtWork (Pre-Made)</a>: 30,45,60 tokens </p>
      <p id="descp"> <a href ="#">ArtWork (To-Order )</a>:  Starting at 50 tokens. Please fix the price with your artist. </p>

    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Small</li>
        <li class="w3-padding-16"><b> 13 * 18 </b>  - 15 tokens </li>
       
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large"> BUY</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
    <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32"> Medium</li>
        <li class="w3-padding-16"><b> 21 * 18 </b>  - 25 tokens </li>
       
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large"> BUY</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
    <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32"> Large</li>
        <li class="w3-padding-16"><b> 40 * 50 </b>  - 40 tokens </li>
       
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large"> BUY</button>
        </li>
      </ul>
    </div>

   
  </div>
  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>

<!-- Footer -->
<?php 
require 'footer.php';
 ?>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>



</body>
</html>
