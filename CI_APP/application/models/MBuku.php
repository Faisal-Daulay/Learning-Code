<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MBuku extends CI_Model {
    
    //field
    var $table     = "buku",
        $id_buku   = "id_buku",
        $judul_buku= "judul_buku",
        $pengarang = "pengarang"
    ;

    public function getAll() {
        return $this->db->get($this->table)->result();
    }

}

/* End of file Mbuku.php */
