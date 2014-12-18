<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        
        <?PHP 
            //include 'header.php';
            var_dump($_POST);
            $email = $_COOKIE['email'];
            $phone = $_COOKIE['phone'];
            $heard = $_COOKIE['heard'];
            $contact = $_COOKIE['contact'];
            if(!empty($_COOKIE['comment']))
            {
                $comments = $_COOKIE['comment'];
            }
            else
            {
                $comments = '';
            }
            
        
        ?>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?PHP echo $email; ?></span><br />
            
            <label>Phone Number:</label>
            <span><?PHP echo $phone; ?></span><br />

            <label>Heard From:</label>
            <span><?PHP echo $heard; ?></span><br />

            <label>Contact Via:</label>
            <span><?PHP echo $contact; ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?PHP echo $comments;?></span><br />
            
            <a href="table.php">Show Users</a>

        </div>
    </body>
</html>
