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
        <form action="#" method="get">
                Name: <input type="test" name="fname"/> 
                <input type="submit"/>
        </form>
        
        <?php
        #var_dump($_GET);
        
        echo filter_input(INPUT_GET, 'fname');
        
        if(filter_input(INPUT_GET, 'fname') === 1)
        {
            echo '<p> this is one </p>';
        }
        elseif(filter_input(INPUT_GET, 'fname') != 1)
        {
            echo '<p> this is not one </p>';
        }
        ?>
    </body>
</html>
