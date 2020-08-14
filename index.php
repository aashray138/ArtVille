<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AV's Artville </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/homepage.css">
  <link rel="stylesheet" href="css/slides.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    img:hover{
        transform: scale(1.2);
        transition-duration: 0.4s;

    }
    
    </style>

</head>
<body>
    <?php
      require 'header.php';
    ?>
<!-- End of Nav Bar -->

<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/slide1.jpg" style="width:100%">
    <div class="text"> Paint </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/slide2.jpg" style="width:100%">
    <div class="text"> Cycle </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/slide3.jpg" style="width:100%">
    <div class="text"> Psy </div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script type="text/javascript">
  
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
} 

</script>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" style="background-color:lightblue; color: white;"> PHOTO OF THE DAY </div>
        <div class="panel-body"><img src="images/One.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Submitted by User : <a href= "iamabasicphotographer.html" >iamabasicphotographer </a> </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading"> SHARED BY PRASHAN THAPA </div>
        <div class="panel-body"><img src="images/Two.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href ="https://www.nepalsanctuarytreks.com/visit-nepal-2020/">Promoting Visit Nepal 2020!! </a> </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading"> IT'S NOW OR NEVER!! </div>
        <div class="panel-body"><img src="images/Three.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> <a href= "terms.html"> Photography Lessons by Virinchi @ $25/hr  </a> </div>
      </div>
    </div>
  </div>
</div><br>
<!-- End of Sliders -->

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> NEW MOVIE POSTERS </div>
        <div class="panel-body"><img src="images/GOT1.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> WINTER IS COMING!! ARE YOU READY?? </div>
      </div>
    </div>
  
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">  SUMMER STORIES  </div>
        <div class="panel-body"><img src="images/Five.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer"> Shared by User : Aashray Shrestha </div>
      </div>
    </div>
     <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> GAMING POSTERS </div>
        <div class="panel-body"><img src="images/Fotnite.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"> MAY THE ODDS BE FOREVER IN YOUR FAVOR </div>
      </div>
    </div>
  </div>
</div><br><br>

   <?php
        require'footer.php';
        ?>

</body>
</html>
