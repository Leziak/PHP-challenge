<?php

include 'lib/data-functions.php';

$item = $_GET['item_id'];

$data = get_data($item);

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse bg-inverse">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="list.php">List</a>
        </nav>
        <h1>Programming language detail</h1>
        <div class="container">
            <label for="">Name: <strong><?= $data['name'] ?></strong></label>
            <label for="">Description: <strong><?= $data['description'] ?></strong></label>
            <label for="">Paradigm: <strong><?= $data['paradigm'] ?></strong></label><br>
            <label for="">Used in: 
                <?php foreach($data['branches'] as $branch) : ?>
                    <li style="margin-left: 30px;"><strong><?= $branch ?></strong></li>
                <?php endforeach; ?>                
                </label>
                        
            
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
        <script src="js/index.js" async defer></script>
    </body>
</html>