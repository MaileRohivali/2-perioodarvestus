<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
    <a href="index.php?test">Mine tagasi</a>
    
	<br>
	<?php
		$name = $_GET["name"];
		$age = $_GET["age"];
	 if($_GET['age'] > 18) {
		echo "Tere $name! Olete lehekülje vaatamiseks piisavalt vana.";
	} elseif (!isset($_GET['name'], $_GET['age'])) {
		echo "Tere! Jätsite sisestamata kasutajanime ja vanuse. Palun tehke seda!";
	}else {
		echo "Tere $name! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
	} 
	?>

	


  </body>
</html>
