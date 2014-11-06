<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>
  <?php 
	 $page_link= "result.php";
	 $name = "Maile";
	 $age = "33";
	 ?>
	 <a href= "<?php echo $page_link.'?name='.$name."&age=".$age; ?>">Teisele lehele</a>
  </body>
</html>
