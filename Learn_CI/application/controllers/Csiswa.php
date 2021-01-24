<?php if (!defined('BASEPATH')) exit('No direction script access allowed');

class Csiswa extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Msiswa");
    }

    public function index () {
        
        $title = "Learning Codeiginter";
        $datasiswa = $this->Msiswa->getAll();

        $data['title'] = $title;
        $data['datasiswa'] = $datasiswa;

        $this->load->view('siswa/tampil_siswa', $data);

    }

    public function add() {
        if(!empty($_POST)){
            $nama=$this->input->post('nama');
            $alamat=$this->input->post('alamat');
            $notel=$this->input->post('notel');
            $email=$this->input->post('email');
            $jk=$this->input->post('jk');
            $agama=$this->input->post('agama');

            $data = array(
                "nama" => $nama,
                "alamat" => $alamat,
                "notel" => $notel,
                "email" => $email,
                "jk" => $jk,
                "agama" => $agama
            );

            $insert = $this->Msiswa->insert($data); 

            // $query = $this->db->last_query();
            // var_dump($query);exit;

            $pesan="Siswa Berhasil di simpan";
            $this->session->set_flashdata('success',$pesan);
            redirect("Csiswa");
        }

        $title = "Tambah Siswa";
        $data['title'] = $title;
        $this->load->view('siswa/formSiswa', $data);
    }

    public function edit($id){

        if(!empty($_POST)){
            $nama=$this->input->post('nama');
            $alamat=$this->input->post('alamat');
            $notel=$this->input->post('notel');
            $email=$this->input->post('email');
            $jk=$this->input->post('jk');
            $agama=$this->input->post('agama');

            $data = array(
                "nama" => $nama,
                "alamat" => $alamat,
                "notel" => $notel,
                "email" => $email,
                "jk" => $jk,
                "agama" => $agama
            );

            $update = $this->Msiswa->update($data,$id); 
            $pesan="Siswa Berhasil di ubah";
            $this->session->set_flashdata('info',$pesan);
            redirect("Csiswa");
        }

        $getSiswa = $this->Msiswa->getById($id);

        $title = "Edit Siswa";
        $data['title'] = $title;
        $data['getSiswa'] = $getSiswa;

        $this->load->view('siswa/formSiswa', $data);
    }

    public function delete($id){
        $getSiswa = $this->Msiswa->getById($id);
        $delete = $this->Msiswa->delete($id);

        $pesan="Siswa Berhasil di hapus";
        $this->session->set_flashdata('danger',$pesan);
        
        redirect('Csiswa');
    }

    public function view($id){
        $getSiswa = $this->Msiswa->getById($id);

        $title = "Data siswa";
        $data['title'] = $title;
        $data['getSiswa'] = $getSiswa;

        $this->load->view('siswa/viewSiswa', $data);
    }

}
