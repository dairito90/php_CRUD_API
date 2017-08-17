<?php

if ($_POST) {
    //inclde our core confi
    include_once '../config/core.php';

//include the db connection_aborted
    include_once '../config/database.php';
    include_once '../objects/product.php';

    $database = new Database();
    $db = $database->getConnection();
    $product = new Product($db);


    $product->name= $_POST['name'];
    $product->price= $_POST['price'];
    $product->description= $_POST['description'];
    $product->category_id= $_POST['category_id'];

    echo $product->create() ? 'true' : 'false';
}

