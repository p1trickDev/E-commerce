<?php
// loginProcess.php

require __DIR__ . '/app/models/User.php';

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

