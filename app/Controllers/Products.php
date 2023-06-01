<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Master',
            'subtitle' => 'Products',
            'menu' => 'datamaster',
            'submenu' => 'products',
            'page' => 'v_product',
        ];
        return view('v_template', $data);
    }
}