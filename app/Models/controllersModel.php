<?php

namespace App\Models;

use CodeIgniter\Model;

class ControllersModel extends Model
{
    protected $table = 'controllers';
    protected $allowedFields = ['app_access', 'mac_access'];

    public function getcontrol($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }
    
        return $this->where(['slug' => $slug])->first();
    }
//     public function _update(int $id, int $temp) {
//     $this->builder->set('app_access', $temp)
//                   ->where('id', $id)
//                   ->update();
// }
}
