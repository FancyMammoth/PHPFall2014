<?php

class funcs {

public function execute ($email, $phone)
{
    $classobj = new funcs();
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $error_message = '';
    
    
    if (!empty($email) && !empty($phone))
    {
    $error_message.= $classobj->emailValid($email, $error_message);
    $error_message.= $classobj->checkEmail($email, $error_message);
    $error_message.= $classobj->checkLen($phone, $error_message);
    }
    
    else
    {
        $error_message = 'Email and phone are required fields.';
    }
    return $error_message;
    
}
    
    
    
public function emailValid ($email, $error_message)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
            $error_message .= 'please enter a valid email address </br>';
            return $error_message;
        }
        
}



//check if email exists in db
public function checkEmail ($email, $error_message)
    {
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");

        $dbs = $db->prepare('select * from signup where email = :email');     

        $dbs->bindParam(':email', $email, PDO::PARAM_STR);

         if ( $dbs->execute()) {
              if ($dbs->rowCount() > 0)
              {
                  $error_message .= 'The email you have entered is already in use </br>';
                  return $error_message;
              }
         }
    }
    
    
    
    //check phone length
    public function checkLen($phone, $error_message)
        {
            if (strlen($phone) < 7)
            {
                $error_message .= 'Please enter a valid phone number </br>';
                return $error_message;
            }
        }
        
   
        
}