<div>
    <?php
        function displayCircles($value){
            echo "<table border='0'>";
            echo "<tbody>";
            for($i=0;$i<count($value);$i++)
            {
                echo "<tr>";
                for($j = 0; $j < count($value); $j++)
                {
                    if($value[$i][$j]=='1')
                    {
<<<<<<< HEAD
=======
                        //echo "1";
>>>>>>> 87a0537a7666cf691c2ae9b05028478ffeb7d986
                        echo"<td class = 'circle' style = 'background:$color'> </td>";
                        //echo"<span style='color:red;font-size:40px'>.</span>";
                    }
                    else if($value[$i][$j]=='0')
                    {
<<<<<<< HEAD
=======
                        //echo "0";
>>>>>>> 87a0537a7666cf691c2ae9b05028478ffeb7d986
                        echo"<td class = 'Bcircle' > </td>";
                    }
                }
                
                echo"</tr>";
           
                
            }
            echo "</tbody>";
            echo "</table>";
        }
            
        $lwrString = strtolower($report);
        for($i = 0; $i < strlen($lwrString); $i++){
            $value = [];
            if($lwrString[$i] == ' '){
                echo "<br>";
            }
            elseif($lwrString[$i] == 'a'){
                
                $value = ["00011000",
                          "00100100",
                          "01000010",
                          "01000010",
                          "01111110",
                          "01000010",
                          "01000010",
                          "01000010"];
                
                    
            }
            elseif($lwrString[$i] == 'b'){
                
                $value = ["11111110",
                          "11000001",
                          "11000001",
                          "11111110",
                          "11111110",
                          "11000001",
                          "11000001",
                          "11111110"];
                
                    
            }
            elseif($lwrString[$i] == 'c'){//c
                
                $value = ["01111111",
                          "11111111",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11111111",
                          "01111111"];
                
                    
            }
            elseif($lwrString[$i] == 'd'){//d
                
                $value = ["11111100",
                          "11000010",
                          "11000001",
                          "11000001",
                          "11000001",
                          "11000001",
                          "11000010",
                          "11111100"];
                
                    
            }
            elseif($lwrString[$i] == 'e'){//e
                
                $value = ["11111111",
                          "11111111",
                          "11000000",
                          "11111111",
                          "11111111",
                          "11000000",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 'f'){//f
                
                $value = ["11111111",
                          "11111111",
                          "11000000",
                          "11111111",
                          "11111111",
                          "11000000",
                          "11000000",
                          "11000000"];
                
                    
            }
            elseif($lwrString[$i] == 'g'){//g
                
                $value = ["11111111",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11001111",
                          "11000011",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 'h'){//h
                
                $value = ["11000011",
                          "11000011",
                          "11000011",
                          "11111111",
                          "11111111",
                          "11000011",
                          "11000011",
                          "11000011"];
                
                    
            }
            elseif($lwrString[$i] == 'i'){//i
                
                $value = ["11111111",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 'j'){//j
                
                $value = ["11111111",
                          "11111111",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "11011000",
                          "11111000"];
                
                    
            }
            elseif($lwrString[$i] == 'k'){//k
                
                $value = ["11000110",
                          "11001100",
                          "11011000",
                          "11110000",
                          "11110000",
                          "11011000",
                          "11001100",
                          "11000110"];
                
                    
            }
            elseif($lwrString[$i] == 'l'){//l
                
                $value = ["11000000",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 'm'){//m
                
                $value = ["11000011",
                          "11100111",
                          "11011011",
                          "11011011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000011"];
                
                    
            }
            elseif($lwrString[$i] == 'n'){//n
                
                $value = ["11000011",
                          "11100011",
                          "11110011",
                          "11010011",
                          "11011011",
                          "11001011",
                          "11001111",
                          "11000011"];
                
                    
            }
            elseif($lwrString[$i] == 'o'){//o
                
                $value = ["11111111",
                          "11111111",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 'p'){//p
                
                $value = ["11111110",
                          "11000011",
                          "11000011",
                          "11111110",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11000000"];
                
                    
            }
            elseif($lwrString[$i] == 'q'){//q
                
                $value = ["11111111",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000101",
                          "11000010",
                          "11111101"];
                
                    
            }
            elseif($lwrString[$i] == 'r'){//r
                
                $value = ["11111110",
                          "11000001",
                          "11000001",
                          "11111110",
                          "11011000",
                          "11001100",
                          "11000110",
                          "11000011"];
                
                    
            }
            elseif($lwrString[$i] == 's'){//s
                
                $value = ["11111111",
                          "11111111",
                          "11000000",
                          "11111111",
                          "11111111",
                          "00000011",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 't'){//t
                
                $value = ["11111111",
                          "11111111",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000"];
                
                    
            }
            elseif($lwrString[$i] == 'u'){//u
                
                $value = ["11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == 'v'){//v
                
                $value = ["11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "01100110",
                          "00111100",
                          "00011000"];
                
                    
            }
            elseif($lwrString[$i] == 'w'){//w
                
                $value = ["11000011",
                          "11000011",
                          "11000011",
                          "11000011",
                          "11011011",
                          "11011011",
                          "11100111",
                          "11000011"];
                
                    
            }
            elseif($lwrString[$i] == 'x'){//x
                
                $value = ["11000011",
                          "11000011",
                          "01100110",
                          "00111100",
                          "00111100",
                          "01100110",
                          "11000011",
                          "11000011"];
                
                    
            }
            elseif($lwrString[$i] == 'y'){//y
                
                $value = ["01100110",
                          "01100110",
                          "01100110",
                          "00111100",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000"];
                
                    
            }
            elseif($lwrString[$i] == 'z'){//z
                
                $value = ["11111111",
                          "11111111",
                          "00000011",
                          "00001100",
                          "00110000",
                          "11000000",
                          "11111111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == '0'){//0
                
                $value = ["11111111",
                          "11100011",
                          "11010011",
                          "11010011",
                          "11001011",
                          "11001011",
                          "11000111",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == '1'){//1
                
                $value = ["00111000",
                          "01111000",
                          "11111000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == '2'){//2
                
                $value = ["01111100",
                          "01100110",
                          "11000011",
                          "00000011",
                          "00001100",
                          "00110000",
                          "11000000",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == '3'){//3
                
                $value = ["00111100",
                          "11000011",
                          "00000011",
                          "00011100",
                          "00011100",
                          "00000011",
                          "11000011",
                          "00111100"];
                
                    
            }
            elseif($lwrString[$i] == '4'){//4
                
                $value = ["00011110",
                          "00110110",
                          "01100110",
                          "11000110",
                          "11111111",
                          "00000110",
                          "00000110",
                          "00000110"];
                
                    
            }
            elseif($lwrString[$i] == '5'){//5
                
                $value = ["11111111",
                          "11000000",
                          "11000000",
                          "11000000",
                          "11111100",
                          "00000011",
                          "00000011",
                          "11111110"];
                
                    
            }
            elseif($lwrString[$i] == '6'){//6
                
                $value = ["11111111",
                          "11111111",
                          "11000000",
                          "11000000",
                          "11111111",
                          "11000011",
                          "11000011",
                          "11111111"];
                
                    
            }
            elseif($lwrString[$i] == '7'){//7
                
                $value = ["11111111",
                          "11111111",
                          "00000110",
                          "00001100",
                          "00011000",
                          "00110000",
                          "01100000",
                          "11000000"];
                
                    
            }
            elseif($lwrString[$i] == '8'){//8
                
                $value = ["00111100",
                          "01000010",
                          "01100110",
                          "00111100",
                          "00111100",
                          "01100110",
                          "01000010",
                          "00111100"];
                
                    
            }
            elseif($lwrString[$i] == '9'){//9
                
                $value = ["00111100",
                          "11000011",
                          "11000011",
                          "00111111",
                          "00000011",
                          "00000011",
                          "00000011",
                          "00000011"];
                
                    
            }
            elseif($lwrString[$i] == '!'){//!
                
                $value = ["00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00011000",
                          "00000000",
                          "00011000",
                          "00011000"];
                
                    
            }
            displayCircles($value);
        }
    ?>
</div>
<div>
    <a href="home.php">New Form</a>
</div>