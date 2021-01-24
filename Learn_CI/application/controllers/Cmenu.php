<?php
    if (!defined('BASEPATH')) exit('No direction script access allowed');

    class Cmenu extends CI_Controller {

        public function __construct() {

            parent::__construct();
            $this -> load -> model("Mmenu");

        }

        public function index() {
            $title = "Learning Codeiginter";
            $datamenu = $this->Mmenu->getAll();

            $data['title'] = $title;
            $data['datamenu'] = $datamenu;

            $this->load->view('set_menu/tampil_menu', $data);
        }

        public function add() {
            if(!empty($_POST)){
                $nama_menu=$this->input->post('nama_menu');
                $sub_menu=$this->input->post('sub_menu');
                $link=$this->input->post('link');
                $icon=$this->input->post('icon');
                $is_main_menu=$this->input->post('is_main_menu');

                $data = array(
                    "nama_menu" => $nama_menu,
                    "sub_menu" => $sub_menu,
                    "link" => $link,
                    "icon" => $icon,
                    "is_main_menu" => $is_main_menu
                );

                $insert = $this->Mmenu->insert($data); 

                // $query = $this->db->last_query();
                // var_dump($query);exit;

                $pesan="Menu Berhasil di simpan";
                $this->session->set_flashdata('success',$pesan);
                redirect("setting_menu");
            }

            $title = "Tambah Menu";
            $data['title'] = $title;
            $this->load->view('set_menu/formMenu', $data);
        }

        public function edit($id){

            if(!empty($_POST)){
                $nama_menu=$this->input->post('nama_menu');
                $sub_menu=$this->input->post('sub_menu');
                $link=$this->input->post('link');
                $icon=$this->input->post('icon');
                $is_main_menu=$this->input->post('is_main_menu');

                $data = array(
                    "nama_menu" => $nama_menu,
                    "sub_menu" => $sub_menu,
                    "link" => $link,
                    "icon" => $icon,
                    "is_main_menu" => $is_main_menu
                );

                $update = $this->Mmenu->update($data,$id); 
                $pesan="Menu Berhasil di ubah";
                $this->session->set_flashdata('info',$pesan);
                redirect("setting_menu");
            }

            $getMenu = $this->Mmenu->getById($id);

            $title = "Edit Menu";
            $data['title'] = $title;
            $data['getMenu'] = $getMenu;

            $this->load->view('set_menu/formMenu', $data);
        }

        public function delete($id){
            $getMenu = $this->Mmenu->getById($id);
            $delete = $this->Mmenu->delete($id);

            $pesan="Menu Berhasil di hapus";
            $this->session->set_flashdata('danger',$pesan);
            
            redirect('setting_menu');
        }

        // public function view($id){
        //     $getMenu = $this->Mmenu->getById($id);

        //     $title = "Data Menu";
        //     $data['title'] = $title;
        //     $data['getMenu'] = $getMenu;

        //     $this->load->view('set_menu/viewMenu', $data);
        // }

    }