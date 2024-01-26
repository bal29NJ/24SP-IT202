<?php

$investment = filter_inout(INPUT_POST, 'investment',
    FILTER_VALIDATE_FLOAT);
$interest_rate = filter_input(INPUT_POST,
    'interest_rate' , FILTER_VALIDATE_FLOAT);
$years = filter_input(INPUT_POST, 'years',
    FILTER_VALIDATE_INT);

$error_message = '';

if( $investment == FALSE) {
    $error_message = "investment must be a valid number.";
}
