<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>
<?php

 $username = $_POST["username"]  ;
	$sex =  $_POST["sex"]; 
	$submit = $_POST["submit"];


if (strlen($username) > 0 && isset($sex)) {
 echo "Tere {$username}!Tundub et olete {$sex}.";}
elseif (empty($username) && empty($sex) && isset($_POST["submit"])){
 echo "Palun minge tagasi ja sisestage andmed";}
if( strlen($username) > 0 && empty($sex)){
   echo "Palun minge tagasi ja valige sugu.";}
if (isset($sex) && empty($username)){ 
   echo "Palun minge tagasi ja sisestage nimi";}

if (!isset($_POST["submit"])) {
	echo "Tundub, et sattusid siia otseteed pidi.";
}
?>
    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
