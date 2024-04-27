<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestController extends Controller
{
    public function index()
    {
        $db = Database::connect();

        try {
            $db->initialize();
            echo "Berhasil terhubung ke database.";
        } catch (\Throwable $th) {
            echo "Gagal terhubung ke database. Error: " . $th->getMessage();
        }
    }
}