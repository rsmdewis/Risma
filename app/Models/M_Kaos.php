<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Kaos extends Model{
    public function __construct()
    {
        $this->db = db_connect();
    }
    public function getAllData(){
        return $this->db->table('kaos')->get();
    }
    public function tambah($data){
        return $this->db->table('kaos')->insert($data);
    }
}