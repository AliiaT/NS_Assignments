<?php
$x = htmlspecialchars($_POST['email']);
$y = htmlspecialchars($_POST['psw']);
$z = htmlspecialchars($_POST['psw-repeat']);
if ($y == $z) {
   echo "Password matches";
} else {
   echo "We were not able to regiester you, your password is not matches";
}
?>
