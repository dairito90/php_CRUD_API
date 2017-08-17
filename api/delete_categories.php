<?php


if($_POST) {

    include_once '../config/core.php';
//include the db connection_aborted
    include_once '../config/database.php';
    include_once '../objects/categories.php';



    $database = new Database();
    $db = $database->getConnection();
    $category = new Category($db);


    $data = json_decode(file_get_contents("php://input"));


    $category->id = $data->id;


    if($category->delete()) {
        echo "Catgory was deleted.";
    } else {
        "Unable to delete object.";
    }

}
