<?php

class Database
{
    private $host = "localhost";
    private $db_name = "contact";
    private $username = "root";
    private $password = "";

    public function getConnection()
    {

        $conn = new PDO(
            "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
            $this->username,
            $this->password
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
