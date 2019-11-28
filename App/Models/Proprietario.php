<?php
    namespace App\Models;

    use App\Connection;

    class Proprietario
    {
        protected $conn;
        public function __construct()
        {
            $this->conn = Connection::getDb();
        }

        public function getUsers()
        {
            $query = "SELECT * FROM user";
            return $this->conn->query($query)->fetchAll();

        }
    }
 ?>
