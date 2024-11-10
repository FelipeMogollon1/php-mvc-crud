<?php

namespace Models;

require_once '../config/database.php';

class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $name;
    public $email;
    public $password;
    public $job_title_id;
    public $city_id;

    public function __construct() {
        $database = new \Database();
        $this->conn = $database->getConnection();
    }

    // Get all users with job title and city name
    public function getAll() {
        $query = "SELECT u.*, jt.name AS job_title, c.name AS city 
                  FROM " . $this->table . " u
                  LEFT JOIN job_titles jt ON u.job_title_id = jt.id
                  LEFT JOIN cities c ON u.city_id = c.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    // Get user by ID with job title and city name
    public function getById($id) {
        $query = "SELECT u.*, jt.name AS job_title, c.name AS city 
                  FROM " . $this->table . " u
                  LEFT JOIN job_titles jt ON u.job_title_id = jt.id
                  LEFT JOIN cities c ON u.city_id = c.id
                  WHERE u.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    // Create new user
    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, email, password, job_title_id, city_id) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT); // Hash password before storing
        return $stmt->execute([$this->name, $this->email, $hashedPassword, $this->job_title_id, $this->city_id]);
    }

    // Update existing user
    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET name = ?, email = ?, password = ?, job_title_id = ?, city_id = ? 
                  WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        return $stmt->execute([$this->name, $this->email, $hashedPassword, $this->job_title_id, $this->city_id, $this->id]);
    }

    // Delete user by ID
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->id]);
    }
}
