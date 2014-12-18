<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        
        <?PHP
            include 'Funcs.php';
            //include 'header.php';
            
            $classobj = new funcs();
            $error_message = '';
            
            
        
            if (!empty($_POST))
            {
                $error_message = $classobj->execute($_POST['email'], $_POST['phone']);
                
                if (!empty($error_message))
                    {
                        echo $error_message;
                    }
                else
                    {
                        $comment = htmlentities($_POST['comments']);
                    
                        setcookie('email', $_POST['email']);
                        setcookie('phone', $_POST['phone']);
                        setcookie('heard', $_POST['heard_from']);
                        setcookie('contact', $_POST['contact_via']);
                        setcookie('comment', $comment);
                        
                        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

                        $dbs = $db->prepare('insert into account set email = :email, phone = :phone, heard = :heard,'
                                . ' contact = :contact, comments = :comment');     

                        $dbs->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                        $dbs->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR);
                        $dbs->bindParam(':heard', $_POST['heard_from'], PDO::PARAM_STR);
                        $dbs->bindParam(':contact', $_POST['contact_via'], PDO::PARAM_STR);
                        $dbs->bindParam(':comment', $comment, PDO::PARAM_STR);


                             if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                                  echo 'data saved';
                             }      
                             else {
                                 echo 'data not saved';
                             }
                        
                        header('location: display_results.php');
                    }
            }
            ?>
        
        
         <div id="content">
            <h1>Account Sign Up</h1>
            <form action="#" method="post">

            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?PHP if(empty($_POST)) {echo '';} else {echo $_POST['email'];}?>" class="textbox"/>
                <br />

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?PHP if(empty($_POST)) {echo '';} else {echo $_POST['phone'];}?>" class="textbox"/>
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard_from" value="Search Engine" checked ="checked" />
                Search engine<br />
                <input type="radio" name="heard_from" value="Friend" />
                Word of mouth<br />
                <input type=radio name="heard_from" value="Other" />
                Other<br />

                <p>Contact via:</p>
                <select name="contact_via">
                        <option value="email">Email</option>
                        <option value="text">Text Message</option>
                        <option value="phone">Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50" ><?PHP if(empty($_POST)) {echo '';} else {echo $_POST['comments'];}?></textarea>
            </fieldset>

            <input type="submit" value="Submit" />

            </form>
            
            
            <br />
        </div>
    </body>
</html>
