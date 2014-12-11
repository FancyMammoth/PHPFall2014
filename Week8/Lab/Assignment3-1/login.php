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
        //session_start();
        include 'functions.php';
        include 'funcs.php';
        include 'header.php';
        
        
        
        $password = '';
        $email = '';
        
        $classobj = new funcs();
        
        if(!empty($_POST)){
        $password = $_POST['password'];
        $email = $_POST['email'];
        }
        
        //if (checkLogin($password, $email) == true)
        if ($classobj->checkLogin($password, $email) == true)
        {
            $_SESSION['loggedin'] = true;
            //header('location: admin.php');
        }
        var_dump($_SESSION);
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
        {
            header('location: admin.php');
        }
        
        ?>
        
        <form action="#" method="post">            
           Email: <input type="text" name="email" value="" />  
           <br />
           Password: <input type="password" name="password" value="" /> 
           <br />
            <input type="submit" value="submit" />            
        </form>
        <a href='signup.php'>Signup</a>
    </body>
</html>
