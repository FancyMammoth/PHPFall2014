<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
         
         /*
          * PDO instance object.
          * use -> to access functions within the object          
          */
          $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            
          /*
           * The SQL statement is used to query the database
           */
           $statement = $pdo->query('select * from users');
           
           /*
            * Once the query is made you can fetch the data.
            * I recommend to get the array back as an associative
            * array
            */
           
           $users = $statement->fetchAll(PDO::FETCH_ASSOC);
            print_r($users);
           
           /*
            * It returns a multidimentional array so we have a foreach loop
            * within another foreach loop
            */
            echo '<table border="1">';
            foreach($users as $user) {
                echo '<tr>';
                foreach($user as $key => $value) {
                    echo '<td>', $key , ' = ', $value, '</td>';
                }
                echo '<td> <button action = "del_catagory.php">delete</button> </td>';
              echo '</tr>';
            }
            echo '</table>';
           
              
            
        ?>  
               
    </body>
</html>
