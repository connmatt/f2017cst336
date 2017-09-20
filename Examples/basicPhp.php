<?php
    
    $message = "this is a message";
    

?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <div>
<?php
            for ($i=0; $i<9;$i++){
                $rannum = rand(1,100);
                echo $rannum. " ";
            }
            
?>
        </div>
    </body>
</html>