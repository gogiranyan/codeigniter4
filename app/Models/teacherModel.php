<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher_info';
    protected $allowedFields = ['name', 'account', 'password'];

    public function getInfo($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }
    
        return $this->where(['account' => $slug])->first();
    }
}
