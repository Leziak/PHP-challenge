<?php

include 'lib/data-functions.php';

$item = $_GET['item_id'];

$data = get_data($item);

$name = $_POST['name'];
$description = $_POST['description'];
$paradigm = $_POST['paradigm'];
$branches = [];
foreach($_POST['branch'] as $branch){
    $branches[] = $branch;
}

$new_data = ['name'=>$name, 'description'=>$description, 'paradigm'=>$paradigm, 'branches'=>$branches];

update_data($item, $new_data)

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
                <input type="text" id="name" name="name" value=<?= $data['name'] ?>>
            </div>
            <label for="description">Description:</label>
            <div>
                <textarea name="description" id="description" cols="30" rows="10"><?= $data['description'] ?></textarea>
            </div>
            <label for="paradigm">Paradigm:</label>
            <div class="d-flex flex-row">
                <div class="radio"><input type="radio" name="paradigm" value="Functional" <?php echo $data['paradigm']==='Functional' ? 'checked ' : null ?>> Functional</div>
                <div class="radio"><input type="radio" name="paradigm" value="Object-oriented" <?php echo $data['paradigm']==='Object-oriented' ? 'checked ' : null ?>> Object-oriented</div>
                <div class="radio"><input type="radio" name="paradigm" value="Multi-paradigm" <?php echo $data['paradigm']==='Multi-paradigm' ? 'checked ' : null ?>> Multi-paradigm</div>
            </div>
            <label for="branch">Branch:</label>
            <div class="d-flex flex-row flex-wrap">
                <div class="check"><input type="checkbox" name="branch[0]" value="Client-side web development" <?php echo in_array('Client-side web development', $data['branches']) ? 'checked' : null ?>> Client-side web development</div>
                <div class="check"><input type="checkbox" name="branch[1]" value="Server-side web development" <?php echo in_array('Server-side web development', $data['branches']) ? 'checked' : null ?> > Server-side web development</div> 
                <div class="check"><input type="checkbox" name="branch[2]" value="Android development" <?php echo in_array('Android development', $data['branches']) ? 'checked' : null ?>> Android development</div>
                <div class="check"><input type="checkbox" name="branch[3]" value="iOS development" <?php echo in_array('iOS development', $data['branches']) ? 'checked' : null ?>> iOS development</div>
                <div class="check"><input type="checkbox" name="branch[4]" value="Data science" <?php echo in_array('Data science', $data['branches']) ? 'checked' : null ?>> Data science</div>
                <div class="check"><input type="checkbox" name="branch[5]" value="Application development" <?php echo in_array('Application development', $data['branches']) ? 'checked' : null ?>> Application development</div>
                <div class="check"><input type="checkbox" name="branch[6]" value="Embedded systems" <?php echo in_array('Embedded systems', $data['branches']) ? 'checked' : null ?>> Embedded systems</div>
            </div>
            <button name="submit" type="submit" form="form" value="Submit">Submit form</button>
        </form>
        
    </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
        <script src="js/index.js" async defer></script>
    </body>
</html>