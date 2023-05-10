<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class MasterProduk extends Controller
{
    public function index()
    {
        $data = ['judul' => 'Data Produk'];
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('produk/index');
        echo view('templates/v_footer');
    }
}
