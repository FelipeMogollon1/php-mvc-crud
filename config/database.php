<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'CompanyDB';
    private $username = 'root';
    private $password = '';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch(PDOException $exception) {

            error_log("Error of connection: " . $exception->getMessage());
            echo "An error occurred while connecting to the database.";
        }
        return $this->conn;
    }
}
?>
