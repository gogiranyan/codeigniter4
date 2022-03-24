<?php

namespace App\Models;

use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table = 'subject';
    protected $allowedFields = ['subject', 'time',];

    public function getsubject($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }
    
        return $this->where(['subject' => $slug])->first();
    }
}
