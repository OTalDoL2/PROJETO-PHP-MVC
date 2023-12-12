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
                                    <h4 class="card-title">Cadastramento</h4>
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
                                                <label class="form-check-label" for="invalidCheck2">
                                                Concordo com os termos e condições
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Registrar</button>
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
        
            
            <!--<script src="config/materialize/js/materialize.min.js"></script>!-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>