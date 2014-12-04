<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <?php
         
         
         
             $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            
         
            if ( !empty($_POST) ) {
                
                var_dump($_POST);
                
                $error_message = '';
                
                if(empty($_post['fullname'])){
                    $error_message .= '<p>name is a required field.</p>';
                }
                if(empty($_post['phone'])){
                    $error_message .= '<p>phone is a required field.</p>';
                }
                if(empty($_post['email'])){
                    $error_message .= '<p>email is a required field.</p>';
                }
                if(empty($_post['zip'])){
                    $error_message .= '<p>zip is a required field.</p>';
                }
                if (empty ($error_message) )
                {
                    $insert = "insert into users set fullname='"
                            . $_POST['fullname'] . 
                            "', email = '".$_POST['email']."', phone = '".$_POST['phone']."', zip = '".$_POST['zip']."';";
           
                
            
                    if ( $pdo->exec($insert) ) {
                        echo 'Saved Data';                    
                    } else {
                        echo 'Data not saved';
                        var_dump($pdo->errorInfo());
                    }
                }    
                
                else{
                    echo $error_message;
                }
                
                
            }
                        
            
        ?>  
        
        <form action="#" method="post">            
           fullname: <input type="text" name="fullname" value="" />  
           <br />
           email: <input type="text" name="email" value="" /> 
           <br />
           phone number: <input type="text" name="phone" value="" />        
           <br />
           zip: <input type="text" name="zip" value="" />            
           <br />
            <input type="submit" value="submit" />            
        </form>
        
        
       
    </body>
</html>
