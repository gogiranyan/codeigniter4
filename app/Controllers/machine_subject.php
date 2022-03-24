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
        $request = \Config\Services::request();//?
        
        
        if($this->request->getMethod() === 'post' &&$this->validate([
            'machine_id' => 'machine_id',
            'time' => 'time'
        ])){
            $machine_id = $request->getPost('machin_id');
            $time = $request->getPost('time');
            $_SESSION[$machine_id] = $machine_id;
        }
        

    }

    public function getPOST_Subject(){
        $request = \Config\Services::request();//?
        if($this->request->getMethod() === 'post' &&$this->validate([
            'subject' => '主題',
            'hard' => '難度',
            'game_time' =>'game_time'
        ])){
            $subject = $requerst->getPost('主題');

        }

    }
    


}