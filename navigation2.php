<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <nav class="w3-bar w3-top w3-light-grey w3-large">
<div class="container-fluid">
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Notes</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Date</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Income</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Expences</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small">Password</a>
  <a href="signin.php" class="w3-bar-item w3-button w3-green w3-right">Sign Out</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>
<div id="demo" class="w3-bar-block w3-light-grey w3-hide w3-hide-large w3-hide-medium">
  <a href="#" class="w3-bar-item w3-button">Notes</a>
  <a href="#" class="w3-bar-item w3-button">Date</a>
  <a href="#" class="w3-bar-item w3-button">Income</a>
  <a href="#" class="w3-bar-item w3-button">Expences</a>
  <a href="#" class="w3-bar-item w3-button">Password</a>
</div>
</nav>


<script>
function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>