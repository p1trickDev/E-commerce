<?php
// app/controllers/UserController.php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function showLoginForm()
    {
        include 'app/views/public/login.php';
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new User();
        $result = $userModel->getUserByUsername($username);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Invalid username or password";
        }
    }

    public function showRegisterForm()
    {
        include 'app/views/public/register.php';
    }

    public function register()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $userModel = new User();
        if ($userModel->createUser($username, $email, $password)) {
            header("Location: /login");
            exit();
        } else {
            echo "Error: " . $userModel->getError();
        }
    }
}
