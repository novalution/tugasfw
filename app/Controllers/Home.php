<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =
            [
                "title" => "Master",
                "page" => "master"
            ];
        return view('template/master', $data);
    }
}
