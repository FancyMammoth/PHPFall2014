<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $result = $db->query($query);
    return $result;
}

function get_category_name($category_id) {
    global $db;
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
}

function add_category($category_name){
    global $db;
    $results = false;
    $dbs = $db->prepare('insert into categories'
                        . 'set category_name = :category_name');
    $dbs->bindParam(':category_name', $category_name, PDO::PARAM_STR);
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                
        $results = true;
    }
    return $results;
}

function del_category($catagory_name){
    global $db;
    $results = false;
    $dbs = $db->prepare('delete from categories'
                        . 'where category_name = :category_name');
    $dbs->bindParam(':category_name', $category_name, PDO::PARAM_STR);
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                
        $results = true;
    }
    return $results;
}
?>