<?php

namespace App\Models;

use CodeIgniter\Model;

class m_absenWeb extends Model
{
    protected $table = 'ekskul_web';
    protected $allowedFields = ['nama', 'kelas'];

    public function getId($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
