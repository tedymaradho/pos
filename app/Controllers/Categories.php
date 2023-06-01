<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Categories extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Categories',
            'menu' => 'datamaster',
            'submenu' => 'categories',
            'page' => 'v_category',
        ];
        return view('v_template', $data);
    }
}