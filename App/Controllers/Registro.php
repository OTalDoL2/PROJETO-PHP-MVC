<?php

namespace App\Controllers;

use App\Models\Crud;

class Registro extends Crud{
    public function login(){
        require_once __DIR__ . '/../Views/login.html';
    }
    
    public function tester(){
        require_once __DIR__ . '/../Views/you.php';
    }
    public function cadastro(){
        require_once __DIR__ . '/../Views/cadastro.php';
    }
    public function cadastra(){
        $cadastro = $this->create();
        require_once __DIR__ . '/../Views/login.html';
    }
    public function teste(){
        // $cadastro = $this->create();
        
        require_once __DIR__ . '/../Views/login.html';
    }
}


?>