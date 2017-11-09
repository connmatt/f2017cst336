<?php

session_start();

if(!isset($_SESSION['username '])){
    header("Location: index.php");
    exit;
}

include 'dbConnect.php';
$dbConn = getDatabaseConnection();

function getUserInfo(){
    global $dbConn;
    
    $sql = "SELECT *
            FROM users
            WHERE userId = " . $_GET['userId'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    return $record;
}

if (isset($_GET['editForm'])){
    $sql = "UPDATE users SET
                firstName = :fName,
                lastName = :lName,
                Hometown = :htown
            WHERE userID = :userId";
            
    $namedParameters = array();
    $namedParameters[':fName'] = $_GET['firstName'];
    $namedParameters[':lName'] = $_GET['lastName'];
    $namedParameters[':htown'] = $_GET['Hometown'];
    $namedParameters[':userId'] = $_GET['userId'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    echo "Record was updated!";
}

if(isset($_GET['userId'])){
    $userInfo = getUserInfo();
}

if (isset($_GET['back'])){
        header("Location: administration.php");
        exit;
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Update User's Info </title>
    </head>
    <body>

        <h1> Updating User's Info </h1>
        
        <fieldset>
            
            <legend> Updating User </legend>
            
            <form>
                
                
                 <input type="hidden" name="userId" value="<?=$userInfo['userId']?>">
                 
                First Name: <input type="text" name="firstName" value="<?=$userInfo['firstName']?>" /> <br />
                Last Name: <input type="text" name="lastName" value="<?=$userInfo['lastName']?>"/> <br />
                Hometown: <input type="text" name="hometown" value="<?=$userInfo['hometown']?>"/><br /> 
                <input type="submit" value="Update User" name="editForm"> </br>
                 <input type="submit" value="Back" name="back" />
            </form>
            
        </fieldset>
        
    </body>
</html>