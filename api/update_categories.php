<?php




if ($_POST) {
    //inclde our core confi
    include_once '../config/core.php';

//include the db connection_aborted
    include_once '../config/database.php';
    include_once '../objects/categories.php';

    $database = new Database();
    $db = $database->getConnection();
    $category = new Category($db);


    $catgory->name= $_POST['name'];
    $catgory->description= $_POST['description'];
    $catgory->id = $_POST['id'];

    echo $category->update() ? 'true' : 'false';
}
