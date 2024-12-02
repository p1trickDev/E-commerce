<?php
// app/controllers/UserController.php
require_once __DIR__ . '/../models/User.php';

class UserController
{
    public function register()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $userModel = new User();
        if ($userModel->createUser($username, $email, $password, $address)) {
            header("Location: /login");
            exit();
        } else {
            echo "Error: " . $userModel->getError();
        }
    }
}
