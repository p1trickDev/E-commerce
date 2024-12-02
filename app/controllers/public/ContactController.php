<?php
// app/controllers/ContactController.php

namespace App\Controllers\Public;

use App\Controllers\BaseController;


class ContactController extends BaseController
{
    public function showForm()
    {
        include 'app/views/public/contactViews.php';
    }

    public function sendMail()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $subject = "Contact Form Submission";
            $body = "Name: $name<br>Email: $email<br>Message: $message";

            // Use the connection from the base controller
            $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
            if ($this->conn->query($sql) === TRUE) {
                echo 'Message has been sent';
            } else {
                echo 'Error: ' . $this->conn->error;
            }
        }
    }
}
