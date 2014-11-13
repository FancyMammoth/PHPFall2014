<?php

if(empty($_POST))
        {
        $name = '';
        $phone = '';
        $email = '';
        $zip = '';
        $error_message = '';
        }
        
        if(empty($name)){
            $error_message .= 'name is a required field.';
        }
        
        if(empty($phone)){
            $error_message .= 'phone number is a required field';
        }
        else if (!is_numeric($phone)){
            $error_message .= 'please enter a valid phone number';
        }
        else if (strlen($phone) < 7){            
            $error_message .= 'please enter a valid phone number';
        }
        
        if (empty($email)){
            $error_message .= 'email is a required field';
        }
        else if (!valid_email($email)){
            $error_message .= 'please enter a valid email address';
        }
        
        if (empty($zip)){
            $error_message .= 'zip is a required field';
        }
        else if(!is_numeric($zip)){
            $error_message .= 'zip code must be numeric';
        }
        else if (strlen($zip) <5){
            $errror_message .= 'zip code must be at least 5 digits';
        }
        
        if(!empty($error_message)){
            include('index.php');
            exit();
        }
