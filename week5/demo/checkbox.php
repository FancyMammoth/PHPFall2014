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
         * For check boxes we do not need to put the value attribute in
         * the input fields.  We only need to put the names. Once a 
         * selection is made, it will pass the value "on".  We can check 
         * each checkbox to see if it has been selected.
         */
        
        
        print_r($_POST);
        
         $pep = filter_input(INPUT_POST, 'pep');
         $mush = filter_input(INPUT_POST, 'mush');
         $olv = filter_input(INPUT_POST, 'olv');
        
        echo isset($_POST['olv']);
         
         
        ?>
        
          <form action="#" method="post">
            
1. pep <input type="checkbox" name="pep"
    <?php
         if ( $pep == 'on' )    {
             echo 'checked="checked"';
         } 
              
      ?>        /> <br />
2. mush <input type="checkbox" name="mush" 
               <?php
         if ( $mush == 'on' )    {
             echo 'checked="checked"';
         } 
              
      ?>
               
               /> <br />
3. olv <input type="checkbox" name="olv" 
              
               <?php
         if ( $olv == 'on' )    {
             echo 'checked="checked"';
         } 
              
      ?>
              
              /> <br />

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
