<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clogin extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this -> load -> model("Mlogin");
    }

    public function login(){
        if(!empty($_POST)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cekUser = $this->Mlogin->cekLogin($username, $password);
            if($cekUser == NULL){
                redirect('login');
            }else{
                $arr = array(
                    'user' => 1,
                    'username' => $cekUser->username
                );
                $this->session->set_userdata($arr);
                redirect('home');
            }
        }

        $this->load->view('login/login');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

}


/* End of file filename.php */
