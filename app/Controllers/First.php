<?php

namespace App\Controllers;

class First extends BaseController
{
    public function index()
    {
        $data = ['judul' => ''];
        echo view('templates/v_header', $data);
        echo view('templates/v_topbar1');
        echo view('first/index');
        echo view('templates/v_footer');
    }
}
