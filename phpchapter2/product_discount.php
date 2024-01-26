<?php
//get the data from the form
//Debugging only
// print_r($_POST);

$product_description = filler_input
(INPUT_POST, 'product description');
$list_price = filler_input(INPUT_POST,
'list_price');
$discount_percent = filler_input(INPUT_POST,'discount_percent');

$discount = $list_price * $discount_percent * 0.01;
$discount_price = $list_price = $discount;

$list_price_f = '$' . number_format($list_price, 2);
$discount_percent_f = $discount_percent . '%';
$discount_f = "$" . number_format($discount, 2);
$discount_price_f = '$' . number_format($discount_price, 2);
?>

<html>
    <head>
        <title>Product Discount Calculator</title>
    </head>
    <body>
        <h1>Product Discount Calculator</h1>
        <label>Product Description: </label>
        <span><?php echo htmlspecialchars($product_description); ?>
        </span> 
        <br>

        <label>List Price: </label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span>
        </br>

        <label>Discount Percent</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span>
        <br>

        <label>Discount Amount: </label>
        <span><?php echo $discount_f; ?></span>
        </br>

        <label>Discount Price: </label>
        <span><?php echo $discount_pricw_f?></span>
        </br>
    </body>
</html>


