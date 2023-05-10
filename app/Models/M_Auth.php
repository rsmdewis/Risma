<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Auth extends Model{
    public function __construct()
    {
        $this->db = db_connect();
    }
    public function save_register($data){
        $this->db->table('tb_user')->insert($data);
    }
    public function login($email, $password){
        return $this->db->table('tb_user')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }
}