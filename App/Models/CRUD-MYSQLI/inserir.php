<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>
    <?php
    
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            header("location: formulario_inserir.html");
        }else{
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];
                $telefone = $_POST["telefone"];
                $endereco = $_POST["endereco"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                $sql = "INSERT INTO tb_pessoa (nome, email, cpf, telefone, endereco, senha) VALUES ('$nome','$email', '$cpf', '$telefone', '$endereco', '$senha')";

                if (mysqli_query($conn,$sql)) {
                    echo "Usuario inserido com sucesso";
                }else{
                    echo "Erro ao inserir o usuario: " . mysqli_error($conn);
                }
            }
        }

    ?>
</body>
</html>