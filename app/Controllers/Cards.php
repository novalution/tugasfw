<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cards extends BaseController
{
    public function index()
    {
        $data =
            [
                "title" => "Cards",
                "page" => "cards"
            ];
        return view("cards", $data);
    }
}
