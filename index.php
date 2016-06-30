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

    
    echo $_SESSION["box0"] = "-";
    echo $_SESSION["box1"] = "-";
    echo $_SESSION["box2"] = "-";
    echo $_SESSION["box3"] = "-";
    echo $_SESSION["box4"] = "-";
    echo $_SESSION["box5"] = "-";
    echo $_SESSION["box6"] = "-";
    echo $_SESSION["box7"] = "-";
    echo $_SESSION["box8"] = "-";

    $turn_counter = 0;
  ?>

</body>
</html>