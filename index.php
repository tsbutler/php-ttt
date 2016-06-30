<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>Tic | Tac | Toe</title>
</head>
<body>

  <?php
    $_SESSION["box0"] = "-";
    $_SESSION["box1"] = "-";
    $_SESSION["box2"] = "-";
    $_SESSION["box3"] = "-";
    $_SESSION["box4"] = "-";
    $_SESSION["box5"] = "-";
    $_SESSION["box6"] = "-";
    $_SESSION["box7"] = "-";
    $_SESSION["box8"] = "-";

    $turn_counter = 0;
    if ($turn_counter == 0) {
      $turn = "X";
      $turn_counter = 1;
    }
    elseif ($turn_counter == 0) {
      $turn = "O"
      $turn_counter = 0;
    }
  ?>

  <div class="grid">
    <div class="grid-row row1">
      <div class="grid-box box0"><?php echo $_SESSION["box0"]; ?></div>
      <div class="grid-box box1"><?php echo $_SESSION["box1"]; ?></div>
      <div class="grid-box box2"><?php echo $_SESSION["box2"]; ?></div>
    </div>
    <div class="grid-row row2">  
      <div class="grid-box box3"><?php echo $_SESSION["box3"]; ?></div>
      <div class="grid-box box4"><?php echo $_SESSION["box4"]; ?></div>
      <div class="grid-box box5"><?php echo $_SESSION["box5"]; ?></div>
    </div>
    <div class="grid-row row3">
      <div class="grid-box box6"><?php echo $_SESSION["box6"]; ?></div>
      <div class="grid-box box7"><?php echo $_SESSION["box7"]; ?></div>
      <div class="grid-box box8"><?php echo $_SESSION["box8"]; ?></div>
    </div>  
  </div>

</body>
</html>