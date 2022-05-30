<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data =
            [
                "title" => "Dashboard",
                "page" => "dashboard"
            ];
        return view("dashboard", $data);
    }
}
