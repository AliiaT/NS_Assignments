<!DOCTYPE html>
<html>
<body style="background-color:black;">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 40%;
  top: 35%;
  z-index: 1;
  width: 250px;
  height: 250px;
  margin: -75px 0 0 -75px;
  border: 50px solid white;
  border-radius: 50%;
  border-top: 50px solid red;
  width: 360px;
  height: 360px;
  -webkit-animation: spin 5s linear infinite;
  animation: spin 5s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</body>
</html>


<?php
if (ob_get_level() == 0) ob_start();
for ($i = 0; $i<1; $i++){

    echo str_pad('',4096)."\n";    

    ob_flush();
    flush();
    sleep(3);
}

ob_end_flush();

$x = htmlspecialchars($_POST['email']);
$y = htmlspecialchars($_POST['psw']);
$z = htmlspecialchars($_POST['psw-repeat']);
if ($y == $z) {
   echo '<i style="color:white;font-size:30px;font-family:verdana;text-align:center;"> Password matches </i>';
} else {
   echo '<i style="color:white;font-size:30px;font-family:verdana;"> We were not able to register you, your passwords does not match please try it again :) </i>';
}
?>
