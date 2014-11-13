<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        /*
         * textarea forms do not have a value attribute.  so the
         * value posted to a textarea must go in between the textarea
         * tags.
         * 
         * Before echoing a persons input (never trust user input) we
         * want to santize the data with htmlspecialchars.
         * 
         * nl2br = new line to break line (/n => <br />)
         */
        print_r($_POST);
        
         $comments = filter_input(INPUT_POST, 'comments');
         
         $comments = htmlspecialchars($comments);
         
         
         echo nl2br($comments);
        
        ?>
        
        
        
          <form action="#" method="post">
            
<textarea name="comments"><?php echo $comments;?></textarea>

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
