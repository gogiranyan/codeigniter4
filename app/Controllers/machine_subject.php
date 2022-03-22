<?php

namespace App\Controllers;

use App\Models\ControllersModel;
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
    public function connect($slug = null){
        $model = model(ControllersModel::class);
        

    }


}