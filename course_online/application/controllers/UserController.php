<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'MUser',
            'MSiswa'
        ));
    }

    public function index()
    {
        $dataArray = array(
            'XI' => 'jhon',
            'VII' => 'faisal',
            'V' => 'khairul'
        );

        $data['data'] = $dataArray;
        $this->load->view("user/index", $data);
    }

    public function delete($id)
    {
        $data['id'] = $id;
        $this->load->view("user/delete", $data);
    }

    public function login()
    {
        if (!empty($_POST)) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cekUser = $this->MUser->cekLogin($username, $password);
            if ($cekUser == NULL) {
                redirect('login');
            } else {
                $arr = array(
                    'user' => 1,
                    'username' => $cekUser->username
                );
                $this->session->set_userdata($arr);
                redirect('home');
            }
        }

        $this->load->view('auth/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}

/* End of file UserController.php */
/* Location: ./application/controllers/UserController.php */