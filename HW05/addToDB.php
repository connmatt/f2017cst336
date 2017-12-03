<?php

include 'dbConnect.php';

$conn = getDatabaseConnection("HW05");

$start = $_POST['start_time'];
$end = $_POST['end_time'];
$mag = $_POST['magnitude'];

$sql = "INSERT INTO search_info (start_time, end_time, magnitude)
                    VALUES('$start_time', '$end_time', '$magnitude')";
        
$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);

//print_r($result);

echo json_encode($result);

?>


        
        if ($fName == "" || $lName == "" || $htown == "" || $un == "" || $pw == ""){
            echo "<h1>Please fill out all criteria while adding a new user.<h1>";   
        }
        else{
        
            $sql = "INSERT INTO users (firstName, lastName, hometown, username, password)
                    VALUES('$fName', '$lName', '$htown', '$un', '$pw')";
             } 