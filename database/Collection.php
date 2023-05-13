<?php 

class Connection{
    public static function make() {
        try{
            // Connection
            return $pdo = new PDO("mysql:host=localhost;dbname=todo", "admin", "123456");
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
 }

?>