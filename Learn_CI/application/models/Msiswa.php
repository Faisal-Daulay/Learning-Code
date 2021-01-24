<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msiswa extends CI_Model {

    // field
    var $table = "siswa",
        $id = "id_siswa",
        $nama = "nama",
        $alamat = "alamat",
        $notel = "notel",
        $email = "email",
        $jk = "jk",
        $agama = "agama"
    ;

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($data,$id){
        return $this->db->update($this->table,$data,array($this->id => $id));
    }

    public function updateBy($data,$field=array()){
        $this->db->update($this->table,$data,$field);
    }

    public function delete($id){
        return $this->db->delete($this->table,array($this->id => $id));
    }

    public function getById($id){
        return $this->db->where($this->id,$id)->get($this->table)->row();
    }

    public function getBy($field){
        return $this->db->where($field)->get($this->table)->row();
    }

    public function getAll(){
        return $this->db->get($this->table)->result();
    }
}

/* End of file MBuku.php */
/* Location: ./application/models/MBuku.php */