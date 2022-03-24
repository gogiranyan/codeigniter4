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
        // $_SESSION['mdmd'] = "good";
        echo "hi";
        // echo $_SESSION['mdmd'];
        echo $_SESSION['userName'];
        echo $_SESSION['account'];
    }

    public function view($slug = null)
    {
        if($slug == $_SESSION['machine_id']){//查看是否接收到手機資料與是否連接
            if($_SESSION['data_package'] != null){
             echo $_SESSION['data_package'];
            }else{
             echo "can't get data or machine_id";
            }
        }
    }
    public function connect($slug = null){//1.先連接
        $model = model(ControllersModel::class);
        $request = \Config\Services::request();//?
        if($this->request->getMethod() === 'post' &&$this->validate([
            'machine_id' => 'machine_id',
            'time' => 'time'
        ])){
            $_SESSION['machine_id'] = $request->getPost('machin_id');
            echo true;
        }else{
            echo false;
        }
    }

    public function getPOST_Subject(){//手機取得資料 
        if($_SESSION['account'] != null){
                $request = \Config\Services::request();//?
            if($this->request->getMethod() === 'post' &&$this->validate([
                'model' => 'model',
                'subject' => 'subject',
                'hard' => 'hard',
                'game_time' =>'game_time',
            ])){
                $_SESSION['data_package'] = [
                    'subject' => $request->getPost('subject'),
                    'hard' => $request->getPost('hard'),
                    'gema_time' =>$request->getPost('gema_time'),
                    'model' => $request->getPost('model')
                ];
                echo json_encode($_SESSION['data_package']);
                
            }
        }
        
    }



}