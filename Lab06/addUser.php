<?php
    
    include 'dbConnect.php';
    $dbConn = getDatabaseConnection();
    
    if(isset($_POST['add']) ){
        global $dbConn;    
        
        $fName = $_POST['first_name'];
        $lName = $_POST['last_name'];
        $htown = $_POST['hometown'];
        $un = $_POST['newUser'];
        $pw = sha1($_POST['newPass']);
        
        if ($fName == "" || $lName == "" || $htown == "" || $un == "" || $pw == ""){
            echo "<h1>Please fill out all criteria while adding a new user.<h1>";   
        }
        else{
            if ($dbConn->connect_error) {
                die("Connection failed: " . $dbConn->connect_error);
            }
        
            $sql = "INSERT INTO users (firstName, lastName, hometown, username, password)
                    VALUES('$fName', '$lName', '$htown', '$un', '$pw')";
                

            if ($dbConn->query($sql) == TRUE) {
                echo "New record created successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $dbConn->error;
            }
        }
    }
    
    if (isset($_POST['back'])){
        header("Location: administration.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title> Admin: Adding New User </title>
</head>
<body>
    
    <h1> Admin Section </h1>
    <h3> Adding New Users </h3>
    
    <fieldset>
        <legend> Add New User </legend>
        
        <form method="POST">
            First Name: <input type="text" name="first_name" /><br>
            Last Name: <input type="text" name="last_name" /><br>
            Hometown: <input type="text" name="hometown" /><br>
            Username: <input type="text" name="newUser" value="" /><br>
            Password: <input type="password" name="newPass" value="" /><br>
            <input type="submit" value="Add User" name="add" /><br />
            <input type="submit" value="Back" name="back" />
        </form>
    </fieldset>
    </body>
</html>