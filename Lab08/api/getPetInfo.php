<?php

    include 'dbConnect.php';
    $dbConn = getDatabaseConnection("adoptees");    
    $sql = "SELECT *,  
            FROM adoptees 
            WHERE id = :id";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute(array("id"=>$_GET['id']));
    $resultSet = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($resultSet);
        
?>