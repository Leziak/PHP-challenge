<?php

include 'lib/data-functions.php';


$name = $_POST['name'];
$description = $_POST['description'];
$paradigm = $_POST['paradigm'];
$branches = [];
foreach($_POST['branch'] as $branch){
    $branches[] = $branch;
}

$data = ['name'=>$name, 'description'=>$description, 'paradigm'=>$paradigm, 'branches'=>$branches];

insert_data($data);

header("Location:list.php");

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
    <h1>Programming languages database</h1>

    <div class="container">
        <form id="form" class="d-flex flex-column" action="index.php" method="post">
            <label for="name">Name:</label>
            <div>
                <input type="text" id="name" name="name">
            </div>
            <label for="description">Description:</label>
            <div>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <label for="paradigm">Paradigm:</label>
            <div class="d-flex flex-row">
                <div class="radio"><input type="radio" name="paradigm" value="Functional"> Functional</div>
                <div class="radio"><input type="radio" name="paradigm" value="Object-oriented"> Object-oriented</div>
                <div class="radio"><input type="radio" name="paradigm" value="Multi-paradigm"> Multi-paradigm</div>
            </div>
            <label for="branch">Branch:</label>
            <div class="d-flex flex-row flex-wrap">
                <div class="check"><input type="checkbox" name="branch[0]" value="Client-side web development"> Client-side web development</div>
                <div class="check"><input type="checkbox" name="branch[1]" value="Server-side web development"> Server-side web development</div> 
                <div class="check"><input type="checkbox" name="branch[2]" value="Android development"> Android development</div>
                <div class="check"><input type="checkbox" name="branch[3]" value="iOS development"> iOS development</div>
                <div class="check"><input type="checkbox" name="branch[4]" value="Data science"> Data science</div>
                <div class="check"><input type="checkbox" name="branch[5]" value="Application development"> Application development</div>
                <div class="check"><input type="checkbox" name="branch[6]" value="Embedded systems"> Embedded systems</div>
            </div>
            <button name="submit" type="submit" form="form" value="Submit">Submit form</button>
        </form>
        
    </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
        <script src="js/index.js" async defer></script>
    </body>
</html>
