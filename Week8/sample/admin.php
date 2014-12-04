<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1> Admin Page</h1>
        
        <a href="?logout=true">Logout</a>
        <?php
        session_start();
        
        if (empty($_SESSION['loggedin']) || $_SESSION['loggedin'] = false)
        {
            header('location: login.php');
        }
        
        
        if ( !empty($_GET) ) {
                if ( $_GET['logout'] === 'true' ) {
                    $_SESSION['loggedin'] = false; 
                    header('Location: login.php');
                }
        }
        
        
        ?>
    </body>
</html>
