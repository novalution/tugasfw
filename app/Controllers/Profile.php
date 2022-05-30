<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;
use App\Models\ContohUser;

class Profile extends BaseController
{
    public function detail($nama)
    {
        $userModel = new ContohUser();
        $data = 
        [
            "title" => "Profile Dashboard",
            "page" => "profile",
            'item' => $userModel->where(['nama' => $nama])->first()
        ];
        return view("user", $data);
    }
}