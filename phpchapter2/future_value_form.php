<?php

    if(!isset($investment)) { $investment =''; }
    if(!isset($interest_rate)) { $interest_rate =''; }
    if(!isset($years)) { $years =''; }
?>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <main>
    <h1>Future Value Calculator<h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error">
            <?php echo htmlspecialchars($error_message) ; ?>
    </p>
    <?php } ?>