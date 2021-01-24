<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MBuku");
    }

    public function index()
    {
        if(!isLogin()){
            redirect('login');
        }
        $title = "E-Book - Tempat Belajar Onlen diKota Medan";
        $dataBuku = $this->MBuku->getAll();
        
        $data['title'] = $title;
        $data['dataBuku'] = $dataBuku;
        $this->load->view('app', $data);
    }

    public function errorpage(){
        $this->load->view('error');
    }
}

/* End of file AppController.php */
/* Location: ./application/controllers/AppController.php */