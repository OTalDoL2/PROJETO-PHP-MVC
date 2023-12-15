<?php

namespace App\Controllers;

use App\Models\Crud;

class Registro extends Crud{

    public function home(){
        require_once __DIR__ . '/../Views/home.php';
    }
    public function login(){
        require_once __DIR__ . '/../Views/login.html';
    }

    public function sobre(){
        require_once __DIR__ . '/../Views/sobre.php';
    }
    
    public function exibirModal($titulo, $mensagem,$textoBotao){
        require_once __DIR__ . '/../Views/exibirModal.html';
        echo "<script>
                $(document).ready(function(){
                    $('#modalTitulo').text('$titulo');
                    $('#modalCorpo').text('$mensagem');
                    $('#modalBotao').text('$textoBotao');
                    $('#modal').modal('show');
                });
              </script>";
    }

    public function tester(){
        require_once __DIR__ . '/../Views/you.php';
    }
    public function cadastro(){
        $cadastro = $this->create();
        require_once __DIR__ . '/../Views/cadastro.php';
        if($cadastro === true){
        $titulo = "Cadastro";
        $mensagem = "Registrado com Sucesso!";
        $textoBotao = "Clique Aqui para Logar";
        $this->exibirModal($titulo, $mensagem,$textoBotao);
        }
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
            $titulo = "Erro de Login";
            $mensagem = "Email ou Senha Inválidos!";
            $textoBotao = "Tente Novamente";
            $this->exibirModal($titulo, $mensagem,$textoBotao);
        }
    }

    public function perfil(){
        require_once __DIR__ . '/../Views/perfil.php';
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