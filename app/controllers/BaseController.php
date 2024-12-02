<?php
// app/controllers/BaseController.php

namespace App\Controllers;

class BaseController
{
    protected $conn;

    public function __construct()
    {
        require __DIR__ . '/../../core/config.php';
        $this->conn = $conn;
    }
}
