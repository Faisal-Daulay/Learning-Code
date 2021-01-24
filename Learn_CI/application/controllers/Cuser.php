<?php 
	if (!defined('BASEPATH')) exit('no direction script access allowed');

	/**
	 * 
	 */
	class Cuser extends CI_Controller
	{
		
		function __construct()
		{
			parent :: __construct();
			$this -> load -> model("Muser");
		}

		public function index () {
			$title = "Learning Codeiginter";
			$datauser = $this->Muser->getAll();

			$data['data'] = $title;
			$data['datauser'] = $datauser;

			$this -> load ->view('user/tampil_user', $data);

		}

		public function add()
		{
			if (!empty($_POST)) {
				$user = $this -> input -> post('user');
				$pass = $this -> input -> post('pass');
				$status = $this -> input -> post('status');
			
				$data = [
					"username" => $user,
					"password" => $pass,
					"status_user" => $status
				];

				$insert = $this -> Muser -> insert($data);
				// $update = $this -> Muser -> update($data, $id);
				$pesan = "User berhasil di tambah";
				$this -> session -> set_flashdata('info', $pesan);
				redirect('Cuser');
			}

			$title = "Tambah User";
			$data['title'] = $title;
			$this -> load -> view('user/formUser', $data);
		}

		public function edit($id)
		{
			if (!empty($_POST)) {
				$user = $this -> input -> post('user');
				$pass = $this -> input -> post('pass');
				$status = $this -> input -> post('status');
			
				$data = [
					"username" => $user,
					"password" => $pass,
					"status_user" => $status
				];

				$insert = $this -> Muser -> update($data, $id);
				// $update = $this -> Muser -> update($data, $id);
				$pesan = "User berhasil di ubah";
				$this -> session -> set_flashdata('info', $pesan);
				redirect('Cuser');
			}

			$getUser = $this -> Muser -> getById($id);

			$title = "Tambah User";
			$data['title'] = $title;
			$data['getUser'] = $getUser;

			$this -> load -> view('user/formUser', $data);
		}

		public function delete($id)
		{
			$getUser = $this -> Muser -> getById($id);
			$delete = $this -> Muser -> delete($id);

			$pesan = "Hapus data berhasil";
			$this->session->set_flashdata('danger', $pesan);
			redirect('Cuser');
		}



	}