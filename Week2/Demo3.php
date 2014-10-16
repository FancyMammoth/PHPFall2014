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
        
        <h1>My Form</h1>
        <form action="#" method="post">
                FName: <input type="test" name="fname"/> 
                LName: <input type="test" name="lname"/> 
                <input type="submit"/>
        </form>
        
        <?php
            $errorMsg ='';
            
            $errorMsgs = array(
            "fname" => "Please enter your first name.",
            "lname" => "Please enter your last name"
            );
            
            if ( !empty($_POST['fname']))
            {
                echo $_POST['fname'];
            }
            else
            {
                $errorMsgs['fname'];
            }
            
            
            
            if (isset($_POST['lname']))
            {
                echo $_POST['lname'];
            }
            
            else
            {
                $errorMsgs['lname'];
            }
            
            if( empty( $errorMsg) === false)
            {
                echo '<p>', $errorMsg , '</p>';
            }   
            
            
        ?>
    </body>
</html>
