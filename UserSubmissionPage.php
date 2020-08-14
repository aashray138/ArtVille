<!DOCTYPE html>
<html lang="en">
<head>
 	<title> User Submission Page Javascript</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href= "css/catalog.css">
  <link rel="stylesheet" href= "css/user.css">
  <script src="js/user.js" type="text/javascript"></script> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>
  <script src="add-download-btn.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .rainbow-text {
    background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

   .filterDiv {
    float: left;
    display: none;
    }

    .show {
    display: block;
    }

  .containers {
  position: relative;
  margin-top: 10px;
    }

  .active {
  background-color: #7FFF00;  
  }

.inactive {
  background-color: #FFFFFF;
  }

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}

  </style>
</head>

<body>
	<?php
 		require 'header.php';
	?>

  <div class = "w3-center">
    <h1 style =" font-weight: bold;" class="rainbow-text"> USER SUBMITTED IMAGES</h1>
    <button class ="button button1" onclick="filterSelection('paint'); hidelikes()"> Paintings</button>
    <button class ="button button2" onclick="filterSelection('photo') ; hidelikes()"> Photography </button>
    <button class ="button button3" onclick="filterSelection('sketch'); hidelikes()"> Sketches </button>
    <button class ="button button4" onclick="filterSelection('psy'); hidelikes()"> HiP </button>
    <button class ="button button5"onclick="myFunction5()">Hide All Images</button>
    <button class ="button button1"onclick="myFunction6()">Show All Images</button> <br>
  </div>
<br>
<!-- Header -->
<div class ="w3-center">
<div class="header" id="myHeader">
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>


<!-- Photo Grid -->
<div class = "container">
<div class="row"> 
  <div class="column">
  <div class="containers">
    <img src="images/sketch/sketch1.jpg" class="filterDiv sketch" style="width:100%" onclick="modalFunction('id01');">
    <div class="btn glyphicon glyphicon-thumbs-up" id="like1" onclick = "like('like1')" width ="30px"> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/psycedelic/psy1.jpg" class="filterDiv psy" style="width:100%" onclick="modalFunction('id02');">
    <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px"> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/photographs/photograph1.jpg" class="filterDiv photo" style="width:100%">
    <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting1.jpg" class="filterDiv paint" style="width:100%">
    <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/psycedelic/psy6.jpg" class="filterDiv psy" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/sketch/sketch2.jpg" class="filterDiv sketch" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/photographs/photograph2.jpg" class="filterDiv photo" style="width:100%">
    <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>

  </div>
  <div class="column">
  <div class="containers">
    <img src="images/Seven.jpg" class="filterDiv photo" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/sketch/sketch3.jpg" class="filterDiv sketch" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/psycedelic/psy2.jpg" class="filterDiv psy" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/photographs/photograph3.jpg" class="filterDiv photo" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px"> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting3.jpg" class="filterDiv paint" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/sketch/sketch4.jpg" class="filterDiv sketch" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting4.jpg" class="filterDiv paint" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  </div>
   <div class="column">
   <div class="containers">
    <img src="images/psycedelic/psy3.jpg" class="filterDiv psy" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting5.jpg" class="filterDiv paint" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting6.jpg" class="filterDiv paint" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/sketch/sketch5.jpg" class="filterDiv sketch" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/photographs/photograph4.jpg" class="filterDiv photo" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/psycedelic/psy41.jpg" class="filterDiv psy" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting2.jpg" class="filterDiv paint" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  </div>
   <div class="column">
  <div class="containers">
    <img src="images/sketch/sketch7.jpg" class="filterDiv sketch" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/psycedelic/psy5.jpg" class="filterDiv psy" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/Four.jpg" class="filterDiv psy" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/photographs/photograph5.jpg"  class="filterDiv photo" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/sketch/sketch6.jpg" class="filterDiv sketch" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/photographs/photograph6.jpg" class="filterDiv photo" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  <div class="containers">
    <img src="images/pantings/painting4.jpg" class="filterDiv paint" style="width:100%">
     <div class="btn glyphicon glyphicon-thumbs-up" onclick = "like()" width ="30px";> Like  </a></div>
  </div>
  </div>
</div>
</div>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-8">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
      <h2> Image Name </h2>
    </header>
    <div class="w3-container">
      <img src="images/sketch/sketch1.jpg" style="width:100%"
    </div>
    <footer class="w3-container w3-teal">
      <p> Submitted by : User X</p>
    </footer>
  </div>
</div>

<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-card-8">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
      <h2> Image Name </h2>
    </header>
    <div class="w3-container">
      <img src="images/sketch/sketch1.jpg" style="width:100%"
    </div>
    <footer class="w3-container w3-teal">
      <p> Submitted by : User X</p>
    </footer>
  </div>
</div>
</div>
</div>
</div>
   <?php
        require'footer.php';
        ?>
</body>


<script type="text/javascript">
  
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function myFunction5() {
  var divsToHide = document.getElementsByClassName("filterDiv")
  var likeToHide = document.getElementsByClassName("glyphicon")
  for (var i=0; i <divsToHide.length; i++){
    divsToHide[i].style.visibility = "hidden";
    divsToHide[i].style.display = "none";
    likeToHide[i].style.visibility = "hidden";
    likeToHide[i].style.display ="none"; 
  }
}

function myFunction6() {
   var divsToHide = document.getElementsByClassName("filterDiv")
    var likeToHide = document.getElementsByClassName("glyphicon")
  for (var i=0; i <divsToHide.length; i++){
    divsToHide[i].style.visibility = "visible";
    divsToHide[i].style.display = "block"; 
  }
}

  filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

function hidelikes(){
  var likeToHide = document.getElementsByClassName("glyphicon-thumbs-up");
    for (var i=0; i <likeToHide.length; i++){
    likeToHide[i].style.visibility = "hidden";
    likeToHide[i].style.display ="none"; 
  }
    
}

function modalFunction(num){
 document.getElementById('id01').style.display='block'

}

function like(x) {
  document.getElementById('x').style.color = "lightblue";
}
</script>
   
</html>