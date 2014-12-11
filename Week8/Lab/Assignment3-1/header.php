
<a href="signup.php">signup</a>

<?php
session_start();
if ( !empty($_SEESION['loggedin']) ) {
   echo '<a href="?logout=true">logout</a>';
    
} else {
    echo '<a href="login.php">Log-in</a>';
}
?>

