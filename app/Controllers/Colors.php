<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Colors extends BaseController
{
    public function index()
    {
        $data =
            [
                "title" => "Colors",
                "page" => "colors"
            ];
        return view("colors", $data);
    }
}
