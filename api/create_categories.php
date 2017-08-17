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


    $category->name= $_POST['name'];
    $category->description= $_POST['description'];

    echo $category->create() ? 'true' : 'false';
}
