<?php

namespace App\Controllers;

use App\Models\ControllersModel;
use App\Models\teacherModel;
use CodeIgniter\Controller;
use Kint\Parser\ToStringPlugin;
session_start();
// $_SESSION['userName'] = "Kao";

class Teacher_info extends Controller
{
    

    public $app_access = 20;
    public $mac_access =false;
    public function index()
    {  
        $ui = "uis";
        $_SESSION[$ui] ="l";

        echo $_SESSION['uis'];
        $_SESSION['userName'] = "jack ";
        echo $_SESSION['userName'];
        echo "dd";
        $myIP = gethostbyname(trim(`hostname`));
        echo $myIP;
        
    }

    public function view($slug = null)
    {
        
        $model = model(teacherModel::class);
        $modelc = model(ControllersModel::class);
        $data['account'] = $model->getInfo($slug);
        $access = $modelc->getcontrol();

        
        foreach($access as $access_item){
            if (!empty($data['account']) && $access_item['app_access'] == 1 && $access_item['account'] == $slug) {
                echo json_encode($data['account']);
            }else{
                echo null;
            }
        }
    }

    public function login($slue = null) {
        $model = model(teacherModel::class);
        $modelc = model(ControllersModel::class);
        $request = \Config\Services::request();//?
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'account' => 'required',
            'password' => 'required',
        ])) {
            $account = $request->getPost('account');
            $password = $request->getPost("password");
            $data = $model->getInfo(); 

            foreach($data as $data_item){
                if($account == $data_item['account'] && 
                $password == $data_item['password']){
                    $cdata =$modelc->getcontrol();
                    $temp = false;
                    foreach($cdata as $cdata_item){
                        if($cdata_item['account'] == $account){
                             $modelc->update($cdata_item['id'],['app_access' => 1]);
                             $temp =true;
                             echo "update";
                        }
                    }
                    if($temp != true){
                        $modelc -> save([
                        'account' => $account,
                        'app_access' => 1,
                        'mac_access' => 0
                    ]);
                    echo "save";
                    echo $account;
                    }}else{
                        echo "else";
                    // echo json_encode(null);
                    // echo $account;
                }
            }
        }else{
            echo view("teacher_info/login");
        }
	}
    


}
