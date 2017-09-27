<?php
    session_start();
    
    $isPostback = $_SERVER['REQUEST_METHOD'] == 'POST';
    
    if ($isPostback) {
        $report = "Full Name: " . $_POST["fullName"] . "<br />" . "Password: " . $_POST["password"] ;  
        $_SESSION["report"] = $report;
    }
    else{
        $_SESSION["report"] = "";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
    </head>
    <body>
        <?php
            
            if($isPostback){
                include "inc.report.php";
            }
            else{
                include "inc.form.php";
            }
        ?>
    

    </body>
</html>