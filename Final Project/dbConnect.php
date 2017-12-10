<?php


function getDatabaseConnection(){
    
    // $dbHost = 'localhost';//cloud 9
    // $dbPort = '3306';
    // $dbName = 'hlm';
    // $username = 'connmatt';
    // $password = 'cst336';
    //using different database variables in Heroku
   // if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $dbHost = getenv('DATABASE_HOST');
        $dbPort = getenv('DATABASE_HOST');
        $dbName = getenv('DATABASE_NAME');
        $username = getenv('USERNAME');
        $password = getenv('PASSWORD');
   //} 
    
    //creates db connection
    $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn;
    
}


?>