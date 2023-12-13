<?php 

namespace App\Models;

class Crud extends Connections {

    // Método para criar um novo registro
    public function create() {
        
        // Verificar se as chaves "nome" e "email" estão definidas no array $_POST
        if (isset($_POST['nome'], $_POST['email'])) {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
            $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
            $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

            $conn = $this->connect();

                $query = "SELECT * FROM usuarios WHERE email = :email";

                // Prepara a consulta
                $stmt = $conn->prepare($query);
        
                // Vincula o parâmetro
                $stmt->bindParam(":email", $email);
        
                // Executa a consulta
                $stmt->execute();
        
                // Verifica se a consulta retornou algum registro
                if ($stmt->rowCount() > 0) {
                    // O e-mail já existe
                    echo "O e-mail já existe.";
                } else {
                    // O e-mail não existe
                    echo "O e-mail está disponível.";
                    $sql = "INSERT INTO usuarios VALUES(default,:nome, :cpf ,:telefone ,:endereco ,:email, :senha)";
                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':cpf', $cpf);
                    $stmt->bindParam(':telefone', $telefone);
                    $stmt->bindParam(':endereco', $endereco);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':senha', $senha);

                    $stmt->execute();

                    return $stmt;
                }
            
            // Hash da senha usando password_hash
            //$hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

            // id	nome	email	cpf	telefone	endereco	senha

            // $sql = "INSERT INTO usuarios VALUES(default,:nome, :cpf ,:telefone ,:endereco ,:email, :senha)";
            // $stmt = $conn->prepare($sql);

            // $stmt->bindParam(':nome', $nome);
            // $stmt->bindParam(':cpf', $cpf);
            // $stmt->bindParam(':telefone', $telefone);
            // $stmt->bindParam(':endereco', $endereco);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':senha', $senha);

            // $stmt->execute();

            // return $stmt;
        }
    }

    // Método para ler todos os registros
    public function read() {

        $conn = $this->connect();
        $sql = "SELECT * FROM usuarios ORDER BY nome";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    // Método para atualizar um registro
    public function update() {

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();

        // Hash da senha usando password_hash
        //$hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        return $stmt;
    }

    // Método para excluir um registro
    public function delete() {
        
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt;
    }

    // Método para obter dados para um formulário de edição
    public function editForm() {
        
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function verificaLogin() {
    
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        
        //echo"$email";
        //echo"$senha";
        $conn = $this->connect();
    
        $sql = "SELECT * FROM usuarios WHERE email = :email";
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        $row = $stmt->fetch();
    
        if ($row) {
            $senhaDB = $row['senha'];
            //echo"$senhaDB";
    
            // Use password_verify para verificar a senha
            if ($senha == $senhaDB) {
                //echo"$senha";
                //echo"$senhaDB";
                //session_start();
                //$_SESSION['email'] = $email;
                return true; // Indicação de sucesso
            } else {
                // Senha incorreta
                //echo"Senha incorreta";
                return false; // Indicação de falha
            }
        } else {
            // Email incorreto
            //echo"Email incorreto";
            return false; // Indicação de falha
        }
    
    }


    // public function consulta ou verificaLogin() {
        
    //     $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

    //     $conn = $this->connect();
    //     $sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";
        
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindParam(':id', $id);
    //     $stmt->execute();

    //     $result = $stmt->fetchAll();
    //     return $result;
    // }
}

?>
