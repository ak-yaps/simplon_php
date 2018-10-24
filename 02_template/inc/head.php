<?php include("data.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $config->title_app ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <script src="js/dom.js"></script>
    <script src="js/persos.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/app.js"></script>z
</head>
<body>
    <header id="grid_header">
        <h2 class="title">
            <i class="clickable fa fa-bars fa-lg"></i>
            <span><?php echo $config->title_app ?></span>
        </h2>
    </header>

    <?php include("nav.php") ?>
