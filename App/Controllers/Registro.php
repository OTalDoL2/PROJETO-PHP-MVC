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
        $cadastro = $this->create();
        require_once __DIR__ . '/../Views/cadastro.php';
    }
    public function dashboard(){
        $loginSuccess = $this->verificaLogin();
    
        if ($loginSuccess) {
            // O login foi bem-sucedido, redirecione ou faça o que for necessário
            //header("location: dashboard.php");
            // exit();
            require_once __DIR__ . '/../Views/dashboard.php';
        } else {
            // O login falhou, talvez exiba uma mensagem ou faça algo diferente
            require_once __DIR__ . '/../Views/pageErro.html';
        }
    }
    // public function cadastra(){
    //     require_once __DIR__ . '/../Views/login.html';
    // }
    // public function teste(){
    //     // $cadastro = $this->create();
        
    //     require_once __DIR__ . '/../Views/login.html';
    //testano aqui
    // }
}


?>