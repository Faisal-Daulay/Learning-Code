<?php 
    defined('BASEPATH') or exit('No direct script access allowed');

    class AppController extends CI_Controller
    {

        public function __construct() {
            parent :: __construct();
            $this->load->model('MBuku');
        }

        public function index() {
            $title = "E-Book Application Dhuo Creative";
            $dataBuku = $this->MBuku->getAll();

            
            $data['title'] = $title;
            $data['dataBuku'] = $dataBuku;

            $this->load->view('app', $data);
        }
    }
