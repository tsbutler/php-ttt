<?php 
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
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
  ?>

  <div class="container">
    <div class="box box0"><?php echo $_SESSION["box0"]; ?></div>
    <div class="box box1"><?php echo $_SESSION["box1"]; ?></div>
    <div class="box box2"><?php echo $_SESSION["box2"]; ?></div>
    <div class="box box3"><?php echo $_SESSION["box3"]; ?></div>
    <div class="box box4"><?php echo $_SESSION["box4"]; ?></div>
    <div class="box box5"><?php echo $_SESSION["box5"]; ?></div>
    <div class="box box6"><?php echo $_SESSION["box6"]; ?></div>
    <div class="box box7"><?php echo $_SESSION["box7"]; ?></div>
    <div class="box box8"><?php echo $_SESSION["box8"]; ?></div>
  </div>  

</body>
</html>