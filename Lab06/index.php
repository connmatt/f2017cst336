<?php

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Log in </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Admin Login </h1>
        <form method="POST" action="process.php">
            Username: <input type="text" value="admin" name="username" /><br />
            Password: <input type="password" value="s3cr3t" name="password" /><br />
            <input type="submit" value="Login" name="loginForm" >
        </form>
        <hr>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>