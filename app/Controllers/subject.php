<?php

namespace App\Controllers;

use App\Models\SubjectModel;
use CodeIgniter\Controller;

class Subject extends Controller
{
    public function index()
    {
        
    }

    public function view()
    {
      $model = model(SubjectModel::class);
      $subject = $model->getsubject();
      echo json_encode($subject,JSON_UNESCAPED_UNICODE);
    }

    public function get_subject(){
      if($this->request->getMethod() === 'post' && $this->validate([
        'subject' => 'subject',
        'time' => 'time'
      ]));
      

    }
}
