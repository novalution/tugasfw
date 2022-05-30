<?php

namespace App\Controllers;

use App\Models\CariUser;
use App\Models\ContohUser;

class User extends BaseController
{

    protected $ContohUser;
    public function __construct()
    {
        $this->ContohUser = new ContohUser();
    }
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new ContohUser();
        $kunci = $this->request->getVar('cari');

        if ($kunci) {
            $query = $model->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <B>$kunci</B>";
        } else {
            $query = $model;
            $jumlah = "";
        }

        $data['siswa'] = $query->paginate(10);
        $data['pager'] = $model->pager;
        $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $data['jumlah'] = $jumlah;

        echo view('/user/index', $data);
    }

    public function detail($nama)
    {
        $userModel = new ContohUser();
        $data =
            [
                'page' => "user",
                'nama' => "User",
                'list2' => $userModel->where(['nama' => $nama])->first()
            ];

        return view('user/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data',
            'page' => "create",
            'validation' => \Config\Services::validation()
        ];
        return view('user/create', $data);
    }
    public function insertAjax()
    {

        $validasi = \Config\Services::validation();
        $valid = $this->validate([
            'namadepan' => [
                'label' => 'Nama Depan',
                'rules' => 'required',
                'errors' => ['required' => '{field} tidak boleh kosong']
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]|',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'valid_email' => '{field} harus valid',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'telepon' => [
                'label' => 'Telepon',
                'rules' => 'required|integer',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'integer' => '{field} harus angka'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 8 karakter'
                ]
            ],
            'kpass' => [
                'label' => 'Konfirm Password',
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Password harus sama',
                ]
            ],
            'avatar' => [
                'label' => 'Avatar',
                'rules' => 'max_size[avatar,500]',
                'errors' => [
                    'max_size' => 'Maksimal file berukuran 500 KB',
                ]
            ]
        ]);
        if (!$valid) {
            $pesan = [
                'error' => [
                    'namadepan' => $validasi->getError('namadepan'),
                    'email' => $validasi->getError('email'),
                    'kpass' => $validasi->getError('kpass'),
                    'telepon' => $validasi->getError('telepon'),
                    'username' => $validasi->getError('username'),
                    'password' => $validasi->getError('password'),
                    'avatar' => $validasi->getError('avatar'),
                ]
            ];
            return $this->response->setJSON($pesan);
        } else {
            $namas = $this->request->getVar('namadepan') . " " . $this->request->getVar('namabelakang');
            if ($this->request->getFile('avatar')->getName() != '') {
                $avatar = $this->request->getFile('avatar');
                $namaavatar = $avatar->getRandomName();
                $avatar->move(ROOTPATH . 'public/assets/img', $namaavatar);
            } else {
                $namaavatar = 'default.jpg';
            }

            $input = [
                'nama' => $namas,
                'alamat' => $this->request->getVar('alamat'),
                'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'telepon' => $this->request->getVar('telepon'),
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => md5($this->request->getVar('password')),
                'avatar' => $namaavatar
            ];
            $this->ContohUser->save($input);
            $pesan = [
                'sukses' => 'Data anggota berhasil diinput'
            ];
            return $this->response->setJSON($pesan);
        }
    }
    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $userModel = new ContohUser();
            $data = [
                'list' => $userModel->findAll()
            ];
            $hasil = [
                'data' => view('/user/list', $data)
            ];
            return $this->response->setJSON($hasil);
        } else {
            exit('Data tidak dapat diload');
        }
    }
    public function getform()
    {
        if ($this->request->isAjax()) {
            $hasil = [
                'data' => view('/user/form')
            ];
            return $this->response->setJSON($hasil);
        } else {
            exit('Data tidak dapat diload');
        }
    }
}
