<?php
/**
 * Created by PhpStorm.
 * User: Dairon Rodriguez
 * Date: 8/16/2017
 * Time: 5:47 PM
 */
if($_POST) {
    //inclde our core confi
    include_once '../config/core.php';
//include the db connection_aborted
    include_once '../config/database.php';
    include_once '../objects/product.php';



    $database = new Database();
    $db = $database->getConnection();
    $product = new Product($db);


    $data = json_decode(file_get_contents("php://input"));


    $product->id = $data->id;


    if($product->delete()) {
        echo "Product was deleted.";
    } else {
        "Unable to delete object.";
    }

}
