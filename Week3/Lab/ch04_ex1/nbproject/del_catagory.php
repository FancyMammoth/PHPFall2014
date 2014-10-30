<?php

$pdo = new PDO("mysql:host=localhost;dbname=my_guitar_shop1", "root", "");

if ( !empty($_POST) ) {
               
                $catagoryName = $post['catagoryName'];
    
                $sql = "DELETE FROM catagories
                        WHERE catagoryName = '$catagoryName'";
                
                if ($pdo->exec($sql))
                {
                    echo '<p> Data Deleted </p>';
                }

                echo '<a href="catagory_list.php">Back to catagories</a>';
                
}

else
{echo 'error processing';
    exit ();}

