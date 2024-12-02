<?php
// app/models/User.php
require_once __DIR__ . '/BaseModel.php';

class User extends BaseModel
{
    public function getUserByUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function createUser($username, $email, $password, $address)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password, address) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $email, $hashedPassword, $address);
        return $stmt->execute();
    }

    public function getError()
    {
        return $this->conn->error;
    }
}

