<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BukuController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MBuku");
    }

    public function index()
    {
        $title = "E-Book - Tempat Belajar Onlen diKota Medan";
        $dataBuku = $this->MBuku->getAll();
        
        $data['title'] = $title;
        $data['dataBuku'] = $dataBuku;
        $this->load->view('app', $data);
    }

    public function add()
    {
        if(!empty($_POST)){
            $nm_buku=$this->input->post('nm_buku');
            $jumlah_buku=$this->input->post('jumlah_buku');

            $data = array(
                "nm_buku" => $nm_buku,
                "jumlah_buku" => $jumlah_buku
            );

            $insert = $this->MBuku->insert($data); 

            // $query = $this->db->last_query();
            // var_dump($query);exit;

            $pesan="Buku Berhasil di simpan";
            $this->session->set_flashdata('success',$pesan);
            redirect("buku");
        }

        $title = "Tambah Buku";
        $data['title'] = $title;
        $this->load->view('buku/formBuku', $data);
    }

    public function edit($id){

        if(!empty($_POST)){
            $nm_buku=$this->input->post('nm_buku');
            $jumlah_buku=$this->input->post('jumlah_buku');

            $data = array(
                "nm_buku" => $nm_buku,
                "jumlah_buku" => $jumlah_buku
            );

            $update = $this->MBuku->update($data,$id); 
            $pesan="Buku Berhasil di ubah";
            $this->session->set_flashdata('info',$pesan);
            redirect("buku");
        }

        $getBuku = $this->MBuku->getById($id);

        $title = "Edit Buku";
        $data['title'] = $title;
        $data['getBuku'] = $getBuku;

        $this->load->view('buku/formBuku', $data);
    }

    public function delete($id){
        $getBuku = $this->MBuku->getById($id);
        $delete = $this->MBuku->delete($id);

        $pesan="Buku Berhasil di hapus";
        $this->session->set_flashdata('danger',$pesan);
        
        redirect('buku');
    }

    public function view($id){
        $getBuku = $this->MBuku->getById($id);

        $title = "Data Buku";
        $data['title'] = $title;
        $data['getBuku'] = $getBuku;

        $this->load->view('buku/viewBuku', $data);
    }

}

/* End of file AppController.php */
/* Location: ./application/controllers/AppController.php */