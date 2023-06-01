<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Users',
            'menu' => 'datamaster',
            'submenu' => 'users',
            'page' => 'v_user',
        ];
        return view('v_template', $data);
    }
}