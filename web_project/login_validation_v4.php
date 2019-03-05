<!DOCTYPE html>
<html>
<body style="background-color:yellow;align:center;">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button1 {border-radius: 2px;}
#loader {
  position: absolute;
  left: 43%;
  top: 45%;
  z-index: 1;
  width: 250px;
  height: 250px;
  margin: -75px 0 0 -75px;
  border: 50px solid white;
  border-radius: 50%;
  border-top: 50px solid red;
  width: 300px;
  height: 300px;
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

<button style="color:white;background:black;" onclick="goBack()"><b>Go to Main Page</b></button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</body>
</html>


<?php
   $un = htmlspecialchars($_POST['uname']);
   $ps = htmlspecialchars($_POST['psw2']);
   $servername = "localhost";
   $username = "al";
   $password = "pass123";
   $dbname = "UserLoginID";

   $conn = mysql_connect($servername, $username, $password, $dbname); 
   $sql = "SELECT * FROM members WHERE email = '$un' AND  password = '$ps'";
   mysql_select_db('UserLoginID');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

   while($row = mysql_fetch_assoc($retval)) {
         "EMAIL ADDRESS :{$row['email']}  <br> ".
         "PASSWORD      :{$row['password']} <br> ".
         "--------------------------------<br>";

   }

   mysql_close($conn); 
if ("{$row['email']}" == "$un" . "{$row['password']}" == "$ps")
   echo "validation happened";

if (ob_get_level() == 0) ob_start();
for ($i = 0; $i<1; $i++){

    echo str_pad('',4096)."\n";    

    ob_flush();
    flush();
    sleep(4);
}

ob_end_flush();

?>
