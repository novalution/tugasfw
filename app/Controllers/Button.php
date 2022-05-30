<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Button extends BaseController
{
    public function index()
    {
        $data =
            [
                "title" => "Button",
                "page" => "button"
            ];
        return view("button", $data);
    }
}
