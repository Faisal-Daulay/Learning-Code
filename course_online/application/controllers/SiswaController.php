<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MSiswa");
    }

    public function index()
    {
        $title = "Course Onlen di Kota Medan";
        $datasiswa = $this->MSiswa->getAll();
        
        $data['title'] = $title;
        $data['datasiswa'] = $datasiswa;
        $this->load->view('app', $data);
    }

    public function add()
    {
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

            $insert = $this->MSiswa->insert($data); 

            // $query = $this->db->last_query();
            // var_dump($query);exit;

            $pesan="Siswa Berhasil di simpan";
            $this->session->set_flashdata('success',$pesan);
            redirect("siswa");
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

            $update = $this->MSiswa->update($data,$id); 
            $pesan="Siswa Berhasil di ubah";
            $this->session->set_flashdata('info',$pesan);
            redirect("siswa");
        }

        $getSiswa = $this->MSiswa->getById($id);

        $title = "Edit Siswa";
        $data['title'] = $title;
        $data['getSiswa'] = $getSiswa;

        $this->load->view('siswa/formSiswa', $data);
    }

    public function delete($id){
        $getSiswa = $this->MSiswa->getById($id);
        $delete = $this->MSiswa->delete($id);

        $pesan="Siswa Berhasil di hapus";
        $this->session->set_flashdata('danger',$pesan);
        
        redirect('siswa');
    }

    public function view($id){
        $getSiswa = $this->MSiswa->getById($id);

        $title = "Data siswa";
        $data['title'] = $title;
        $data['getSiswa'] = $getSiswa;

        $this->load->view('siswa/viewSiswa', $data);
    }

}

/* End of file AppController.php */
/* Location: ./application/controllers/AppController.php */