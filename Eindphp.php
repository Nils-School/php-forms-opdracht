<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" type="text/css" href="Eindphp.css">
    <title>Document</title>
</head>
<body>
<div class=alles>
<?php
// define variables and set to empty values
$nameErr = "Alles invullen";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
  } else {
    $name = test_input($_POST["name"]); 
  if (empty($_POST["name1"])) {
  } else {
    $name1 = test_input($_POST["name1"]);
  }
  if (empty($_POST["name2"])) { 
  } else {
    $name2 = test_input($_POST["name2"]);
  }
  if (empty($_POST["name3"])) {
  } else {
    $name3 = test_input($_POST["name3"]);
  }
  if (empty($_POST["name4"])) {
    
  } else {
    $name4 = test_input($_POST["name4"]);
  }

  if (empty($_POST["name5"])) {
    
  } else {
    $name5 = test_input($_POST["name5"]);
  }

  if (empty($_POST["name6"])) {
    
  } else {
    $name6 = test_input($_POST["name6"]);
  }
}
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<div class = "header"><span class = "paniek"><a href="Eindphp2.php">Er heerst paniek...</a></span><span class = "onkunde"><a href ="Eindphp.php"> Onkunde</a> </span></div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h1>Onkunde</h1>
  <label>Wat zou je graag willen kunnen?</label> <input type="text" name="name">
  </br>
  </br>
  <label>Met welk persoon kan je goed opschieten?</label> <input type="text" name="name1">
  </br>
  </br>
  <label>Wat is je favoriete getal?</label> <input type="text" name="name2">
  </br>
  </br>
  <label>Wat heb je altijd bij je als je op vakantie gaat?</label></label> <input type="text" name="name3">
  </br>
  </br>
  <label>Wat is je beste persoonlijke eigenschap?</label> <input type="text" name="name4">
  </br>
  </br>
  <label>Wat is je slechtste persoonlijke eigenschap?</label> <input type="text" name="name5">
  </br>
  </br>
  <label>Wat is het ergste dat je kan overkomen?</label> <input type="text" name="name6">
  </br>  
  
  <?php

// echo "<div class = submit>";
if (!empty($name) && !empty($name1) && !empty($name2) && !empty($name3) && !empty($name4) && !empty($name5) && !empty($name6)){
  echo "<div class= output>";
  echo "</br>";
  echo "<div class = submit>Er zijn veel mensen die niet kunnen " .  $name . ". Neem nou " . $name1 . ". Zelfs met de hulp van een " . $name3 . " of zelfs " . $name2 . " kan " . $name1 . " niet " . $name . ". Dat heeft niet te maken met een gebrek aan " . $name4 . ". Maar met een te veel aan " . $name5 . ". Te veel aan " .$name5 . ". Te veel " . $name5 . " leidt tot " . $name6 . " en dat is niet goed als je wilt " . $name . ". Helaas voor " . $name1 . ".</div>";
  echo "</div>";
}
else{
  echo '<div class = error >'; 
  echo $nameErr;
  echo '</div>';
}

?>
  <input type="submit" name="submit" value="Submit">    
</form>
</div>
 
</body>
</html>