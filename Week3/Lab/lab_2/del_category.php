<?php

global $db;
$category_name = $_post['category_name'];
//$category_id = $_post['category_id'];

if (empty($category_name) ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
    $results = false;
    require_once('database.php');
    $query = $db->prepare("alter table categories
              drop column :category_name");
    $query->bindParam(':category_name', $category_name, PDO::PARAM_STR);
    
    if ( $query->execute() && $query->rowCount() > 0 ) {                
        $results = true;
    }
    return $results;
}
    // Display the Product List page
    include('index.php');