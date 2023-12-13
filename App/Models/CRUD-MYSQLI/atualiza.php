<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza</title>
</head>
<body>
    <?php
    
    $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            header("location: consulta.php");
        }else{
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $id = $_POST["id"];
                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];
                $telefone = $_POST["telefone"];
                $endereco = $_POST["endereco"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                $sql = "UPDATE tb_pessoa SET nome='$nome',cpf='$cpf' ,telefone='$telefone',endereco='$endereco' ,email='$email' , senha='$senha' WHERE id = '$id'";

                if (mysqli_query($conn,$sql)) {
                    echo "Usuario atualizado com sucesso";
                }else{
                    echo "Erro ao atualizar o usuario: " . mysqli_error($conn);
                }
            }
        }

    ?>
</body>
</html>