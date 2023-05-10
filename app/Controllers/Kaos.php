<?php
namespace App\Controllers;

use App\Models\M_Kaos;
use CodeIgniter\Controller;

class Kaos extends Controller{
    public function __construct()
    {
        $this->model = new M_Kaos;
    }
    public function index(){
        $data = [
            'judul' => 'Data Kaos',
            'kaos' => $this->model->getAllData()
        ];
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('kaos/index');
        echo view('templates/v_footer');
    }
    public function tambah(){
        $data = [
            'model' => $this->request->getPost('model'),
            'warna' => $this->request->getPost('warna')
        ];
        $success = $this->model->tambah($data);
        if($success){
            return redirect()->to(base_url('kaos'));
        }
        
    }
}