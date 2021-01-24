<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {
    // field
    var $table = "user",
        $id = "id_user",
        $username = "username",
        $password = "password",
        $menu_id = "menu_id"
    ;

    public function getAll(){
        return $this->db->get($this->table)->result();
    }

    public function cekLogin($username, $password){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where([
            'username' => $username,
            'password' => $password
        ]);
        $query = $this->db->get()->row();
        return $query;
    }
}

/* End of file MUser.php */
/* Location: ./application/models/MUser.php */