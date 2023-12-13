<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $host = "localhost";
        $db   = "projeto_mvc";
        $user = "root";
        $pass = "";

        try{
            $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

            //define tratamento de erros
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM usuarios WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email',$email, PDO::PARAM_STR);

            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if($row){
                $emailPDO = $row['email'];
                $senhaPDO = $row['senha'];

                if ($senha == $senhaPDO) {
                    session_start();
                    $_SESSION['email'] = $emailPDO;
                    header("location: dashboard.php");
                }else{
                    echo "Senha incorreta!";
                }

            }else{
                echo "Email incorreto!";
            }
        }catch(PDOException $e){
            echo"Erro: " . $e->getMessage();
        }

    }else{
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!--<link rel="stylesheet" type="text/css" href="config/materialize/css/materialize.min.css"></!-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <style>
                body,
                html {
                    height: 100%;
                    margin: 0;
                }
        
                section {
                    min-height: 100%;
                }
        
                body {
                    margin-bottom: 50px;
                    background-color: #f1f1f1;
                }
        
                .custom-form-group {
                    margin-right: 28rem; /* Ajuste conforme necessário */
                }
                .custom-checkbox {
                    margin-right: 25rem;
                }
            </style>
        
            <title>PROJETOMVC</title>
        </head>
            <header>
        
        
            </header>
        
                <body>
                    <section class="h-100 d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="card-wrapper text-center col-md-5">
                                    <div class="brand">
                                        <!-- Seu conteúdo de marca vai aqui -->
                                    </div>
                                    <div class="card fat shadow-lg p-3 bg-white rounded-start">
                                        <div class="card-body">
                                                 <div class="mb-2">
                                                    <img src="assets/ok.png" alt="Logo" width="150" height="100">
                                                    <p class="text-info"><strong>GUIA SAÚDE</strong></p>
                                                </div>
                                            <h4 class="card-title">Login de Acesso</h4>
                                            <br>
                                            <form method="POST" class="my-login-validation" novalidate="" action="login.php">
                                            <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label custom-form-group">Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu endereço de e-mail">
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label custom-form-group">Senha</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
                                                </div>
                                                <div class="mb-3 form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Lembrar</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        
                                                <div class="text-center">
                                                    <br>
                                                    <a href="?router=Registro/cadastro/"><p>Não possui uma conta?</p></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer mt-3">
                                        <a target="_blank" href="https://github.com/SantiagoRafael1"> Projeto PHP &copy; &mdash; ADS3B NOITE </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
          
                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalCentralizado">Erro de conexão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Você não tem permissão para acessar o site!
                            </div>
                            <div class="modal-footer">
                            <a href="login.html" class="btn btn-primary">Salvar mudanças</a>
                            </div>
                        </div>
                        </div>
                    </div>
                            
                    
                    <!--<script src="config/materialize/js/materialize.min.js"></script>!-->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script>
                    $("#modal").modal("show")
                </script>
                </body>
        </html>';
    }

?>