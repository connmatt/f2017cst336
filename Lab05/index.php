<?php

include 'databaseConnect.php';

$conn = getDatabaseConnection();

function getDeviceTypes() {
    global $conn;
    $sql = "SELECT DISTINCT(deviceType)
            FROM `device` 
            ORDER BY deviceType";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        
        echo "<option> "  . $record['deviceType'] . "</option>";
        
    }
}


function displayDevices(){
    global $conn;
    
    $sql = "SELECT * FROM `device` WHERE 1";
    
    
   if (isset($_GET['submit'])){
        
        $namedParameters = array();
        
        
        if (!empty($_GET['deviceName'])) {
            
            //The following query allows SQL injection due to the single quotes
            //$sql .= " AND deviceName LIKE '%" . $_GET['deviceName'] . "%'";
  
            $sql .= " AND deviceName LIKE :deviceName"; //using named parameters
            $namedParameters[':deviceName'] = "%" . $_GET['deviceName'] . "%";

        }
         
        if (!empty($_GET['deviceType'])) {
            
            //The following query allows SQL injection due to the single quotes
            //$sql .= " AND deviceName LIKE '%" . $_GET['deviceName'] . "%'";
  
            $sql .= " AND deviceType = :dType"; //using named parameters
            $namedParameters[':dType'] =   $_GET['deviceType'];

        }     
         
        if (isset($_GET['available'])) {
            // I couldn't find a way to choose one or the other, but i was able to sort them by asc order
            $sql  = " SELECT * FROM `device` ORDER BY `status` ASC ";    
        }
        
         if(isset($_GET['orderBy'])){
             if($_POST['orderBy'] == 'name'){
                $sql = " SELECT * FROM 'device' ORDER BY 'deviceName' ASC ";
             }
             
             else if($_POST['orderBy'] == 'price'){
                 $sql = " SELECT * FROM 'device' ORDER BY 'price' ASC ";
             }
         }
        
        
    }//endIf (isset)
    
    //If user types a deviceName
     //   "AND deviceName LIKE '%$_GET['deviceName']%'";
    //if user selects device type
      //  "AND deviceType = '$_GET['deviceType']";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
     foreach ($records as $record) {
        
        echo  "<a><strong>" . "Device Name: " . "</strong></a>". $record['deviceName'] . " " .
            "<a><strong>" .  "Device Type: " . "</strong></a>" . $record['deviceType'] . " " . "<br></br>" .
            "<a> <strong>" . "Price: " . "</strong></a>" . $record['price'] .  "  " . "<a><strong>" . "Status: " . "</strong></a>" . $record['status'].
            "<br> </br>" . "<br></br>"; 
              //"<a target='checkoutHistory' href='checkoutHistory.php?deviceId=".$record['deviceId']."'> Checkout History </a> <br />";
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Device Search </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <h1> Technology Center: Checkout System </h1>
        
        <form>
            Device: <input type="text" name="deviceName" placeholder="Device Name"/><br />
            Type: 
            <select name="deviceType">
                <option>Select One</option>
                <?=getDeviceTypes()?>
            </select>

            <input type="checkbox" name="available" id="available">
            <label for="available"> Available </label>
            
            <br>
            Order by:
            <input type="radio" name="orderBy" id="orderByName" value="name"/> 
             <label for="oderByName"> Name </label>
            <input type="radio" name="orderBy" id="orderByPrice" value="price"/> 
             <label for="oderByPrice"> Price </label>
            
            
            
            <input type="submit" value="Search!" name="submit" >
        </form>
        
        
        <hr>
        
        <?=displayDevices()?>
        
        

    </body>
</html>