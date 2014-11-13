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
         * works like the raido button.  instead of checked we use
         * selected="selected"
         */
        
        
        print_r($_POST);
        
         $card = filter_input(INPUT_POST, 'card');
         
        
        ?>
        
          <form action="#" method="post">
            
<select name="card">
    <option value="visa"
            <?php
                if ( $card === 'visa') {
                    echo 'selected="selected"';
                }
            ?>
            
            >Visa</option>
    <option value="mastercard"
            <?php
                if ( $card === 'mastercard') {
                    echo 'selected="selected"';
                }
            ?>
            
            >MasterCard</option>
    <option value="discover"
            <?php
                if ( $card === 'discover') {
                    echo 'selected="selected"';
                }
            ?>
            
            >Discover</option>
</select>

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
