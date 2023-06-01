<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Uom extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Uom',
            'menu' => 'datamaster',
            'submenu' => 'uom',
            'page' => 'v_uom',
        ];
        return view('v_template', $data);
    }
}