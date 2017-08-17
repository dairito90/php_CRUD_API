<?php
  //inclde our core confi
  include_once '../config/core.php';

  //include the db connection_aborted
  include_once '../config/database.php';
  include_once '../objects/categories.php';

  $database = new Database();
  $db = $database->getConnection();

  $category = new Category($db);
  $category->id= $_POST['category_id'];
  $results = $category->readOne();

  echo $results;
