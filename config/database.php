<?php
  class Database {
    private $host = 'localhost';
    private $db_name = 'restphp';
    private $username = 'restphp';
    private $password = 'j071312d';
    private $conn;
    public function getConnection(){
      $this->conn = null;
      try {
        $this->conn = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      }catch(PDOException $exception){
        echo "Conection error: " . $exception->getMessage();
      }
      return $this->conn;
    }
  }
