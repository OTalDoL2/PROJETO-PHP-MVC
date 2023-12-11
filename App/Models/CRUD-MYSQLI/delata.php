<?php
    
    $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            header("location: delete.html");
        }else{
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $id = $_POST["id"];

                $sql = "DELETE FROM tb_pessoa WHERE id = '$id'";

                if (mysqli_query($conn,$sql)) {
                    echo "Usuario excluido com sucesso";
                }else{
                    echo "Erro ao excluir o usuario: " . mysqli_error($conn);
                }
            }
        }

    ?>