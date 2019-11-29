<?php
    namespace App\Models;

    use App\Connection;

    class Usuario
    {
        protected $conn; // variavel de conexão com o banco

        // variveis relacionadas ao Usuario
        private $id;
        private $username;
        private $email;
        private $password;
        private $nivel_user;

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

        public function autenticar()
        {
            $query = "SELECT username, id, nivel_user FROM user WHERE username = :username AND password = :password";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue("username", $this->__get("username"));
            $stmt->bindValue("password", $this->__get("password"));
            $stmt->execute();

            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $this;
        }
    }
