<?php

class Auth_model extends CI_Model
{
	private $_table = "user";
	const SESSION_KEY = 'ID_USER';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'rules' => 'required'
			]
		];
	}

	public function login($username, $password)
	{
		$this->db->where('USERNAME_USER', $username);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if ($password != $user->PASSWORD_USER) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata(['username' => $user->USERNAME_USER]);
		$this->_update_last_login($user->ID_USER);

		return $this->session->has_userdata('username');
	}

	public function current_user()
	{
		if (!$this->session->has_userdata('username')) {
			return null;
		}

		$username = $this->session->userdata('username');
		$query = $this->db->get_where($this->_table, ['USERNAME_USER' => $username]);
		return $query->num_rows();
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		return !$this->session->has_userdata('username');
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['ID_USER' => $id]);
	}
}