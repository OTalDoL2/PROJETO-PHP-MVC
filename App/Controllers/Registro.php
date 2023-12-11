<?php

namespace App\Controllers;

use App\Models\Crud;

class Registro extends Crud{
    public function login(){
        require_once __DIR__ . '/../Views/login.php';
    }
    
    public function tester(){
        require_once __DIR__ . '/../Views/you.php';
    }
    public function cadastro(){
        require_once __DIR__ . '/../Views/cadastro.php';
    }
}


?>