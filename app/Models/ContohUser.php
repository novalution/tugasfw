<?php

namespace App\Models;

use CodeIgniter\Model;

class ContohUser extends Model
{
    protected $allowedFields    = ['nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'telepon', 'email', 'username', 'avatar'];
    protected $table            = 'users';
    protected $useTimestamps = false;


    public function model1($id_user)
    {
        return $this->find($id_user);
    }

    function getDetail($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }
        return $this->where(['nama' => $nama])->first();
    }

    public function pencarian($kunci)
    {
        return $this->table('users')->like('nama', $kunci);
    }
}
