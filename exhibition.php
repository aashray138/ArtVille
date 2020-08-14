<!DOCTYPE html>
<html>
  <head>
    <title>Google Map</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href= "css/catalog.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #map {
        width: 800px;
        height: 400px;
        margin: 50px;
      }
    </style>
    <link rel="stylesheet" href="css/c09.css" />    
    <script src="js/google.js"></script>
  </head>
  <body>
  <?php
  require 'header.php';
  ?>
<div class = "body1">
    <header><h1> ART EXHIBITIONS</h1></header>
    <h2> ART EXHBITIONS </h2>
    <h2>Find a Location Near Your</h2>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter your City" title="Type in a city">

<div class ="tableW">
<div class="col col-md-8">
<table id="myTable">
  <tr class="header">
    <th style="width:55%;"> Address </th>
    <th style="width:25%;"> Date </th>
    <th style="width:20%;"> Zipcode</th>
  </tr>
  <tr>
    <td> Art Institute, Kalamazoo, MI</td>
    <td> 02/02/2020</td>
    <td> 49007 </td>
  </tr>
  <tr>
    <td> Art Institute, Chicago, IL</td>
    <td> 02/04/2020</td>
    <td> 62541 </td>
  </tr>
  <tr>
    <td> Art Institute, Richmond, VA</td>
    <td> 12/02/2020</td>
    <td> 20170 </td>
  </tr>
  <tr>
    <td> Art Institute, San Fransisco, CA</td>
    <td> 08/02/2020</td>
    <td> 03464 </td>
  </tr>
  <tr>
    <td> Art Institute, Northfield, Vermont</td>
    <td> 08/02/2020</td>
    <td> 05663 </td>
  </tr>
    <tr>
    <td> Art Institute, Moon, Solar System</td>
    <td> 08/02/2041</td>
    <td> 00000 </td>
  </tr>
    <tr>
    <td> Art Institute, Venus, Solar System</td>
    <td> 08/02/2051</td>
    <td> 99999 </td>
  </tr>
</table>
</div>
<div class="col col-md-4">
<table id="myTable">
 <tr class="header">
    <th style="width:30%;"> Day </th>
    <th style="width:70%;"> Hours </th>
 </tr>
 <tr>
    <td>Monday</td>
    <td> 9:00 AM to 5:00 PM</td>
  </tr>
  <tr>
    <td>Tuesday </td>
     <td> 9:00 AM to 5:00 PM</td>
  </tr>
  <tr>
    <td>Wednesday </td>
     <td> 9:00 AM to 5:00 PM</td>
  </tr>
  <tr>
    <td>Thursday</td>
     <td> 9:00 AM to 5:00 PM</td>
  </tr>
  <tr>
    <td>Friday</td>
     <td> 9:00 AM to 5:00 PM</td>
  </tr>
  <tr>
    <td>Saturday</td>
     <td> 9:00 AM to 5:00 PM</td>
  </tr>
  <tr>
    <td>Sunday</td>
     <td> 9:00 AM to 5:00 PM</td>
  </tr>
</table>
</div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx2eJk1-0UcdzkIRI882V0VTpLObsPqfo&callback=initMap" async defer></script>

<div id="map"> </div>
</div>
  <?php
  require 'footer.php';
  ?>

  </body>
</html>