<?php
    // Get rid of the cookie first
    if(isset($_COOKIE[session_name()])):
        setcookie(session_name(), '', time()-7000000, '/');
    endif;
    
    // Then get rid of all evidence the session existed
    session_destroy();
    
    // Redirect
    header("Location: login.php");
?>