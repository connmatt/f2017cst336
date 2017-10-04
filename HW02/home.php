<!DOCTYPE html>

<html>
    <head>
        <title> Sudoku </title>
        <style></style>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <h1>SUDOKU!</h1>
    <body style="background-color:#800000">
        <figure id="Pencil">
            <img  src="img/pencil.png" width="250" height="400" alt="PENCIL" />
        </figure>
        <figure id="Brain">
            <img  src="img/brain.png" width="200" height="200" alt="Brain" />
        </figure>
                
        <?php
        $sudoku = array();
        ?>
         <table border = 5>
            <?php
            for ($x = 1; $x <= 9; $x++) {
                $numbers = array(1,2,3,4,5,6,7,8,9);
                echo "<tr>";
                for ($y = 1; $y <= 9; $y++) {
                   echo "<td style = 'background-color:white'>";
                   $num = rand(1,count($numbers));
                   $rannum = $numbers[$num-1];
                  if($y == rand(1,9) || $x == rand(1,9)){
                       echo $sudoku[$x[$y]] = " ";
                       echo "</td>";
                   }else{

                    $sudoku[$x[$y]] = $rannum;
                    echo $sudoku[$x[$y]];
                    array_splice($numbers, $num-1, 1);
                    echo "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>