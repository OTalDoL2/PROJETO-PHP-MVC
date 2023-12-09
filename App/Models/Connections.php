<?php

namespace App\Models;

class Connections {

    private $db_name = 'mysql:host=localhost;dbname=aula_mvc'; 
    private $user = 'root'; 
    private $pass = ''; 

    protected function connect() {
        try {
            $conn = new \PDO($this->db_name, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;
        } 
        catch(\PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}

?>