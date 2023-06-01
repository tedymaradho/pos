<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'subtitle' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_admin',
        ];
        return view('v_login', $data);
    }
}