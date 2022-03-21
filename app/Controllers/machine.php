<?php

namespace App\Controllers;

use CodeIgniter\Controller;
session_start();

class Machine extends Controller
{
    public function index()
    {
        $_SESSION['mdmd'] = "good";
        echo "hi";
        echo $_SESSION['mdmd'];
    }

    public function view($page = 'home')
    {
       
    }
}