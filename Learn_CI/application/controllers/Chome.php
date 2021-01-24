<?php if (!defined('BASEPATH')) exit('No direction script access allowed');

class Chome extends CI_Controller {

    public function index () {
        
        if (!isLogin()) {
            redirect('login');
        } 

        $title = "Learning Codeiginter Lagi";

        $data['title'] = $title;

        $this->load->view('homepage', $data);

    }

}
