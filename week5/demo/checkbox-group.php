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
         * More advanced way of dealting with checkboxes in groups.
         * 
         * We set the name as an array so all the ones selected are passed
         * as an array.  We then get the post array values and check for
         * "tops".  We then use tops to check if the value is inside the
         * array.
         */
        
        
        print_r($_POST);
        
            
         $postValues = filter_input_array(INPUT_POST);
         $tops = array();
         if (is_array($postValues) && array_key_exists('tops', $postValues ) ) {
             $tops = $postValues['tops'];
         }
         
         print_r($tops);
        
        ?>
        
          <form action="#" method="post">
            
1. pep <input type="checkbox" name="tops[]" value="pep"
               <?php
               if ( is_array($tops) && in_array('pep', $tops ) ) {
                    echo 'checked="checked"';
                }
               
               ?>
               
               /> <br />
2. mush <input type="checkbox" name="tops[]" value="mush" 
               <?php
               if ( is_array($tops) &&  in_array('mush', $tops ) ) {
                    echo 'checked="checked"';
                }
               
               ?>
               /> <br />
3. olv <input type="checkbox" name="tops[]" value="olv"
               <?php
               if ( is_array($tops) &&  in_array('olv', $tops ) ) {
                    echo 'checked="checked"';
                }
               
               ?>
              
              /> <br />

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
