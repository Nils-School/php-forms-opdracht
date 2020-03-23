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
$name = "";
$name1 = "";
$name2 = "";
$name3 = "";
$name4 = "";
$name5 = "";
$name6 = "";

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
  if (empty($_POST["name7"])) {
    
} else {
  $name7 = test_input($_POST["name7"]);
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
<h1>Paniek</h1>
  <label>Welk dier zou je nooit als huisdier willen hebben?</label> <input type="text" name="name">
  </br>
  </br>
  <label>Wie is het belangrijkste persoon in jou leven?</label> <input type="text" name="name1">
  </br>
  </br>
  <label>In welk land zou jij graag willen wonen?</label> <input type="text" name="name2">
  </br>
  </br>
  <label>Wat doe je als je je verveelt?</label> <input type="text" name="name3">
  </br>
  </br>
  <label>Met welk speelgoed speelde je als kind het meest?</label> <input type="text" name="name4">
  </br>
  </br>
  <label>Bij welke docent spijbel jij het liefst?</label> <input type="text" name="name5">
  </br>
  </br>
  <label>Als je 100.00 euro had wat zou je dan kopen?</label> <input type="text" name="name6">
  </br> 
  </br> 
  <label>Wat is jouw favoriete bezigheid?</label> <input type="text" name="name7">
  </br>  
  
  <input type="submit" name="submit" value="Submit">  
  
  <?php

// echo "<div class = submit>";
if (!empty($name) && !empty($name1) && !empty($name2) && !empty($name3) && !empty($name4) && !empty($name5) && !empty($name6) && !empty($name7)){
  echo "<div class= output>";
  echo "</br>";
  echo "Er heerst paniek in het koninkrijk " . $name2 . ". Koning " . $name5 . " is ten einde raad en als koning </br>" . $name5 . " ten einde raad is, dan roept hij zijn ten-einde-raadsheer " . $name1 . "<br><br>" . '"' . $name1 . '! Het is een ramp! Het is een schande" <br><br>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>' . '"Mijn ' . $name . 'is verdwenen! Zo maar, zonder waarschuwing. En ik had net ' . $name4 . ' voor hem gekocht" <br><br>' . '"Majesteit, uw ' . $name . ' komt vast vanzelf weer terug?"<br><br>' . '"ja ' . "da's" . ' leuk en aardig, maar hoe moet ik in de tussentijd' . $name7 . 'leren?" <br><br>' . '"Maar Sire, daar kunt u toch uw ' . $name6 . ' voor gebruiken." <br><br>' . '"' . $name1 . ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br> "Mij ' . $name3 . ', Sire. <br><br>';
  echo "</div>";
  
}
else{
  echo '<div class = error >'; 
  echo $nameErr;
  echo '</div>';
}

?> 
</form>
</div>

</body>
</html>