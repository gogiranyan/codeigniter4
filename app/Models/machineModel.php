<?php

namespace App\Models;

use CodeIgniter\Model;

class MachineModel extends Model
{
    protected $table = 'subject';
    protected $allowedFields = ['英文', 'No'];

    public function getInfo($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }
    
        return $this->where(['slug' => $slug])->first();
    }
}
