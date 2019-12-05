<?php
    namespace App\Models;

    use App\Connection;

    class Produto
    {
        private $id;
        private $descricao;
        private $preco;
        private $quantidade;

        private $conn;

        public function __construct()
        {
            $this->conn = Connection::getDb();
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function __set($attr, $value)
        {
            $this->$attr = $value;
        }

        public function getAllProdutos() {
            $query = "SELECT * FROM produto";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function getProduto() {
            $query = "SELECT * FROM produto WHERE idproduto = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue("id", $this->id);
            $stmt->execute();

            reutrn $stmt->fetch();
        }
    }
?>