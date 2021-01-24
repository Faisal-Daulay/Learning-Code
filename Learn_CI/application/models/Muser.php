<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * 
	 */
	class Muser extends CI_Model
	{
		var $table = "user",
			$id    = "id_user",
			$user  = "username",
			$pass  = "password",
			$status = "status_user"
		;

		// MENYIMPAN DATA KE DATABASE
		public function insert($data)
		{
			return $this -> db -> insert($this -> table, $data);
		}

		// MENGUBAH DATA
		public function update($data, $id)
		{
			return $this -> db -> update($this -> table, $data, array($this -> id => $id));
		}

		public function updateby($data, $field=array())
		{
			return $this -> db -> update($this -> table, $data, $field);
		}

		// MENGHAPUS DATA 
		public function delete($id) 
		{
			return $this -> db -> delete($this -> table, array($this -> id => $id));
		}

		public function getById($id)
		{
			return $this -> db -> where($this -> id, $id) -> get($this -> table) -> row();
		}

		public function getBy($field)
		{
			return $this -> db -> where($field) -> get($this -> table) -> row();
		}

		// MENAMPILKAN DATA DARI DATABASE
		public function getAll()
		{
			return $this -> db -> get($this -> table) -> result();
		}
	}


/* End of file Muser.php */
/* Location: ./application/models/Muser.php */