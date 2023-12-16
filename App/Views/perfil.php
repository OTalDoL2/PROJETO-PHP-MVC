<?php
    $conn = $this->connect();
        
    $query = "SELECT * FROM usuarios WHERE logado = 1";


    // Prepara a consulta
    $stmta = $conn->prepare($query);

    $stmta->execute();

    $resultados = $stmta->fetch();
    // $resultados = $resultados[0];
    

   

    $nomeEditavel = $resultados[1];
    $cpfEditavel = $resultados[2];
    $telefoneEditavel = $resultados[3];
    $enderecoEditavel = $resultados[4];
    $emailEditavel = $resultados[5];
    $senhaEditavel = $resultados[6];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="config/materialize/css/materialize.min.css"></!-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>

        body{
            background-color: #f4f5f7;
        }
        .custom-form-group {
            margin-right: 32rem; /* Ajuste conforme necessário */
        }
        .custom-checkbox {
            margin-right: 30rem;
        }
        .custom-card-style {
        margin-top: 50px; /* Ajuste a margem superior conforme necessário para diminuir a altura */
        margin-bottom: 20px; /* Ajuste a margem inferior conforme necessário para diminuir a altura */
        }
        .gradient-custom {
         
        background: #24388b;

        background: -webkit-linear-gradient(to right bottom, #f1f1f1, #24388b);
        background: linear-gradient(to right bottom, #f1f1f1, #24388b);
        
        }
        .custom-move-carta{
            margin-top: 20vh;
        }
       

    </style>

    <title>PROJETOMVC</title>
</head>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <!-- Aqui você pode adicionar a sua imagem -->
                    <img src="https://i.postimg.cc/wjQk8dwr/gsaude.png" alt="Logo" width="70" height="70" class="rounded-circle">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: bold;" href="?router=registro/login/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="#">Marcar Exame</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="font-weight: bold;" href="?router=registro/sobre/">Sobre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="?router=registro/home/">Sair</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
            

    </header>
        
        <body>
            <section class="vh-100 custom-move-carta" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                      <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                          <div class="col-md-4 gradient-custom text-center text-white"
                            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="https://i.postimg.cc/fTYP8dJn/OIP.png"
                              alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                              <h5 id="nome"><?php echo $nomeEditavel; ?></h5>
                              <p id="cargo">Paciente</p>
                              <i class="far fa-edit mb-5"></i>
                          </div>
                          <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6>Informações</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <form action="?router=registro/atualizarUsuario/" method="post">
                                        <div class="col-6 mb-3">
                                            <h6>Nome:</h6>
                                    <input id="nomeEditavel" class="form-control" type="text" name="nome" value="<?php echo $nomeEditavel; ?>" required maxlength="30">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>CPF:</h6>
                                        <input id="cpfEditavel" class="form-control" type="text" name="cpf" pattern="\d{11}" maxlength="11" value="<?php echo $cpfEditavel; ?>" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Telefone:</h6>
                                    <input id="telefoneEditavel" class="form-control" name="telefone" type="tel" pattern="\d{11}" maxlength="11" value="<?php echo $telefoneEditavel; ?>" required>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Endereço:</h6>
                                        <input id="enderecoEditavel" class="form-control" name="endereco" type="text" value="<?php echo $enderecoEditavel; ?>" required maxlength="30">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Email:</h6>
                                        <input id="emailEditavel" class="form-control" name="email" type="email" value="<?php echo $emailEditavel; ?>" required>
                                    </div>
                                    
                                    <div class="col-6 mb-3">
                                        <h6>Senha:</h6>
                                        <input id="senhaEditavel" class="form-control" name="senha" type="password" value="<?php echo $senhaEditavel; ?>" required maxlength="30">
                                    </div>
                                    <div class="d-flex justify-content-start ml-3">
                                        <!-- <a id="btnSalvar" class="btn btn-primary" href="?router=registro/atualizarUsuario/">Salvar Alterações</a> -->
                                        <button id="btnSalvar" type="submit" class="btn btn-primary">Salvar Alterações</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
            <!--<script src="config/materialize/js/materialize.min.js"></script>!-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
        <script>
            function salvarAlteracoes() {
                var nome = document.getElementById('nomeEditavel').value;
                var cpf = document.getElementById('cpfEditavel').value;
                var telefone = document.getElementById('telefoneEditavel').value;
                var endereco = document.getElementById('enderecoEditavel').value;
                var email = document.getElementById('emailEditavel').value;
                var senha = document.getElementById('senhaEditavel').value;
                document.getElementById('nome').innerText = nome;
        
                
                if (nome === '' && cpf === '' && telefone === '' && endereco === '' && email === '' && senha === '') {
                    alert('Por favor, preencha pelo menos um campo antes de salvar.');
                    return;
                }
        
                
                console.log("Nome: " + nome);
                console.log("CPF: " + cpf);
                console.log("Telefone: " + telefone);
                console.log("Endereço: " + endereco);
                console.log("Email: " + email);
                console.log("Senha: " + senha);
        
                validarCampos();
            }
        
            function validarCampos() {
                var email = document.getElementById("emailEditavel").value;
                var cpf = document.getElementById("cpfEditavel").value;
                var telefone = document.getElementById("telefoneEditavel").value;
        
                if (!validateEmail(email)) {
                    alert("O campo de email é obrigatório e deve ser um endereço de e-mail válido.");
                    return;
                }
        
                if (!validateCPF(cpf)) {
                    alert("O campo de CPF é obrigatório e deve conter 11 dígitos numéricos.");
                    return;
                }
        
                if (!validateTelefone(telefone)) {
                    alert("O campo de telefone é obrigatório e deve conter 11 dígitos numéricos.");
                    return;
                }

                <?php 
                ?>
        
                // Aqui você pode salvar as alterações, pois todos os campos são válidos.
                
                alert("Alterações salvas com sucesso!");
            }
        
            function validateCPF(cpf) {
                // Esta é uma expressão regular simples para validar um CPF com 11 dígitos numéricos.
                var regex = /^\d{11}$/;
                return regex.test(cpf);
            }
        
            function validateTelefone(telefone) {
                // Esta é uma expressão regular simples para validar um telefone com 11 dígitos numéricos.
                var regex = /^\d{11}$/;
                return regex.test(telefone);
            }
        
            function validateEmail(email) {
                // Esta é uma expressão regular simples para validar um endereço de e-mail.
                // Note que essa validação pode não ser suficiente para todos os casos.
                var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return regex.test(email);
            }
        </script>
        
    </body>
</html>
