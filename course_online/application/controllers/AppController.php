<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AppController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MSiswa");
    }

    public function index()
    {
        if (!isLogin()) {
            $this->load->helper('url'); 
            redirect('login');
        }

        $title = "Course Onlen di Kota Medan";
        $datasiswa = $this->MSiswa->getAll();

        $data['title'] = $title;
        $data['datasiswa'] = $datasiswa;
        $this->load->view('app', $data);
    }

    public function errorpage()
    {
        $this->load->view('error');
    }
}

/* End of file AppController.php */
/* Location: ./application/controllers/AppController.php */