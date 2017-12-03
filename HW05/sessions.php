<?php

session_start();
$info = $_SERVER['REQUEST_METHOD'] == 'POST';

$many_times = $_SERVER['REQUEST_METHOD'] == 'POST';

if ($info) {
    $_SESSION["report"] = "Start Time: " . $_POST["Start_Time"] . "<br/>" . "End Time:" . $_POST["End_Time"] . "<br/>" . "Magnitude:" . $_POST["mag"];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>HW 05</title>
    </head>
    <body>
        <?php
        if($info){
                include "index.php";
        }
        ?>
    </body>
</html>