<?php 
    class Cliente{

        // Atributos //
        private $id;
        private $nome;

        // Métodos Especiais //
        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome; 
        }

        function getId(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        // Métodos Normais //
        public function newCliente($pdo){
            $sql = "INSERT INTO cliente(nome) VALUES (:nome)";
            $insert = $pdo->prepare($sql);
            $insert->bindValue(':nome', $this->getNome());
            $insert->execute();
            $this->readClientes($pdo);
        }

        public function updateCliente($pdo){
            $sql = "UPDATE cliente SET nome = :nome WHERE id = :id";
            $update = $pdo->prepare($sql);
            $update->bindValue(':nome', $this->getNome());
            $update->bindValue(':id', $this->getId());
            $update->execute();
            $this->readClientes($pdo);
        }

        public function deleteCliente($pdo){   
            $sql = "DELETE FROM cliente WHERE id = :id";
            $delete = $pdo->prepare($sql);
            $delete->bindValue(':id', $this->getId());
            $delete->execute();
            $this->readClientes($pdo);
        }

        public function readClientes($pdo){
            $sql = "select * from cliente";
            $read = $pdo->prepare($sql);
            $read->execute();
            $data = $read->fetchAll();
            for($i = 0; $i < count($data); $i = $i + 1){
                $valor = $data[$i];
                echo($valor['nome']);
            }
            
        }
    }
?>