<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
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
        return view('v_template', $data);
    }

    public function Settings()
    {
        $data = [
            'title' => 'Settings',
            'subtitle' => '',
            'menu' => 'settings',
            'submenu' => '',
            'page' => 'v_setting',
        ];
        return view('v_template', $data);
    }
}