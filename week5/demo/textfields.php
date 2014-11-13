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
        // put your code here
        
        /*
         * The idea here is to set our variables with a default
         * value before we check the post.  In the case
         * that we do not post a value we will not get an error
         * 
         * We echo out the values that are posted from the field 
         * so the user has a chance to edit the values and not
         * have to re-enter the values.
         */
        
        $textfield = '';
        $passwordfield = '';
        $hiddenfield = 'hey im here';
        
            if ( !empty($_POST) ) {
                $textfield = $_POST['textfield'];
                $passwordfield = $_POST['passwordfield'];
                $hiddenfield = $_POST['hiddenfield'];
            }
        
        ?>
       
        <form action="#" method="post">
            
            
<label>Text</label>
<input type="text" name="textfield" value="<?php echo $textfield; ?>" /><br />
    
<label>Text</label>
<input type="password" name="passwordfield" value="<?php echo $passwordfield; ?>" /><br />

<input type="hidden" name="hiddenfield" value="<?php echo $hiddenfield; ?>" /><br />
           
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
