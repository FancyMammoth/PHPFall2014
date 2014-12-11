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
        <?php
        session_start();
        include 'functions.php';
        
        $password = '';
        $email = '';
        
        if(!empty($_POST)){
        $password = $_POST['password'];
        $email = $_POST['email'];
        }
        
        if (checkLogin($password, $email) == true)
        {
            $_SESSION['loggedin'] = true;
            header('location: admin.php');
        }
        
        else
        {
            $_SESSION['loggedin'] = false;
        }
                
        
        ?>
        
        <form action="#" method="post">            
           Email: <input type="text" name="email" value="" />  
           <br />
           Password: <input type="password" name="password" value="" /> 
           <br />
            <input type="submit" value="submit" />            
        </form>
    </body>
</html>
