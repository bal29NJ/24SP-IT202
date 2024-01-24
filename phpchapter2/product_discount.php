<?php
//get the data from the form
//Debugging only
// print_r($_POST);

$product_description = filler_input
(INPUT_POST, 'product description');
$list_price = filler_input(INPUT_POST,
'list_price');
$discount_percent = filler_input(INPUT_POST,
'list_percent');
?>