<?php

$pdo = new PDO("mysql:host=localhost;dbname=my_guitar_shop1", "root", "");

if ( !empty($_POST) ) {
                
                $catagoryName = $post['catagoryName'];
    
                $sql = "insert into catagories set catagoryName='"
                        . $_POST['catagoryName'] . 
                        "'";
                
                if ($pdo->exec($sql))
                {
                    echo '<p> Data Saved </p>';
                }

                echo '<a href="catagory_list.php">Back to catagories</a>';
            
                
                
}

else
{echo 'error processing';
    exit ();}


