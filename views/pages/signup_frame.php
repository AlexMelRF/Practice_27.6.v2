<?php

use App\services\View;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorithation and registration</title>
    <link rel="stylesheet" href="styles/style_template.css">
    <link rel="stylesheet" href="styles/style_profile.css">
</head>
<body>
    <?php
    View::set_content('signup');
    ?>
</body>

