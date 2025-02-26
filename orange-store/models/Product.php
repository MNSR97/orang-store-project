<?php
    require_once __DIR__."/../config/database.php";

    class Product{
        private $conn;


        public function __construct(){
            $this->conn = database::getInstance();
        } 
        public function getProducts(){
            $stmt = $this->conn->query("SELECT * FROM product");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>