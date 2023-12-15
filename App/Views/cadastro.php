<!DOCTYPE html>
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
            
            background-color: #f1f1f1;
            background-image: linear-gradient(160deg, #f1f1f1 0%, #24388b 70%);
        }

        .custom-form-group {
            margin-right: 32rem; /* Ajuste conforme necessário */
        
        }
        .custom-checkbox {
            margin-right: 29rem;
        }
        .custom-card-move {
            margin-top: 110px;
        }
       
       
        
    </style>

    <title>Cadastramento</title>
</head>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://i.postimg.cc/wjQk8dwr/gsaude.png" alt="Logo" width="70" height="70" class="rounded-circle">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: bold;" href="?router=registro/home/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="#">Marcar Exame</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="font-weight: bold;" href="?router=registro/sobre/">Sobre</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>


    </header>

        <body>
            <section class="h-50 d-flex align-items-center">
                <div class="container custom-card-move">
                    <div class="row justify-content-md-center ">
                        <div class="card-wrapper text-center col-md-7">
                            <div class="brand">
                                <!-- Seu conteúdo de marca vai aqui -->
                            </div>
                            <div class="card fat shadow-lg p-3 bg-white rounded-start">
                                <div class="card-body">
                                        
                                    <h2 class="card-title mt-2">Cadastramento</h2>
                                    <br>
                                    <form method="POST" action="?router=registro/cadastro">
                                        <div class="mb-3">
                                            <label for="validationDefault01" class="form-label custom-form-group"><strong>Nome</strong>:</label>
                                            <input type="text" class="form-control" id="validationDefault01" name="nome" placeholder="Digite seu nome completo" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationDefault02" class="form-label custom-form-group"><strong>CPF</strong>:</label>
                                            <input type="text" class="form-control" id="validationDefault02" name="cpf" placeholder="Digite seu CPF" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationDefault03" class="form-label custom-form-group"><strong>Telefone</strong>:</label>
                                            <input type="text" class="form-control" id="validationDefault03" name="telefone" placeholder="Digite seu telefone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationDefault04" class="form-label custom-form-group"><strong>Endereço</strong>:</label>
                                            <input type="text" class="form-control" id="validationDefault04" name="endereco" placeholder="Digite seu endereço" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationDefault05" class="form-label custom-form-group"><strong>Email</strong>:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                </div>
                                                <input type="email" class="form-control" id="validationDefault05" name="email" placeholder="Digite seu endereço de e-mail" aria-describedby="inputGroupPrepend2" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationDefault06" class="form-label custom-form-group"><strong>Senha</strong>:</label>
                                            <input type="password" class="form-control" id="validationDefault05" name="senha" placeholder="Digite sua senha" minlength="8" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                <label class="form-check-label"  for="invalidCheck2">
                                                Concordo com os termos e condições
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                                    </form>
                                </div>
                            </div>
                            <div class="footer mt-3">
                                <a target="_blank" href="https://github.com/OTalDoL2/PROJETO-PHP-MVC" style="color: white;"> Projeto PHP &copy; &mdash; ADS3B NOITE </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            
            <!--<script src="config/materialize/js/materialize.min.js"></script>!-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>
