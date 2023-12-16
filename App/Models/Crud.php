<?php 

namespace App\Models;

$status_login = false;
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
                    //echo "O e-mail já existe.";
                } else {
                    // O e-mail não existe
                    //echo "O e-mail está disponível.";
                    $sql = "INSERT INTO usuarios VALUES(default,:nome, :cpf ,:telefone ,:endereco ,:email, :senha)";
                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':cpf', $cpf);
                    $stmt->bindParam(':telefone', $telefone);
                    $stmt->bindParam(':endereco', $endereco);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':senha', $senha);

                    $stmt->execute();

                    return true;

                    //return $stmt;
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

    public function setLoginStatus($status) {
        global $status_login;
    
        $status_login = $status;
    }
    
    public function getLoginStatus() {
        $conn = $this->connect();
    
        $sql = "SELECT * FROM usuarios WHERE logado = 1";
    
        $stmt = $conn->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch();
    
        if ($row) {
            return true;
        } else{
            return false;
        }
    }

    public function create_consulta() {
        
        $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $cliente_id = filter_input(INPUT_POST, 'cliente_id', FILTER_SANITIZE_SPECIAL_CHARS);
        $especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_SPECIAL_CHARS);
        $medico = filter_input(INPUT_POST, 'medico', FILTER_VALIDATE_EMAIL);
        $horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_SPECIAL_CHARS);
    
        $conn = $this->connect();
    
        $query = "SELECT id FROM usuarios WHERE id = :id_cliente";
    
        // Prepara a consulta
        $stmt = $conn->prepare($query);
    
        // Vincula o parâmetro
        $stmt->bindParam(":id_cliente", $cliente_id);
    
        // Executa a consulta
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            // O e-mail já existe
            echo "Cliente inválido.";
        } else {
            $sql = "INSERT INTO consulta VALUES(default, :bairro, :cliente_id, :especialidade, :medico, :horario, :logado)";
            $stmt = $conn->prepare($sql);
    
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cliente_id', $cliente_id);
            $stmt->bindParam(':especialidade', $especialidade);
            $stmt->bindParam(':medico', $medico);
            $stmt->bindParam(':horario', $horario);
    
            $stmt->execute();
    
            return $stmt;
        }
            
    }

    public function logon_user(){
        $conn = $this->connect();
    

        $sql = "UPDATE usuarios set logado = 0 WHERE logado = 1";
    
        $stmt = $conn->prepare($sql);
    
        // $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':logado', 1);
        $stmt->execute();
        return true;
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
            
            if ($senha == $senhaDB) {
                $sql = "UPDATE usuarios set logado = 1 WHERE email = :email";
    
                $stmt = $conn->prepare($sql);
            
                $stmt->bindParam(':email', $email);
                // $stmt->bindParam(':logado', 1);
                $stmt->execute();

                return true; // Indicação de sucesso
            } else {
                return false; // Indicação de falha
            }
        } else {
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
