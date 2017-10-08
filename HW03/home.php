<!DOCTYPE html>

<html>
    <head>
        <title>Generate Background Story</title>
        <link href = "styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <div class = "header">
            <h1>Need Story?</h1>
        </div>
        
        <div class = "middle">
        
        <form method ="POST">
            <fieldset>
                <legend> Background Story Generator</legend>
            <table>
                 <tr><th colspan="5">Username:</th></tr>
                    <tr>
                        <td>
                           <input class = "username" type = "text" name = "username" maxlength="15" value="John Doe"/> <br /><br />
                        </td>
                    </tr>
                    <tr>
                        <tr><th colspan= "5" > Gender:</th></tr>
                        <td>
                            <input type="radio" name = "gender" value = "male" checked> Male<br>
                            <input type="radio" name = "gender" value = "female" > Female <br>
                        </td>
                    </tr>
                    <tr><th colspan="5" >Class: </th></tr>
                    <tr>
                        <td><select name= "classes">
                            <option value="knight" selected="selected">Knight</option>
                            <option value="monk">Monk</option>
                            <option value="ranger">Ranger</option>
                            <option value="thief">Thief</option>
                            <option value="white">White Mage</option>
                            <option value="black">Black Mage</option>
                            <option value="summoner">Summoner</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Generate Background Story"/></td>
                    </tr>
            </table>
            </fieldset>
        </form>
        </div>
        <div class = "output">
        <?php
        $username = $_POST["username"];
        $gender = $_POST["gender"];
        $class = $_POST["classes"];
        
        if($gender == "male" && $class == "knight"){
            echo("<img src = 'img/Bartz-Knight.png' alt= 'Male Knight'/>"); 
            echo("<h2> $username was a young $gender when his parents died in the war that defined the battle between good and evil. 
            Now with his parents in his heart, he knows what he has to do to revenge his parents and bring back the light to the world.</h2>");
           }
        elseif($gender == "female" && $class == "knight"){
            echo("<img src = 'img/Faris-Knight.png' alt= 'Female Knight'/>");
            echo("<h2> $username was a young $gender that grew up wealthy and had everything handed to her. She didn't like being treated so special so she decided to do something about it.
            She wanted to be able to protect herself and not depend on anyone but herself. </h2>");
        }
        
        elseif($gender == "male" && $class == "monk"){
            echo("<img src = 'img/Bartz-Monk.png' alt= 'Male Monk'/>");
            echo("<h2> $username was a young $gender that lived up in the mountains with his father that taught him the ways to be a monk. He lives up in the mountains focusing on his inner peace.");
        }
        elseif($gender == "female" && $class == "monk"){
            echo("<img src = 'img/Faris-Monk.png' alt= 'Female Monk'/>");
            echo("<h2> $username was a young $gender that came from a forest that lost her parents when they were traveling to their new home town. She got lost when she was chasing butterflies in the forest.
            She realized that she got too deep in the forest. She found a cave where there was an old man who taught her how to survive on her on and to bring light from darkness.</h2>");
        }
        
        elseif($gender == "male" && $class == "ranger"){
            echo("<img src = 'img/Bartz-Ranger.png' alt= 'Male Ranger'/>");
            echo("<h2> $username was a young $gender that came from a small village where the town was known for hunting and gethering. One night his father went out to go hunting and never returned.
            Now that $username is older with the mystery of his father. He goes out to explore the world while hunting the monters that are outside of his own town.</h2>");
        }
        elseif($gender == "female" && $class == "ranger"){
            echo("<img src = 'img/Faris-Ranger.png' alt= 'Female Ranger'/>");
            echo("<h2> $username was a young $gender whose mother abandoned her and left her to the wolves. The wolves gathered around $username wondering what she was but decided to take her in and raise her to be with the wolf pack. 
            Growing up with them she learned how to hunt her pray until she runs into another human being that catches her interest.</h2>");
        }
        
        elseif($gender == "male" && $class == "thief"){
            echo("<img src = 'img/Bartz-Thief.png' alt= 'Male Thief'/>");
            echo("<h2> $username was a young $gender that came was snatch from his parents from bandits rampaging throuh his home village. 
            The bandits felt he would be a great addition to the bandits and thought he be able to sqeeze through tiny places. With the bandits raising him he didn't know what was right or wrong only knew the way of a bandit..</h2>");
        }
        elseif($gender == "female" && $class == "thief"){
            echo("<img src = 'img/Faris-Thief.png' alt= 'Female Thief'/>");
            echo("<h2> $username was a young $gender who lived strictly by sea following the ocean breaze to take her to new locations. 
            She was raised by pirates and only knew how to be a pirate but deep down she felt that something was missing in her life. Maybe it was a family, or maybe something more to her life... </h2>");
        }
        
        elseif($gender == "male" && $class == "white"){
            echo("<img src = 'img/Bartz-WhiteMage.png' alt= 'Male White Mage'/>");
            echo("<h2> $username was a young $gender, who was only raised by his mother who was a healer herself and he saw the importants of a White Mage so he wanted to follow in his mother's footsteps to take care of his fellow partners.
            He gained his robe from his mother after she passed and he promised her that he would take her mantle to help fellow comerades in battle.");
        }
        elseif($gender == "female" && $class == "white"){
            echo("<img src = 'img/Faris-WhiteMage.png' alt= 'Female White Mage'/>");
            echo("<h2> $username was a young $gender who was raised within a wealthy town but raised poorly. 
            She had to learn how to take care of her younger siblings and she knew that the world was in a dark place and someone needs to be able to take care of the weak and keep them healthy. </h2>");
        }
        
        elseif($gender == "male" && $class == "black"){
            echo("<img src = 'img/Bartz-BlackMage.png' alt= 'Male Black Mage'/>");
            echo("<h2> $username was a young $gender that saw the darkness within the world and uses it to his advantage to create Black Magic to fight the darkness throughout the world. 
            He doesn't follow the light or the darkness but knows that he needs to fend for himself ever since his grandfather passed away after teaching $username the ways of a Black Mage.</h2>");
        }
        elseif($gender == "female" && $class == "black"){
            echo("<img src = 'img/Faris-BlackMage.png' alt= 'Female Black Mage'/>");
            echo("<h2> $username was a young $gender that was raised by her grandmother that taught her what life really meant for Black Mages and showed $username how to use black magic to defend herself.
            $username travels the globe looking for new magic to learn and develop to become the strongest black mage in the world. </h2>");
        }
        
        elseif($gender == "male" && $class == "summoner"){
            echo("<img src = 'img/Bartz-Summoner.png' alt= 'Male Summoner'/>");
            echo("<h2> $username was a young $gender that was raised by different wild animals. Not knowing where his parents have been he learned that nature could be his only ally. 
            He found a man who was performing different summons and $username knew that he wanted to follow in the man's footsteps. The man took $username in and taught him his ways and now $username wants to see what else the world has to offer.</h2>");
        }
        elseif($gender == "female" && $class == "summoner"){
            echo("<img src = 'img/Faris-Summoner.png' alt= 'Female Summoner'/>");
            echo("<h2> $username was a young $gender that lives with her aunt who has been a summoner all her life protecting the village. One night an army came to destroy the village and $username's aunt did her best to protect her own niece but failed.
            $username saw the death of her own aunt and knew that she needed to learn from her aunt's books to become a summoner and take revenge for her aunt who fought hard to protect her. </h2>");
        }
        ?>
        </div>
        <footer>
    <hr>
    CST 336: Internet Programming. 2017&copy;Connolly<br />
    <strong>Disclaimer:</strong> The information in this webpage is ficticious. <br />
    It is used for academic purposes only.
</footer>
    </body>
</html>