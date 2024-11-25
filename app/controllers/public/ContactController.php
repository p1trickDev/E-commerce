<?php

namespace App\Controllers;

use App\Models\Mailer;

class ContactController
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

            $mailer = new Mailer();
            $subject = "Contact Form Submission";
            $body = "Name: $name<br>Email: $email<br>Message: $message";

            $result = $mailer->sendMail('recipient@example.com', $subject, $body);

            if ($result === true) {
                echo 'Message has been sent';
            } else {
                echo $result;
            }
        }
    }
}
