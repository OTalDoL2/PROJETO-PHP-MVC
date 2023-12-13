<?php

    //Conexão via method POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Requisição recebida<br><br>";

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            die("Falha na conexão: " . mysqli_connect_error());
        }else{
            echo "Conexão Estabelecida com sucesso!";

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT FROM tb_pessoa WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $emailSQL = $row["email"];
                $senhaSQL = $row["senha"];

                if (($email == $emailSQL) and ($senha == $senhaSQL)) {
                    echo "<b>igual a </b>";
                }
            }else{
                echo "Erro: Registro não encontrado";
            }

        }

    }else{
        echo "Não houve requisição via post";
    }

?>