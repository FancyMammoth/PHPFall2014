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
        include 'functions.php';
        include 'funcs.php';
        include 'header.php';
        
        $classobj = new funcs();
        $error_message = '';
        
                
        if ( !empty($_POST) ) {
                
                //var_dump($_POST);
                $password = $_POST['password'];
                $email = $_POST['email'];
                
                
                
                if(empty($_post['email'])){
                    $error_message .= '<p>email is a required field.</p>';
                }
                if(empty($_post['password'])){
                    $error_message .= '<p>password is a required field.</p>';
                }
                
                //if (checkLen($password, $email) == false)
                if ($classobj->checkLen($password, $email) == false)
                {
                    $error_message .= '<p>please enter at least 4 characters for email and password</p>';
                }
                
                //if (checkEmail($email) == false)
                if ($classobj->checkEmail($email) == false)
                {
                    $error_message .= '<p>The email you have entered is already in use please try another</p>';
                }
                
                if (empty ($error_message) )
                {
                  
                        
                    $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

                    $dbs = $db->prepare('insert into signup set email = :email, password = :password');     

                    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
                    $password = $classobj->hashPass($password);
                    $dbs->bindParam(':password', $password, PDO::PARAM_STR);

                         if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                              echo 'data saved';
                         }      
                         else {
                             echo 'data not saved';
                         }
                    echo 'The email you have entered is in use please try another!';
                        

                        
                        
                    }
                }    
                
                else{
                    echo $error_message;
                }
                
                
                
            
        ?>
        
        <form action="#" method="post">            
           Email: <input type="text" name="email" value="" />  
           <br />
           Password: <input type="password" name="password" value="" /> 
           <br />
            <input type="submit" value="submit" />            
        </form>
        <a href='login.php'>return to login</a>
    </body>
</html>
