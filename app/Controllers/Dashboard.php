<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $data = ['judul' => 'Dashboard'];
        $data['page'] = view('v_dashboard', $data);
        echo view('templates/v_wrapper', $data);
    }
    // public function produk()
    // {
    //     $data = [
    //         'judul' => 'Data Produk'
    //     ];
    //     $data['page'] = view('v_dashboard', $data);
    //     echo view('templates/v_wrapper', $data);
    // }
}
