<?php

    session_start();
    
    $isPostback = $_SERVER['REQUEST_METHOD'] == 'POST';
    
    if($isPostback){
        $report = $_POST["message"];
        $color = $_POST["color"];
        
        $_SESSION["report"] = $report;
        $_SESSION["report"] = $color;
    }
    else{
        $_SESSION["report"] = "";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2: LED Board </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
       <main>
        <h1> Custom LED Board</h1>
   
          
          
           <br />
           <?php
          
                if($isPostback){
                    include 'report.php';
                }
                else{
                    include 'form.php';
                    
                }
            ?>
           <div class='error'>'Display a different color per cell' must be answered </div>           
            <br />
            
        </main>

    </body>
</html>