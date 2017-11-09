<?php

session_start();

if(!isset($_SESSION['username '])){ 
    header("Location: index.php"); 
    exit;
}

function displayUsers(){
    include 'dbConnect.php';
    $dbConn = getDatabaseConnection();
    $sql = "SELECT *
            FROM users
            ORDER BY lastName";
        
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    return $users;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> Admin Section </title>
    <script>

            function confirmDelete() {
                
                return confirm("Are you sure you want to delete this author?");
                
                
            }            
            
        </script>
</head>
<body>
    <h1> Administration Page</h1>
    <h2> Welcome <?=$_SESSION[adminFullName]?>! </h2>
    
    <br >
    
    <form action="addUser.php">
        <input type="submit" value="Add User" />
    </form>
    
    <form action= "index.php">
        <input type="submit" value="Logout"/>
    </form>
    
    <br /><br />
    
    <?php
    $users = displayUsers();
    echo "<table>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th> User ID </th>";
    echo "<th> Name </th>";
   // echo "<th> Last Name </th>";
    echo "<th> Edit User </th>";
    echo "<th> Delete User</th>";
    echo "</tr>";
    foreach($users as $user){
        echo "<tr>";
        echo "<td>" . $user['userId'] . "</td>";
        echo "<td><a href='userInfo.php?userId=".$user['userId']."'>".$user['firstName'] . " " . $user['lastName']."</td>";
        echo "<td>[<a href='updateUser.php?userId=".$user['userId']."'>Edit</a>] </td>";
        echo "<td><form style='display:inline' action='deleteUser.php' onsubmit='return confirmDelete()'>
                    <input type='hidden' name='userId' value='".$user['userId']."'>
                    <input type='submit' value='Delete'>
                  </form> </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>