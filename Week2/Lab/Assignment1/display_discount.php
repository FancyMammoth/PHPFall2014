<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <?php
            
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        
        //validate description
        
        if ( empty($desc) ) {
            $error_message = 'Description is a required field.'; 
            exit();
        }
        else if ( !is_string($desc) )  {
            $error_message = 'Investment must be a valid number.'; 
            exit();
        }
            
        //validate price and discount
            
        else if (!is_numeric($price)){
            $error_message = 'Price must be a numeric value';
            exit();}
        else if (!is_numeric($discount)){
            $error_message = 'Discount must be a numeric value';
            exit();}
        
                
        $discPct = $discount / 100;
        $discAmt = $price * $discPct;
        $discPrice = $price - $discAmt;
        
        //var_dump($discAmt);
        
    ?>
    
    <div id="content">
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $desc; ?></span><br />

        <label>List Price: $</label>
        <span><?php echo number_format($price, 2); ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount .= '%'; ?></span><br />

        <label>Discount Amount: $</label>
        <span><?php echo number_format($discAmt, 2); ?></span><br />

        <label>Discount Price: $</label>
        <span><?php echo number_format($discPrice, 2); ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>