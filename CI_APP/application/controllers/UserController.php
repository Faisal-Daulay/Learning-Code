<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

	public function index()
	{

		$dataNama = array(
			'X' => 'jhon',
			'XI' => 'yasir',
			'XII' => 'khairul'
		);

		$data['data'] = $dataNama;

		$this->load->view("user/index", $data);
	}

	public function tambah()
	{
		$data = array('1', '2', '3');
		var_dump($data);
		//echo "TAMBAH DATA";
	}
}
