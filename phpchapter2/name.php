<?php
    // Slide 6
    // get the data from the request
    $fist_name = $_GET['first name'];
    $last_name = $_GET['last_name'];
?>
<html>
    <head>
        <title>Name Test</title>
</head>
<body>
    <h2></h2>
    <p>First Name: <?php echo $first_name; ?></p>
    <p>Last Name: <?php echo $last_name; ?></p>
</body>
</html>