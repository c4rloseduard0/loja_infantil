<?php
    namespace App\Models;

    use App\Connection;

    class Compra
    {
        private $user_id;
        private $id_produto;
        private $data;
        private $qtd;
        private $cpf;

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

        public function comprar() {
            $query = "INSERT INTO user_compra_produto VALUES :user_id, :produto_idproduto, :data_atual, :qtd, :cpf";
            $stmt = $this->conn->prepapre($query);
            $stmt->bindValue('user_id', $this->__get('user_id'));
            $stmt->bindValue('produto_idproduto', $this->__get('id_produto'));
            $stmt->bindValue('user_id', $this->__get('user_id'));
            $stmt->bindValue('data_atual', $this->__get('data_atual'));
            $stmt->bindValue('qtd', $this->__get('qtd'));
            $stmt->bindValue('cpf', $this->__get('cpf'));
            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }


        }


    }