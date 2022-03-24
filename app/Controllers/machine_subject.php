<?php

namespace App\Controllers;

use App\Models\ControllersModel;
use CodeIgniter\Controller;
session_start();

class Machine_subject extends Controller
{
    // public $machine_id;
    public function index()
    {
        $_SESSION['mdmd'] = "good";
        echo "hi";
        echo $_SESSION['mdmd'];
        echo $_SESSION['userName'];
    }

    public function view($slug = null)
    {

        

       
    }
    public function connect($slug = null){
        $model = model(ControllersModel::class);
        $request = \Config\Services::request();//?
        if($this->request->getMethod() === 'post' &&$this->validate([
            'machine_id' => 'machine_id',
            'time' => 'time'
        ])){
            $GLOBALS['$machine_id'] = $request->getPost('machin_id');
            // $_SESSION[$GLOBALS['$machine_id']] = $GLOBALS['$machine_id'];
            // $model->
        }
    }

    public function getPOST_Subject(){//手機取得資料
        $request = \Config\Services::request();//?
        if($this->request->getMethod() === 'post' &&$this->validate([
            'model' => 'model',
            'subject' => 'subject',
            'hard' => 'hard',
            'game_time' =>'game_time',
        ])){
            $data = [
                'subject' => $request->getPost('subject'),
                'hard' => $request->getPost('hard'),
                'gema_time' =>$request->getPost('gema_time'),
                'model' => $request->getPost('model')
            ];
            echo json_encode($data);
        }
    }



}