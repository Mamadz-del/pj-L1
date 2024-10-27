<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    public function getUser() {
        return $this->db->get('tb_users')->result_array();
    }

    public function simpanUser()  {
        $data = 
        [
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->db->insert('tb_users', $data);
    }

}