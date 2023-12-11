<?php 

namespace app\models;

class Crud extends Connections {
 	
    // Método para criar um novo registro
    public function create() {
        
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();

        // Hash da senha usando password_hash
        $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tb_pessoa VALUES(default, :nome, :email, :senha)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $hashedSenha);

        $stmt->execute();

        return $stmt;
    }

    // Método para ler todos os registros
    public function read() {

        $conn = $this->connect();
        $sql = "SELECT * FROM tb_pessoa ORDER BY nome";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    // Método para atualizar um registro
    public function update() {

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();

        // Hash da senha usando password_hash
        $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "UPDATE tb_pessoa SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $hashedSenha);

        $stmt->execute();

        return $stmt;
    }

    // Método para excluir um registro
    public function delete() {
        
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "DELETE FROM tb_pessoa WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt;
    }

    // Método para obter dados para um formulário de edição
    public function editForm() {
        
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "SELECT id, nome, email FROM tb_pessoa WHERE id = :id";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}

?>
