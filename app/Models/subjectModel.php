<?php

namespace App\Models;

use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table = 'subject';
    protected $allowedFields = ['主題', '中文', '英文'];

    public function getsubject($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }
    
        return $this->where(['account' => $slug])->first();
    }
}
