<?php

namespace Models;

require_once '../config/database.php';

class City {
    private $conn;
    private $table = 'cities';

    public $id;
    public $name;

    public function __construct() {
        $database = new \Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (name) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->name]);
    }

    public function update() {
        $query = "UPDATE " . $this->table . " SET name = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->name, $this->id]);
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->id]);
    }
}
